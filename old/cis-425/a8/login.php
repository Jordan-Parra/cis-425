<?php
	//
	session_name("customer");
	session_start("customer");
	
	//
	if (isset($_SESSION["customer"]))
	{
		header('Location: welcome.php');
		exit;
	}
?>

<!DOCTYPE html>

<!--
	Jordan Parra
	Assignment 8
	CIS-425
	Fall 2014
-->

<html lang="en">
	<head>
		<!-- Meta tag -->
		<meta charset="utf-8" />
		
		<!-- CSS -->
		<link type="text/css" rel="stylesheet" href="../stylesheets/a8ss.css" />
		
		<!-- Favicon element -->
		<link rel="icon" type="image/png" href="../images/favicon.png" />
		
		<!-- Web Page Title -->
		<title>Login Page</title>
	</head>
	<body onload="username_message();">
		<!-- Header -->
		<header>
			<h1 id="Jordan_Parra">Jordan Parra</h1>
			<p>Login Page</p>
		</header>
		
		<!-- Main Area -->
		<div id="container3">
			<div id="container2">
				<div id="container1">
					<!-- Left Column -->
					<div id="left_column">
						<!-- Internal Navigation -->
						<nav id="internal_nav">
							<p>Site Navigation</p>
								<ul>
									<li><a href="../index.htm">Home</a></li>
									<li><a href="../a2/index.htm">A2</a></li>
									<li><a href="../a3/index.htm">A3</a></li>
									<li><a href="../a4/index.htm">A4</a></li>
									<li><a href="../a5/index.htm">A5</a></li>
									<li><a href="../a6/index.htm">A6</a></li>
									<li><a href="../a7/index.htm">A7</a></li>
									<li><a href="index.htm">A8</a></li>
									<li><a href="../a9/index.htm">A9</a></li>
									<li><a href="../_project-devil-delivery/index.php">Project</a></li>
								</ul>
						</nav>
					</div>
					
					<!-- Center Column -->
					<div id="center_column">
						<div id="welcome_message">
							<p>Enter your username and password below to login!</p>
						</div>
					
						<!-- Registration Form -->
						<form id="registration_form" action="process.php" method="post">
							<div id="form_descriptor">
								<p>Please login here:</p>
							</div>
							
							<?php
								//
								if ($_GET["rc"] == 1)
								{
									echo '<p class="response_code"> Username not found!</p>';
								}
								if ($_GET["rc"] == 2)
								{
									echo '<p class="response_code"> Password not found!</p>';
								}
								if ($_GET["rc"] == 3)
								{
									echo '<p class="response_code"> Returned from process.php... </p>';
								}
							?>
							
							<div>
								<label for="username" class="label">Username:</label>
								<input type="text" id="username" name="username" 
								required 
								autofocus
								pattern="[\w!$-]{4,15}"
								title="Between 4-15 chars using alphanumeric chars and/or special chars (i.e. -, _, !, $) only" 
								onfocus="username_message();"/>
							</div>
							<div>
								<label for="password" class="label">Password:</label>
								<input type="password" id="password" name="password" 
								required
								pattern="[\w!$-]{5,15}" 
								onchange="form.re_password.pattern = this.value"
								title="Between 5-15 chars using alphanumeric chars and/or special chars (i.e. -, _, !, $) only" 
								onfocus="password_message();" />
							</div>
							<div id="buttons">
								<button type="submit" class="button">Login!</button>
								<button type="reset" class="button" onclick="giveFocus();">Clear Form!</button>
							</div> 
						</form>
					</div>
					
					<!-- Right Column -->
					<div id="right_column">
						<!-- External Navigation -->
						<nav id="external_nav">
							<p>External Links</p>
							<p><a href="http://8tracks.com/" target="_blank">8tracks</a></p>
							<p><a href="https://www.spotify.com/us/"><img src="../images/spotify-logo.jpg" alt="spotify" /></a></p>
							<p><a href="http://www.last.fm/"><img src="../images/lastfm-logo.png" alt="lastfm" /></a></p>
						</nav>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Warning Messages -->
		<div id="messages"></div>
		
		<!-- Footer -->
		<footer>
			<img src="../images/html5.png" alt="xhtml icon" />
			<a href="../email/emform.htm"><img src="../images/email.png" alt="email icon" /></a>
			<img src="../images/css3.png" alt="css icon" />
			<p id="copyright">&copy;2014 Jordan Parra</p>
		</footer>
		
		<!-- JavaScript -->
		<script type="text/javascript" src="../jscode/a7_giveFocus.js"></script>
		<script type="text/javascript" src="../jscode/a5messages.js"></script>
	</body>
</html>