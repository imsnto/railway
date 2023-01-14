<?php 
include("connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $check_query = "SELECT phone, password FROM users WHERE phone = '$phone' AND password = '$password'";
    $check_result = mysqli_query($conn, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        $sql = "INSERT INTO user (phone) VALUES ('$phone')";
        mysqli_query($conn, $sql);
        echo "<script>alert('Login Successful');</script>";
    }
    else {
        echo "<script>alert('Login Unsuccessful');</script>";
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
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
        
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        
            <input type="submit" value="Login">
          </form>
    </body>
</html>