<?php

$conn=mysqli_connect("localhost","root","cyber","chat");
if (!$conn) {
	# code...
	die("connection failed".mysqli_connect_error());
}

?>