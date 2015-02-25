<?php
	// Build 3 single0dimensional arrays for usernames, passords, and full names
	$usernames = array("deande", "japarra4", "dummy1", "dummy2", "dummy3");
	$passwords = array("redbull", "cis425", "asdfasdf", "asdfasdf", "asdfasdf");
	$fullnames = array("Dennis A", "Jordan P", "dummyone", "dummytwo", "dummythree");
	
	// This variable will set to true when we match a username
	$matched = false;
	
	// This variable tells us the position (index) in the arrays
	$index = 0;
	
	// Check to see if the username is in our array
	for ($i = 0; $i < count($usernames); $i++)
	{
		if ($usernames[$i] == $_POST["username"])
		{
			$matched = true;
			$index = $i;
		}
	}
	
	// See if we got a match
	if (!$matched)
	{
		header('Location: login.php?rc=1');
		exit;
	}
	
	// If we get to here, we have a valid username
	
	// Check the password
	if ($passwords[$index] == $_POST["password"])
	{
		session_name("customer");
		session_start("customer");
		$_SESSION["customer"] = $fullnames[$index];
		header('Location: welcome.php');
		exit;
	}
	else
	{
		header('Location: login.php?rc=2');
		exit;
	}
	
	//
	header('Location: login.php?rc=3');
	exit;
	
?>