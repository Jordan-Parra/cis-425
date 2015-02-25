<?php
	//
	session_name("customer");
	session_start("customer");
	unset($_SESSION['customer']);
	session_destroy("customer");
	
	//
	header('Location: ../login.php');
	exit;
?>