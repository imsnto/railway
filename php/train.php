<?php 
include("connection.php");
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

        <form class="search-form" onsubmit="return searchTrain()">
            <label for="train-number">Train Number:</label>
            <input type="text" id="train-number" name="train-number" required>
        
            <input type="submit" value="Search">
          </form>
    </body>
</html>