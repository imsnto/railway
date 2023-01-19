<?php 
include("connection.php");
include("../html/home.html");
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $from  = $_POST['from'];
    $to    = $_POST['to'];
    $doj  = $_POST['doj'];
    $ticket_class = $_POST['ticket-class'];

    $doj = date("l", strtotime($doj));
    $doj = strtolower($doj);
    $doj = substr($doj, 0, 3);

    $search = "SELECT route.src, route.dest FROM route JOIN train ON route.tr_no = train.tr_no WHERE (route.src = '$from' AND route.dest = '$to') AND train.$doj = true";

    $result = mysqli_query($conn,$search);
    if(mysqli_num_rows($result) > 0)
    {
        $n = mysqli_num_rows($result);
         echo "<script type='text/javascript'> alert('$n'); </script>";
    }
    else{
        echo "<script type='text/javascript'> alert('sorry'); </script>";

    }

}

?>

