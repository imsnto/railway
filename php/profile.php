<?php

include("connection.php");

$tbl_name="users"; // Table name
$phn='01991533980';

$sql = "SELECT * FROM $tbl_name WHERE phone='01991533980' ";

//if(isset($_SESSION['phone'])){}
/*else{
		
	header("location:home.php");
		
}*/

mysqli_select_db($conn,"$dbname") or die("cannot select db");

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);




?>



<!DOCTYPE html>
<html>
<head> 
        <title> Home </title>
        <link rel="stylesheet" href="../css/style.css" >
		<link rel="stylesheet" href="../css/style1.css" >
    </head>
    <body class = "backimage">
	
	<div class="wrap">
		 Header 
		<div class="header">
			<div style="float:left;width:150px;">
				<img src=""/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			
		</div>

		 Navigation bar 
		<nav class = "homeNav" > 
            <div class = "navDiv">
                <a class = "navbutton" href="home.php"> Home </a>
                <a class = "navbutton" href="login.php"> Login </a>
                <a class = "navbutton" href="register.php"> Register </a>
                <a class = "navbutton" href="train.php"> Train Information </a>
                <a class = "navbutton" href="contact.php"> Contact Us </a>
            </div>
        </nav>
		
		<div class="profile">
			
			<table >
			<tr>
				<td><span style="font-weight:bold;font-size:25px;">Profile</span>
				
</tr>
			
			<tr>
			
				<td>
					
					<table class="table">
					<tr>
						<td >Name : </td> 
						<td style="text-transform:capitalize;"><?php echo $row['name']; ?></td>
					</tr>

					<tr>
						<td>Phone : </td> 
						<td><?php echo $row['phone'];?></td>
					</tr>

					<tr>
						<td>E-Mail : </td>
						<td><?php echo $row['email'];?></td>
					</tr>

                    <tr>
						<td>NID : </td> 
						<td><?php echo $row['nid']; ?></td>
					</tr>

                    <tr>
						<td> Password :</td> 
						 <td><?php echo $row['password'];?></td>   
					</tr>
					
					<tr><td></td> <td></td></tr>
					</table>
					
				</td>
			</tr>
			
			<tr>
				<td>
				<span style="width:35%;"><a class = "btn" href="editprofile.php">Edit profile</a></span>
				</td>
			</tr>
		</table>
		</div>

		

</body>
  
  
</html>