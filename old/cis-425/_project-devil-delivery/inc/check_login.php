<?php
	// Connect to server
	include('connect/server_connect.php');
	
	// Grab username and password
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];
	
	// Match username against database
	$query = "SELECT * FROM dd_customers WHERE uname= '$uname'";
	
	// Pull that list from the database
	$result = mysqli_query($dbc, $query) or die('Username read error!');
	
	// Check if there are any results
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: ../login.php?rc=1');
		exit;
	}
	
	// Match password against database
	$query = "SELECT * FROM dd_customers WHERE pword= '$pword'";
	
	// Pull that list from the database
	$result = mysqli_query($dbc, $query) or die('Password read error!');
	
	// Check if there are any results
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: ../login.php?rc=2');
		exit;
	}
	
	//
	$query = "SELECT * FROM dd_customers WHERE uname = '$uname' and pword = '$pword'";
	
	//
	$result = mysqli_query($dbc, $query) or die('Account information read error!');
	
	// Check if there are any results
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: ../login.php?rc=3');
		exit;
	}
	
	//
	mysqli_close($dbc);
	
	//
	session_name('customer');
	session_start('customer');
	
	//
	$row = mysqli_fetch_array($result);
	$_SESSION['customer'] = $row['f_name'] . ' ' . $row['l_name'];
	header('Location: ../welcome.php');
	exit;
?>