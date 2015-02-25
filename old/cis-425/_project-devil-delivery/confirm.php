<!DOCTYPE html>

<!-- 
Project - Devil Delivery Confirmation Page
CIS 425
Fall 2014
Jordan Parra
-->

<?php
	//
	session_name("customer");
	session_start("customer");
?>

<?php
	// Connect to the db (LOCAL | SERVER)
	include('inc/connect/server_connect.php');
	
	// Values from HTML
	$uname				= $_POST['uname'];
	$of_name			= $_POST['f_name'];
	$f_name				= mysqli_real_escape_string($dbc, $of_name);
	$ol_name			= $_POST['l_name'];
	$l_name				= mysqli_real_escape_string($dbc, $ol_name);
	$email 				= $_POST['email'];
	$pword				= $_POST['pword'];
	$phone				= $_POST['phone'];
	$alt_phone			= $_POST['alt_phone'];
	$address			= $_POST['address'];
	$apt_suite_floor	= $_POST['apt_suite_floor'];
	$complex_name		= $_POST['complex_name'];
	$cross_street		= $_POST['cross_street'];
	$city				= $_POST['city'];
	$state				= $_POST['state'];
	$zip				= $_POST['zip'];
	
	// Build our SQL statement
	$query 	= "INSERT INTO dd_customers(uname, f_name, l_name, email, pword, phone, alt_phone, address, apt_suite_floor, complex_name, cross_street, city, state, zip)" 
	. "VALUES('$uname', '$f_name', '$l_name', '$email', '$pword', '$phone', '$alt_phone', '$address', '$apt_suite_floor', '$complex_name', '$cross_street', '$city', '$state', '$zip')";
	
	// Run the query
	$result	= mysqli_query($dbc, $query) or die('Unable to write to DB!');
	
	// Close the SQL connection
	mysqli_close($dbc);
?>

<html lang="en">
	<head>
		<!-- Character Encoding -->
		<meta charset="utf-8" />
		<meta name="robots" content="noindex,nofollow" />
		
		<!-- Web Page Title -->
		<title>Confirmation</title>
		
		<!-- Stylesheet -->
		<link type="text/css" rel="stylesheet" href="css/main.css" />
		<link type="text/css" rel="stylesheet" href="css/confirm.css" />
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
			<h1 class="">Thank you for Registering!</h1>
			<a class="button wide_button" href="login.php">Login Now &#10152;</a>
			<p>-or-</p>
			<a class="button wide_button" href="restaurants/restaurants.php">View Restaurants &#10152;</a>
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