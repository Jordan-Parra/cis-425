<?php
	// Variables
	$host	= 'localhost';
	$user	= 'root';
	$pw		= '';
	$db		= 'fnl2147';
	
	// Connect to the DB
	$dbc = mysqli_connect($host, $user, $pw, $db) or die ('Unable to connect! (LOCAL)');
?>