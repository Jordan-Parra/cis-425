<!DOCTYPE html>

<!-- 
Project - Devil Delivery Little Caesars Menu Page
CIS 425
Fall 2014
Jordan Parra
-->

<?php
	//
	include("../../inc/connect/server_connect.php");
	include("../../inc/cart_functions.php");

	//
	session_name("customer");
	session_start("customer");
?>

<html lang="en">
	<head>
		<!-- Character Encoding -->
		<meta charset="utf-8" />
		
		<!-- Web Page Title -->
		<title>Little Caesars Menu</title>
		
		<!-- Stylesheet -->
		<link type="text/css" rel="stylesheet" href="../../css/main.css" />
		<link type="text/css" rel="stylesheet" href="../../css/menu.css" />
		
		<!-- Favicon -->
		<link type="image/x-icon" rel="shortcut icon" href="../../img/dd_favicon.ico" />
	</head>
	<body>
		<!-- Header -->
		<header>
			<!-- Logo -->
			<a href="../../index.php">
				<img id="logo" src="../../img/dd_logo.png" alt="Devil Delivery Logo" />
			</a>
		
			<!-- Cart/Register/Login -->
			<?php
				if (isset($_SESSION["customer"]))
				{
					echo '<a class="button header_button" href="../../inc/logout.php">Logout</a>';
				}
				else
				{
					echo '<a class="button header_button" href="../../login.php">Login</a>';
					echo '<a class="button header_button" href="../../register.php">Register</a>';
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
				
				echo 	'<a class="button header_button" href="../../cart.php">Cart' . $num_items_in_cart . '</a>';
			?>
		</header>

		<!-- Content -->
		<div id="content">
			<div id="content_wrapper" class="">
				<div><a class="button back_button" href="../restaurants.php">Go Back &#8617;</a></div>
				<div class="top_container">
					<?php
						//
						$query 	= "SELECT * FROM `dd_restaurants` WHERE id = '1'";
						$result = mysqli_query($dbc, $query) or die("Error querying the database for logo");
						$row	= mysqli_fetch_array($result);
						
						echo '<img class="image" alt="' . $row['image_alt_attribute'] .'" src="' . $row['image'] . '" />';
					?>
					<div class="va_container0">
						<div class="va_container1">
							<div class="va_container2">
								<h1 class="">Little Caesars Pizza</h1>
							</div>
						</div>
					</div>
				</div>
				
				<form name="menu_form" action="">
					<input type="hidden" name="item_id" />
					<input type="hidden" name="command" />
				</form>
				
				<table>
					<?php
						$query 	= "SELECT * FROM `dd_menu_items` WHERE rest_id = '1'";
						$result = mysqli_query($dbc, $query) or die("Error querying the database for table");
						while ($row = mysqli_fetch_array($result))
						{
							echo  	'<tr>
										<td class="bold left_align">' . $row['name'] . '</td>
										<td class="bold right_align">$' . number_format($row['price'], 2) . '</td>
										<td class="cart_cell" rowspan="2">
											<button class="cart_button" onclick="addtocart('. $row['item_id'] . ')">&#x2b; Add to Cart</button>
										</td>
									</tr>
									<tr>
										<td class="left_align description" colspan="2">' . $row['description'] . '</td>
									</tr>';
						}
						
						if ($_REQUEST['command'] == 'add' && $_REQUEST['item_id'] > 0)
						{
							//
							$item_id = $_REQUEST['item_id'];
							
							//
							add_to_cart($item_id, 1);
							
							//
							header("Location: ../../cart.php");
							exit();
						}
					?>
				</table>
			</div>
		</div>
		
		<!-- Footer -->
		<footer>
			<div class="va_container1">
				<div class="va_container2">
					<p>
						<a href="../../about.php">About Us</a>
						<span>|</span>
						<a href="../../contact.php">Contact Us</a>
					</p>
					<p class="shrink_text">&copy;2014 Jordan Parra</p>
				</div>
			</div>
		</footer>
		
		<script src="../../js/core.js"></script>
	</body>
</html>