<!DOCTYPE html>

<!-- 
CIS 425 Final Exam
Fall 2014
Jordan Parra
-->

<?php
	
?>

<html lang="en">
	<head>
		<!-- Character Encoding -->
		<meta charset="utf-8" />
		<meta name="robots" content="noindex,nofollow" />
		
		<!-- Web Page Title -->
		<title>TIMECARD</title>
		
		<!-- Stylesheet -->
		<link type="text/css" rel="stylesheet" href="styles/final.css" />
		
		<!-- Favicon -->
		<link type="image/x-icon" rel="shortcut icon" href="imgs/favicon.ico" />
	</head>
	<body onload="userid_message()">
		<!-- Header -->
		<header>
			<div class="header-left"><a href="http://www.asu.edu/"><img alt="Pitchfork" src="imgs/Pitchfork.png" /></a></div>
			<div class="header-center">TIMECARD</div>
			<div class="header-right"><a href="http://www.asu.edu/"><img alt="Pitchfork" src="imgs/Pitchfork.png" /></a></div>
		</header>
		
		<!-- Nav Bar -->
		<nav>
			<ul>
				<li><a href="../homeSlice/home.php">HOME</a></li>
				<li><a href="../register/register.php">REGISTER</a></li>
				<li><a href="../internal/contact/contact.php">CONTACT</a></li>
				<li><a href="external/index.htm">PARTNERS</a></li>
				<li><a href="#">CLOCK IN</a></li>
				<li><a href="db/process-clock-out.php">CLOCK OUT</a></li>
			</ul>
		</nav>

		<!-- Content -->
		<div id="content">
			<!-- Form -->
			<form id="login-form" action="db/process-clock-in.php" method="get">
				<div>
					<span>
						<label for="user-id">User ID:</label>
						<input type="text" id="user-id" name="user-id" 
						autofocus 
						required
						pattern="[\d]{6}" 
						placeholder="User ID" 
						title="User ID: 6 digits"
						onfocus="userid_message()" />
					</span>
					
					<span>
						<label for="username">Username:</label>
						<input type="text" id="username" name="username" 
						required
						pattern="[[a-z0-9]{6, 8}"
						placeholder="Username"
						title="Username: 6-8 characters (lower-case letters and 0-9 only)"
						onfocus="uname_message()" />
					</span>
					
					<span>
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" 
						required
						pattern="[a-zA-Z0-9]{5, 8}"
						placeholder="Password"
						title="Password: 5-8 characters (upper/lower-case letters and 0-9 only)"
						onfocus="pword_message()" />
					</span>
				</div>
				
				<div>
					<span class="radio-label">Today I will:</span>
					
					<label for="gators">Feed the Gators</label>	
					<input type="radio" id="gators" name="activity" value="yes" 
					onfocus="gators_message()" />
					
					<label for="gators">Wash the Unicorns</label>
					<input type="radio" id="unicorns" name="activity" value="yes"
					onfocus="unicorns_message()" />
					
					<label for="gators">Achieve World Peace</label>
					<input type="radio" id="peace" name="activity" value="yes" 
					onfocus="peace_message()" />
				</div>
				
				<div>
					<input type="submit" class="button" id="submit" value="Clock me in!" />
					<input type="reset" class="button" id="reset" value="Start Over" onclick="giveFocus();" />
				</div>
				
				<?php
					if ($_GET["rc"] == 1)
					{
						echo '<p class="response_code">*Invalid User ID*</p>';
					}
					if ($_GET["rc"] == 2)
					{
						echo '<p class="response_code">*Invalid Username*</p>';
					}
					if ($_GET["rc"] == 3)
					{
						echo '<p class="response_code">*Invalid Password</p>';
					}
					
					
					echo '<div id="form-message">*You must Clock-in before starting your shift*</div>';
				?>
			</form>
			
			<!-- Messages -->
			<div id="messages"></div>
			
			<!-- Sponsors -->
			<div id="sponsors">
				<p>Visit Our Sponsors</p>
				<div id="sponsor-imgs-container">
					<a href="https://www.yahoo.com/" target="_blank"><img alt="Dog with Leaf" src="imgs/dogWithLeaf.jpg" /></a>
					<a href="https://www.google.com/"><img alt="Flying Goat" src="imgs/flyingGoat.jpg" /></a>
					<a href="http://www.theonion.com/"><img alt="Kitten and Ducks" src="imgs/kittenAndDucks.jpg" /></a>
					<a href="http://www.woot.com/"><img alt="Little Bear" src="imgs/littleBearBackOff.jpg" /></a>
					<a href="http://www.flixster.com/"><img alt="Mortal Combat" src="imgs/mortalCombat.jpg" /></a>
					<a href="http://www.stumbleupon.com/" target="_blank"><img alt="Polar Bears" src="imgs/polarBears.jpg" /></a>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<footer>
			<p>&copy;2014, Jordan Parra</p>
		</footer>
		
		<!-- JS -->
		<script src="scripts/final.js"></script>
	</body>
</html>