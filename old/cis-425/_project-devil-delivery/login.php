<!DOCTYPE html>

<!-- 
Project - Devil Delivery Login Page
CIS 425
Fall 2014
Jordan Parra
-->

<?php
	//
	session_name("customer");
	session_start("customer");
	
	// 
	if(isset($_SESSION["customer"]))
	{
		header('Location: welcome.php');
		exit;
	}
?>

<html lang="en">
	<head>
		<!-- Character Encoding -->
		<meta charset="utf-8" />
		<meta name="robots" content="noindex,nofollow" />
		
		<!-- Web Page Title -->
		<title>Login</title>
		
		<!-- Stylesheet -->
		<link type="text/css" rel="stylesheet" href="css/main.css" />
		<link type="text/css" rel="stylesheet" href="css/login.css" />
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:800">
		
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
			<form action="inc/check_login.php" method="post">
				<p>
					<?php
						if ($_GET["rc"] == 3)
						{
							echo'<span class="response_code">Login failed</span>';
						}
					?>
				</p>
			
				<h1>Login</h1>
				
				<!-- Username -->
				<label for="uname">Username:*</label>
				<input type="text" id="uname" name="uname" 
				required 
				autofocus 
				pattern="[\w!$-]{4,15}" 
				title="" />
				
				<!-- Alert the user if the entered username does not exist -->
				<div class="alert">
					<?php
						if ($_GET["rc"] == 1)
						{
							echo '<span class="active">Username not found</span>';
						}
					?>
				</div>
				
				<!-- Password -->
				<label for="pword">Password:*</label>
				<input type="password" id="pword" name="pword"
				required
				pattern="[\w!$-]{5,15}" 
				title="" />
				
				<!-- Alert the user if the entered password does not match -->
				<div class="alert">
					<?php
						if ($_GET["rc"] == 2)
						{
							echo '<span class="response_code"> Password not found</span>';
						}
					?>
				</div>
				
				<!-- Login Button -->
				<input type="submit" class="button" value="Login &#10152;" />
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