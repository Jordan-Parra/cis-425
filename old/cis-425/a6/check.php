<!DOCTYPE html>

<!--
	Jordan Parra
	Assignment 6
	CIS-425
	Fall 2014
-->

<?php
	session_start("cookie");
?>

<html>
	<head>
		<!-- Meta tag -->
		<meta charset="utf-8" />
		
		<!-- CSS -->
		<link type="text/css" rel="stylesheet" href="../stylesheets/a6ss_php.css" />
		
		<!-- Favicon element -->
		<link rel="icon" type="image/png" href="../images/favicon.png" />
		
		<!-- Web Page Title -->
		<title>Assignment 6: Check</title>
	</head>
	<body>
		<!-- Header -->
		<header>
			<p>Jordan Parra</p>
			<p>A6: Check</p>
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
									<li><a href="index.htm">A6</a></li>
									<li><a href="../a7/index.htm">A7</a></li>
									<li><a href="../a8/index.htm">A8</a></li>
									<li><a href="../a9/index.htm">A9</a></li>
									<li><a href="../_project-devil-delivery/index.php">Project</a></li>
								</ul>
						</nav>
					</div>
					
					<!-- Center Column -->
					<div id="center_column">
						<!-- Welcome Message -->
						<div id="welcome_message">
							<p class="bold">Fun with COOKIES!</p>
							<p>Check Cookie Page</p>
						</div>
						
						<div id="icons" class="group">
							<div id="icon">
								<a href="index.htm"><img src="../images/cm4.jpg" alt="Check for a cookie" /></a>
								<!-- <br /> -->
								<a href="index.htm"><p class="caption">Click here to return to the A6 page</p></a>
							</div>
							<p id="php">
								<?php
									// Check to see if cookie exists
									if (isset($_COOKIE["user"])) {
										echo "A cookie with the value of <span class=\"oreo\">" . $_COOKIE["user"] . "</span> has been detected.";
									} else {
										echo "No valid cookie in session for this browser.";
									}
								?>
							</p>
						</div>
						
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
			<a href="emform.htm"><img src="../images/email.png" alt="email icon" /></a>
			<img src="../images/css3.png" alt="css icon" />
			<p id="copyright">&copy;2014 Jordan Parra</p>
		</footer>
		
		<!-- JavaScript -->
		<script type="text/javascript" src="../jscode/giveFocus.js"></script>
		<script type="text/javascript" src="../jscode/a5messages.js"></script>
	</body>
</html>