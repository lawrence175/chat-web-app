<?php

session_start();
include '../db_config/config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$sql="SELECT * FROM signup WHERE username='$uname' AND password='$pass'";
$result=$conn->query($sql);
if (!$row=$result->fetch_assoc()) {
	# code...
	header("Location:error.php");
}
else{

	$_SESSION['name']=$_POST['uname'];
	header("Location:home.php");
}
?>