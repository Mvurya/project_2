<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
<?php require_once("includes/db_connect.php"); ?>
<?php include_once("templates/nav.php"); ?>
<div class="banner">
<h1>Sign in</h1>
</div>
<div class="content">
<form action=""method="post">
    <label for="">Username:</label><br>
    <input type="text" id="fn"
    placeholder="Fullname"><br><br>

    <label for="pwd"> Password:</label><br>
    <input type="password" id="pwd"
    placeholder="password"><br><br>
    <br><br><input type="submit" name="submit" value="Submit" />
    </div>
    <?php include_once("templates/sidebar.php"); ?>

    <div class="footer">
        copyright ALL SPECS CO 2024 &copy; All rights reserved
    </div>




</html>