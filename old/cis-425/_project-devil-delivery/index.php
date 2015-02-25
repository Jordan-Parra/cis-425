<!DOCTYPE html>

<!-- 
Project - Devil Delivery Home Page
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
		
		<!-- Web Page Title -->
		<title>Devil Delivery - The Unofficial ASU Food Delivery Service</title>
		
		<!-- Stylesheet -->
		<link type="text/css" rel="stylesheet" href="css/main.css" />
		<link type="text/css" rel="stylesheet" href="css/homepage.css" />
		
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
			
			<div class="border">
				<div class="inner_shadow">
					<img id="bg_pizza" src="img/bg_pizza.jpg" alt="Picture of pizza" />
				</div>
			</div>
			
			<h1>Order Pizza from Your Favorite Cheap Pizza Restaurants</h1>
			
			<div id="rest_images_container">
				<a href="restaurants/little-caesars/menu.php"><img class="rest_images" alt="Little Caesars Logo" src="img/lc_logo.jpg" /></a>
				<a href="restaurants/big-jimmy-s/menu.php"><img class="rest_images" alt="Big Jimmy's Logo" src="img/bj_logo.jpg" /></a>
				<a href="restaurants/hungry-howies/menu.php"><img class="rest_images" alt="Hungry Howie's Logo" src="img/hh_logo.jpg" /></a>
				<a href="restaurants/gus-s-pizza/menu.php"><img class="rest_images" alt="Gus's Pizza Logo" src="img/gp_logo.png" /></a>
			</div>
			
			<a class="button wide_button" href="restaurants/restaurants.php">Order Now</a>
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