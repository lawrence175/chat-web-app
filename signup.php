<?php

include '../db_config/config.php';

$uname=$_REQUEST['uname'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];

$sql="INSERT INTO signup(username,email,password) VALUES ('$uname','$email','$pass')";
$result=$conn->query($sql);

header("Location:../index.php");

?>