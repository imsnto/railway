<?php 
session_start();
?>

<!DOCTYPE html> 
    <head> 
        <title> Home </title>
        <link rel="stylesheet" href="../css/style.css" >
    </head>
    <body class = "backimage"> 
        <nav class = "homeNav" > 
            <div class = "navDiv">
                <a class = "navbutton" href="home.php"> Home </a>
                <a class = "navbutton" href="login.php"> Login </a>
                <a class = "navbutton" href="register.php"> Register </a>
                <a class = "navbutton" href="train.php"> Train Information </a>
                <a class = "navbutton" href="contact.php"> Contact Us </a>
            </div>
        </nav>

        <br> <br> <br> <br> <br>

        <form class="contact-form" onsubmit="return submitForm()">
            <h2>Contact Us</h2>
        
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
        
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        
            <input type="submit" value="Submit">
          </form>
    </body>
</html>