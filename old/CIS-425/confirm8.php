<!DOCTYPE html>

<!--
	Jordan Parra
	Assignment 8
	CIS-425
	Fall 2014
-->

<?php
	// Connect to the db (LOCAL | SERVER)
	include('connect/server_connect.php');
	
	// Values from HTML
	$oname		= $_POST['name'];
	$name		= mysqli_real_escape_string($dbc, $oname);
	$uname 		= $_POST['username'];
	$pword		= $_POST['password'];
	$email		= $_POST['email'];
	$prob		= $_POST['probation'];
	$hot		= $_POST['hot'];
	$smart		= $_POST['smart'];
	$beers		= $_POST['beer'];
	$ocomments	= $_POST['response'];
	$comments	= mysqli_real_escape_string($dbc, $ocomments);
	
	// Build our SQL statement
	$query 	= "INSERT INTO hw8(name, uname, pword, email, prob, hot, smart, beers, comments)" . "VALUES('$name', '$uname', '$pword', '$email', '$prob', '$hot', '$smart', '$beers', '$comments')";
	
	// Run the query
	$result	= mysqli_query($dbc, $query) or die('Unable to write to DB!');
	
	// Close the SQL connection
	mysqli_close($dbc);
?>

<html lang="en">
	<head>
		<!-- Meta tag -->
		<meta charset="utf-8" />
		<meta name="robots" content="noindex,nofollow" />
		<meta http-equiv="refresh" content="5; url=a8/login.php" />
		
		<!-- CSS -->
		<link type="text/css" rel="stylesheet" href="stylesheets/a8ss.css" />
		
		<!-- Script -->
		
		
		<!-- Web Page Title -->
		<title>Confirmation Page</title>
	</head>
	<body>
		<!-- Header -->
		<header>
			<p>Jordan Parra</p>
			<p>Confirmation Page</p>
		</header>
		<!-- Content -->
		<div id="container3">
			<div id="container2">
				<div id="container1">
					<div id="left_column">
						<!-- Internal Navigation Panel -->
						<nav id="internal_nav">
							<p>Site Navigation</p>
							<ul>
								<li><a href="index.htm">Home</a></li>
								<li><a href="a2/index.htm">A2</a></li>
								<li><a href="a3/index.htm">A3</a></li>
								<li><a href="a4/index.htm">A4</a></li>
								<li><a href="a5/index.htm">A5</a></li>
								<li><a href="a6/index.htm">A6</a></li>
								<li><a href="a7/index.htm">A7</a></li>
								<li><a href="a8/index.htm">A8</a></li>
								<li><a href="a9/index.htm">A9</a></li>
								<li><a href="_project-devil-delivery/index.php">Project</a></li>
							</ul>
						</nav>
					</div>
					<div id="center_column">
						<!-- Welcome Message -->
						<div id="welcome_message">
							<p class="bold">
								<?php
									date_default_timezone_set('MST');
									$time = date('H');
									if ($time < '12')
									{
										echo "Good Morning " . $oname . " - Thank you for registering";
									}
									elseif ($time < '17')
									{
										echo "Good Afternoon " . $oname . " - Thank you for registering";
									}
									else
									{
										echo "Good Evening " . $oname . " - Thank you for registering";
									}
								?>
							</p>
							<p>Your information has been added to our database.</p>
							<p>You may click the "Login" link below, or this page will automatically re-direct you to the Login Page in 5 seconds</p>
							<p class="bold">Click <a href="a8/login.php">here</a> to login now...</p>
						</div>
					</div>
					<div id="right_column">
						<!-- External Navigation Panel -->
						<nav id="external_nav">
							<p>External Links</p>
							<p><a href="http://8tracks.com/">8tracks</a></p>
							<p><a href="https://www.spotify.com/us/"><img src="images/spotify-logo.jpg" alt="spotify" /></a></p>
							<p><a href="http://www.last.fm/"><img src="images/lastfm-logo.png" alt="lastfm" /></a></p>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->
		<footer>
			<img src="images/html5.png" alt="xhtml icon" />
			<a href="email/email.htm"><img src="images/email.png" alt="email icon" /></a>
			<img src="images/css3.png" alt="css icon" />
			<p id="copyright">&copy;2014 Jordan Parra</p>
		</footer>
	</body>
</html>