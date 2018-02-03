<?php
	session_start();
	if(isset($_GET['logout'])) {
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		unset($_SESSION['usertype']);
		unset($_SESSION['name']);
		
	header('location:../index.php');
	
	} else {
		echo mysql_error();
		header('location:../index.php');
	} session_destroy();
	header('location:../index.php');
?>