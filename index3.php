<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require_once("includes/db_connect.php"); ?>
<?php include_once("templates/nav.php"); ?>
<div class="banner">
    <h1>CONTACT US</h1>
    </div>
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
                placeholder="Fullname" name="fullname" required><br><br>

                <label for="em">Email:</label><br>
                <input type="email" id="em"
                placeholder="Email" name="email" required><br><br>

                <label for="sl">Subject:</label> <br>
                <select name="Subject_Line" id="sl">
                <option value="subject line">--Select Subject--</option>
                    <option value="repairs">Repairs</option>
                    <option value="foundation">Foundation</option>
                    <option value="wiring">Wiring</option>
                    <option value="painting">Painting</option>
                </select> <br> <br>

                <label for="msg">Message:</label><br>
                <textarea id="msg" 
                placeholder="Enter your message here" name="message" rows="4" cols="50">
                </textarea><br><br>

                <input type="submit" name="send_message" value="Send Message">
            </form>
    </div>
    <?php include_once("templates/sidebar.php"); ?>
</body>
</html>