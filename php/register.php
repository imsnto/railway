<?php 
include("connection.php");
include("../html/register.html");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $confirm_password = $_POST['confirm_password'];
    $nid = $_POST['nid'];
    $phone = $_POST['phone'];

    $check_query = "SELECT phone FROM users WHERE phone = '$phone'";
    $result = mysqli_query($conn, $check_query);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<script type='text/javascript'> alert('Registration unsuccessfull'); </script>";        
    }
    else{
        $query = "INSERT INTO users( name, phone, email, nid, password) VALUES('$name', '$phone', '$email', '$nid', '$hashed_password')";
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
