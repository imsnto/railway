<?php 
session_start();
?>
<html>
    <head>
        <title></title>
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
        <br> <br> <br>
        <header>
            <h1>Welcome to Railway</h1>
        </header>

        <br> <br> <br> <br>
    <form class = "home_form" method = "post" action = "home.php"> 
            <div>
                <label for = "from" > From </label>
                <input type = "text" id = "from" name = "from" placeholder = "From Station">
                <br> <br>

                <label for = "to"> To </label>
                <input type = "text" id = "to" name = "to" placeholder = "To Station">
                <br> <br>

                <label for = "doj">Date of Journey</label>
                <input type = "date" id = "doj" name = "doj" placeholder = "Pick a date">
                <br> <br>

                <label for = "clas">Choose Class</label>
                <input type = "text" id = "clas" name = "clas" placeholder = "Choose a class">
            </div>
        </form>

    </body>
</html>