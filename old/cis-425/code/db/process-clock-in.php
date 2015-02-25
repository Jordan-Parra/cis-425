<?php
	// Connect to server
	include('db/db-connect.php');
	
	// Grab username and password
	$userid	= $_POST['user-id'];
	$uname 	= $_POST['username'];
	$pword 	= $_POST['password'];
	$activity 	= $_POST['activity'];
	
	// Match username against database
	$query = "SELECT * FROM timecard WHERE userId= '$userid'";
	$result = mysqli_query($dbc, $query) or die('User ID read error!');
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: ../index.php?rc=1');
		exit;
	}
	
	// Match against database
	$query = "SELECT * FROM timecard WHERE userName= '$uname'";
	$result = mysqli_query($dbc, $query) or die('Username read error!');
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: ../index.php?rc=2');
		exit;
	}
	
	// Match against database
	$query = "SELECT * FROM timecard WHERE password= '$pword'";
	$result = mysqli_query($dbc, $query) or die('Password read error!');
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: ../index.php?rc=3');
		exit;
	}
	
	//
	$query 	= INSERT INTO `fnl2147`.`timecard` (`id`, `userId`, `userName`, `password`, `activity`, `timeCardStamp`) VALUES (NULL, '$userId', 'uname', 'password', '$activity', NULL);
	
	//
	mysqli_close($dbc);
	
	//
	session_name('employee');
	session_start('employee');
	
	//
	$row = mysqli_fetch_array($result);
	$_SESSION['employee'] = $row['f_name'] . ' ' . $row['l_name'];
	header('Location: ../timecard.php');
	exit;
?>