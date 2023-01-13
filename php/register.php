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

        <form class="registration-form" onsubmit="return validateForm()">
            <h2>Railway Reservation Form</h2>
        
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="nid">NID:</label>
            <input type="text" id="nid" name="nid" required>
            
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
            
            <label for="date">DOB</label>
            <input type="date" id="date" name="date" required>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>