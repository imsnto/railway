<?php 

include("connection.php");
include("../html/login.html");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $check_query = "SELECT password FROM users WHERE phone = '$phone'";
    $check_result = mysqli_query($conn, $check_query);

    $row = mysqli_fetch_assoc($check_result);

    if(password_verify($password, $row['password'])) {
            $sql = "INSERT INTO active (phone) VALUES ('$phone')";
            mysqli_query($conn, $sql);
            echo "<script> alert('Login Succesfull')</script>";
        }
    else {
            echo "<script> alert('Incorrect Password or phone number' )</script>";
    }
}
?>
