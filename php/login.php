<?php 
include("connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql); 

    if(!$result){
        echo "<script>alert('Login unsuccessful');</script>";
    }
    else {
        echo "<script>alert('Login Successful');</script>";
    }
}
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

        <form class="login-form" method = "post" action = "login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        
            <input type="submit" value="Login">
          </form>
    </body>
</html>