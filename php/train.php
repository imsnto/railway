<?php 
include("connection.php");
include("../html/train.html");
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tr_name = $_POST['train-name'];

    $sql = "SELECT * FROM train WHERE tr_name = '$tr_name'";
    $result = mysqli_query($conn, $sql);
    

    if(mysqli_num_rows($result) > 0){
        $_SESSION['query_result'] = $result;

        $no_of_train = mysqli_num_rows($result);    
        header("Location: show.php");
        exit;

        while($row = $result->fetch_assoc()) {
            $str = "Train Number: " . $row['tr_no'] .  '\n' ." Train Name: " . $row['tr_name'] . '\n'. "Source: " . 
                $row['source'] . '\n'. "Destination: " . $row['dest'] . '\n' . "Departure time: ". $row['departure_time']. 
                '\n'. "Arrival Time: ". $row['arrival_time'] . '\n'. "Available Seats: ". $row['available_seat'];

            echo "<script type = 'text/javascript'> alert( '$str'); </script>";
        }
    }
    else {
        echo "<script type='text/javascript'> alert('sorry');</script>";
    }
    
}

?>
