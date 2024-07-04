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
    require_once ("includes/db_connect.php"); 
    include_once ("templates/nav.php");
    

    $messageId=$_GET["messageId"];
    $spot_msg = "SELECT * FROM messages WHERE messageId = '$messageId' LIMIT 1";
    $spot_msg_res = $conn->query($spot_msg);
    $spot_msg_row = $spot_msg_res->fetch_assoc();

    if(isset($_POST["update_message"])){

        $fn= mysqli_real_escape_string($conn,$_POST["fullname"]);
        $em= mysqli_real_escape_string($conn,$_POST["email"]);
        $sl= mysqli_real_escape_string($conn,$_POST["Subject_Line"]);
        $msg= mysqli_real_escape_string($conn,$_POST["message"]);
        $messageId= mysqli_real_escape_string($conn,$_POST["MessageId"]);

        $update_message = "UPDATE messages SET sender_name='$fn', sender_email='$em', subject_line='$sl',text_message='$msg' WHERE messageId='$messageId' LIMIT 1";
    
        if ($conn->query($update_message) === TRUE) {
            header("Location: view_messages.php");
            exit();
        } else {
            echo "Error: " . $update_message . "<br>" . $conn->error;
        }
    }
    ?>


    <div class="row:after">
        <div class="content">
        <p>For a spectacles company, the Contact Us page should provide various ways for customers to reach out for inquiries, support, or feedback. <br>
     Here is an example of how the contact information could be structured:</p>

     <ul> 
        <li>Phone Number: 1-800-SPEC-COMP</li>
        <li>Email: info@spectaclescompany.com</li>
        <li>Live Chat Support: Available on the website during business hours</li>
        <li>Physical Address: 123 Spectacle Street, Cityville, State, Zip Code</li>
    </ul>

    <p>This setup ensures that customers have multiple channels through which they can contact the spectacles company for any assistance they may need.</p> 
           
            <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="contacts_form label">
                <label for="fn">Fullname:</label><br>
                <input type="text" id="fn"
                placeholder="Fullname" name="fullname" required value="<?php print $spot_msg_row["sender_name"];?>"><br><br>

                <label for="em">Email:</label><br>
                <input type="email" id="em"
                placeholder="Email" name="email" required value="<?php print $spot_msg_row["sender_email"];?>"><br><br>

                <label for="sl">Subject:</label> <br>
                <select name="Subject_Line" id="sl">
                <option value="<?php print $spot_msg_row["sender_name"];?>"><?php print $spot_msg_row["subject_line"];?></option>
                    <option value="lens correction">lens correction</option>
                    <option value="Frame fixing">Frame fixing</option>
                    <option value="lens cleansing">lens cleansing</option>
                    <option value="eye checkup">eye checkup</option>
                </select> <br> <br>

                <label for="msg">Message:</label><br>
                <textarea id="msg" 
                placeholder="Enter your message here" name="message" rows="4" cols="50" required><?php print $spot_msg_row["text_message"];?>"
                </textarea><br><br>

                <input type="submit" name="update_message" value="Update Message">
                <input type="hidden" name="MessageId" value="<?php print $spot_msg_row["messageId"];?>">
            </form>
        </div>
        <?php include_once ("templates/sidebar.php"); ?>
    </div>
    
    

</body>
</html>