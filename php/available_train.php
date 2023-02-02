<?php 
include("connection.php");
include("../html/available_train.html");
session_start();


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include("connection.php");

    $from  = $_POST['from'];
    $to    = $_POST['to'];
    $doj  = $_POST['doj'];
    $ticket_class = $_POST['ticket-class'];



    $doj = date("l", strtotime($doj));
    $doj = strtolower($doj);
    $doj = substr($doj, 0, 3);

    $search = "SELECT route.src, route.dest FROM route JOIN train ON route.tr_no = train.tr_no WHERE (route.src = '$from' AND route.dest = '$to') AND train.$doj = true";

    $res = mysqli_query($conn,$search);
}
?>

<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <br> <br> <br> 
        <h1 style = "width: 50%; margin: 0 auto; text-transform:capitalize; padding-left:500px;">

        </h1>
        <br> <br> 

    <div style = "  width: 50%; margin: 0 auto;padding: 30px; border: 1px solid #ccc;background-color: #f2f2f2; box-shadow: 0 0 10px #ccc; ">
        <table style = " width: 100%; border-collapse: collapse; border:0;   text-transform: capitalize;" >
            <tr>
                <th>Train Name</th>
                <th>Available Seat</th>
            </tr>
            <?php                

                if(mysqli_num_rows($res) > 0){

                    while($row = $res->fetch_assoc()){
                        echo "<tr>
                            <td> " .$row['tr_name'] . " </td>
                            <td>   </td>
                            </tr>";
                    }
                }
                else{
                    echo "<script type='text/javascript'> alert('56'); </script>";
                }
            ?>
        </table>
    </div>
    <br> <br> <br>

    </body>
</html>
