<?php
session_start();
include 'connect.php';
$name = escape_data($_POST['user']);
$password= escape_data($_POST['pass']);
$sql="SELECT * FROM `users` WHERE username='$name' AND password='$password'";
 $result=$conn->query($sql);
 if (!$row =mysqli_fetch_assoc($result)){
echo "<br><br><p><font color='red' size='+1'>Either the Username or the Password are incorrect. Try Again.</font></p>";

mysql_close(); // Close the database connection

exit();

 }
 else {

 	$_SESSION['user_id']=$row['user_id'];
 	$_SESSION['name']=$row['username'];
 	$_SESSION['college']=$row['college'];
 	$_SESSION['rollno']=$row['rollno'];
 	$_SESSION['user_name6']=$row['dp'];
 	$_SESSION['dept']=$row['department'];
 	$tokenId = rand(10000, 9999999);
$query2 = "UPDATE `users` SET tokenid = '$tokenId' WHERE user_id = ".$_SESSION['user_id']." ";
 $conn->query($query2);
$_SESSION['token_id'] = $tokenId;
session_regenerate_id(); 
 }
  header("Location:  index.php");
?>