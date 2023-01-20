<?php 
include("connection.php");
include("../html/show.html");
session_start();

$name = $_POST['train-name'];
$sql = "SELECT * FROM $name";

$result = mysqli_query($conn,$sql);
?>

<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <br> <br> <br> 
        <h1 style = "width: 50%; margin: 0 auto; text-transform:capitalize; padding-left:500px;">
            <?php 
                echo $name . ' Express';
            ?>
        </h1>
        <br> <br> 

    <div style = "  width: 50%; margin: 0 auto;padding: 30px; border: 1px solid #ccc;background-color: #f2f2f2; box-shadow: 0 0 10px #ccc; ">
        <table style = " width: 100%; border-collapse: collapse; border:0;   text-transform: capitalize;" >
            <tr>
                <th>Routes</th>
                <th>Arrival</th>
                <th>Departure</th>
            </tr>
            <?php                
                if(mysqli_num_rows($result) > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr>
                            <td> " .$row['dest'] . " </td>
                            <td> ".$row['arrival']." </td>
                            <td> ".$row['departure']." </td>
                            </tr>";
                    }
                }
            ?>
        </table>
    </div>
    <br> <br> <br>

    </body>
</html>
