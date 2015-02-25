<!DOCTYPE html>

<!-- 
Project - Devil Delivery Contact Page
CIS 425
Fall 2014
Jordan Parra
-->

<?php
	//
	session_name("customer");
	session_start("customer");
?>

<html lang="en">
	<head>
		<!-- Character Encoding -->
		<meta charset="utf-8" />
		<meta name="robots" content="noindex,nofollow" />
		
		<!-- Web Page Title -->
		<title>Contact Us</title>
		
		<!-- Stylesheet -->
		<link type="text/css" rel="stylesheet" href="css/main.css" />
		<link type="text/css" rel="stylesheet" href="css/contact.css" />
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:800" />
		
		<!-- Favicon -->
		<link type="image/x-icon" rel="shortcut icon" href="img/dd_favicon.ico" />
	</head>
	<body>
		<!-- Header -->
		<header>
			<!-- Logo -->
			<a href="index.php">
				<img id="logo" src="img/dd_logo.png" alt="Devil Delivery Logo" />
			</a>
			
			<!-- Cart/Register/Login -->
			<?php
				if (isset($_SESSION["customer"]))
				{
					echo '<a class="button header_button" href="inc/logout.php">Logout</a>';
				}
				else
				{
					echo '<a class="button header_button" href="login.php">Login</a>';
					echo '<a class="button header_button" href="register.php">Register</a>';
				}
				
				$num_items_in_cart = '';
				
				if (count($_SESSION['cart']))
				{
					$num_items_in_cart = ' (' . count($_SESSION['cart']) . ')';
				}
				else
				{
					$num_items_in_cart = '';
				}
				
				echo 	'<a class="button header_button" href="cart.php">Cart' . $num_items_in_cart . '</a>';
			?>
		</header>

		<!-- Content -->
		<div id="content">
			<!-- Email Form -->
			<form id="email_form" class="" action="https://webapp4.asu.edu/pubtools/Mail" method="post">
				
				<!-- 3 hidden elements to process our emails -->
				<!-- Change the email address to tarun before submitting for a grade! -->
				<input name="sendto" type="hidden" value="dennis.anderson@asu.edu" />
				<input name="subject" type="hidden" value="CIS 425 Project (Jordan Parra) - Email for Devil Delivery" />
				<input name="location" type="hidden" value="http://cis425.wpcarey.asu.edu/japarra4/_project-devil_delivery/thankyou.html" />
				
				<h1>Contact Us</h1>
				
				<label for="name">Name:*</label>
				<input type="text" id="name" name="name" 
				required 
				autofocus 
				pattern="[a-zA-Z-' ]{1,30}" 
				title="Between 1-30 chars using uppercase/lowercase letters, hyphens, apostrophes, and/or spaces" />
				
				<label for="email">Email:*</label>
				<input type="email" id="email" name="email"  
				required  
				title="Valid email address only!" />
				
				<label for="comments">Comments:*</label>
				<textarea id="comments" name="comments" required maxlength="500"></textarea>
				
				<div>
					<input type="submit" class="button" value="Send &#10152;" />
				</div>
			</form>	
		</div>
		
		<!-- Footer -->
		<footer>
			<div class="va_container1">
				<div class="va_container2">
					<p>
						<a href="about.php">About Us</a>
						<span>|</span>
						<a href="contact.php">Contact Us</a>
					</p>
					<p class="shrink_text">&copy;2014 Jordan Parra</p>
				</div>
			</div>
		</footer>
	</body>
</html>