<?php
	//
	//
	
	//
	include('../connect/server_connect.php');
	
	//
	$uname = $_POST['username'];
	$pword = $_POST['password'];
	
	//
	$query = "SELECT * FROM hw8 WHERE uname= '$uname'";
	
	//
	$result = mysqli_query($dbc, $query) or die('Username read error!');
	
	
	
	//
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: login.php?rc=1');
		exit;
	}
	
	//
	$query = "SELECT * FROM hw8 WHERE pword= '$pword'";
	
	//
	$result = mysqli_query($dbc, $query) or die('Password read error!');
	
	//
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: login.php?rc=2');
		exit;
	}
	
	//
	
	//
	mysqli_close($dbc);
	
	//
	session_name('customer');
	session_start('customer');
	
	//
	$row = mysqli_fetch_array($result);
	$_SESSION['customer'] = $row['name'];
	header('Location: welcome.php');
	exit;
	
	//
	//
	header('Location: login.php?rc=3');
	exit;
?>