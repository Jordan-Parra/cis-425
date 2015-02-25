<?php
	// server_connect.php
	
	// Variables
	$host	= 'localhost';
	$user	= 'japarra4';
	$pw		= 'cis425';
	$db		= 'japarra4';
	
	// Connect to the DB
	$dbc = mysqli_connect($host, $user, $pw, $db) or die ('Unable to connect! (SERVER)');
?>