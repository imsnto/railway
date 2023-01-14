<?php 
include("connection.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $nid = $_POST['nid'];
    $phone = $_POST['phone'];

    $check_query = "SELECT phone FROM users WHERE phone = '$phone'";
    $result = mysqli_query($conn, $check_query);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<script type='text/javascript'> alert('Registration unsuccessfull'); </script>";        
    }
    else{
        $query = "INSERT INTO users( name, phone, email, nid, password) VALUES('$name', '$phone', '$email', '$nid', '$password')";
        $result = mysqli_query($conn, $query);
        if($result) {
            echo "<script type='text/javascript'> alert('Registration successfully'); </script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Registration unsuccessfull data insert failed'); </script>";
        }
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

        <form class="registration-form" method = "post" action = "register.php">
            <h2>Railway Reservation Form</h2>
        
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="nid">NID:</label>
            <input type="text" id="nid" name="nid" required>

            <label for = "password"> Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="password"> Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>