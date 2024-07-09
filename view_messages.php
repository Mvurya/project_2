<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php 
include_once ("templates/nav.php");
require_once("includes/db_connect.php");


if(isset($_GET["DelId"])){
    $DelId=$_GET["DelId"]; 

    // sql to delete a record
    $del_mes = "DELETE FROM messages WHERE messageId='$DelId' LIMIT 1";

    if ($conn->query($del_mes) === TRUE) {
        header("Location:view_messages.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

    <div class="row:after">

        <div class="content"> 
            <h2>Messages</h2>
            <p>To clone a repository, run the Git: Clone command in the Command Palette (Ctrl+Shift+P), or select the Clone Repository button in the Source Control view. If you clone from GitHub, VS Code prompts you to authenticate with GitHub. Then, select a repository from the list to clone to your machine.</p>
            <table>
                <thead>
                <tr>
                    <th colspan="2">Sender name</th>
                    <th>Sender Email</th>
                    <th>Subject line</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
            <?php
            $select_msg = "SELECT * FROM messages ORDER BY datecreated DESC";
            $sel_msg_res = $conn->query($select_msg);
            $en= 0;

            if ($sel_msg_res->num_rows > 0) {
                
              // output data of each row
              while($sel_msg_row = $sel_msg_res->fetch_assoc()) {
                $en++;
               ?>
               
               <tr>
                <td><?php print $en; ?>.</td>
                <td><?php print $sel_msg_row["sender_name"]; ?></td>
                <td><?php print $sel_msg_row["sender_email"]; ?></td>
                <td><?php print "<strong>". $sel_msg_row["subject_line"] . '</strong> -' . substr($sel_msg_row["text_message"],0,20) . '...'; ?></td>
                <td><?php print date("d-M-Y H:i", strtotime( $sel_msg_row["datecreated"])); ?></td>
                <td> [ <a href="edit_msg.php?messageId=<?php print $sel_msg_row["messageId"]; ?>">Edit</a>] [<a href="?DelId=<?php print $sel_msg_row["messageId"]; ?>" onclick="return confirm('This action will delete this message permanently. \n Are you sure you want to proceed?');">Del]</td>
               </tr>
               <?php
              }
            } else {
                echo "0 results";
            }
?>
         </tbody>
         <thead>
                <tr>
                    <th colspan="2">Sender Name</th>
                    <th>Sender Email</th>
                    <th>Subject line</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                </thead>   
                
            </table>
        </div>

        <?php include_once ("templates/sidebar.php"); ?>
    </div>
    
        

    
</body>
</html>