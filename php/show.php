

<?php 
// establish connection
include("connection.php");
include("../html/show.html");

session_start();

// retrieve the query result from the session variable
$result = $_SESSION['query_result'];

if(isset($result)){
    // check if the query return any result or not
    if(!empty($result)){
        $n = $result->num_rows;
        echo "<script type='text/javascript'> alert('$n');</script>";
        // fetch the data from query result
        while($row = $result->fetch_assoc()) {   
            $str = "Train name: ". $row['tr_name'];
            echo "<script type='text/javascript'> alert('$str');</script>";
        }
    }else{
        echo "<script type='text/javascript'> alert('No Results');</script>";
    }
}else {
    echo "<script type='text/javascript'> alert('Session variable not set');</script>";
}
?>
