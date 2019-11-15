<?php

session_start();
if (isset($_SESSION['name'])) {
	# code...
	echo $_SESSION['name'];
}

?>