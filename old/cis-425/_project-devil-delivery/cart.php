<!DOCTYPE html>

<!-- 
Project - Devil Delivery Shopping Cart Page
CIS 425
Fall 2014
Jordan Parra
-->

<?php
	//
	include("inc/connect/server_connect.php");
	include("inc/cart_functions.php");
	
	//
	session_name("customer");
	session_start("customer");
	
	//
	session_name("cart");
	session_start("cart");
	
	//
	if ($_REQUEST['command'] == 'delete' && $_REQUEST['item_id'] > 0)
	{
		remove_item($_REQUEST['item_id']);
	}
	elseif ($_REQUEST['command'] == 'clear')
	{
		unset($_SESSION["cart"]);
	}
	// elseif ($_REQUEST['command'] == 'update')
	// {
		// $max = count($_SESSION['cart']);
		
		// for ($i = 0; $i < $max; $i++)
		// {
			// $item_id 	= $_SESSION['cart'][$i]['item_id'];
			// $quantity	= $_SESSION['cart'][$i]['quantity'];
		// }
	// }
	elseif($_REQUEST['command'] == 'complete')
	{
		
		unset($_SESSION["cart"]);
		header("Location: confirm-order.php");
	}
	
	//
	// unset($_SESSION['cart']);
	// session_unset("cart");
?>

<html lang="en">
	<head>
		<!-- Character Encoding -->
		<meta charset="utf-8" />
		<meta name="robots" content="noindex,nofollow" />
		
		<!-- Web Page Title -->
		<title>Shopping Cart</title>
		
		<!-- Stylesheet -->
		<link type="text/css" rel="stylesheet" href="css/main.css" />
		<link type="text/css" rel="stylesheet" href="css/cart.css" />
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
			<div id="content_wrapper">
				<div id="cont_shop_button_wrapper">
					<?php						
						$query	= "SELECT * FROM `dd_menu_items` WHERE item_id = '" . $_SESSION['cart'][0]['clicked_item'] . "'";
						$result = mysqli_query($dbc, $query);
						$row	= mysqli_fetch_array($result);
						
						$query 	= "SELECT * FROM `dd_restaurants` WHERE id = '" . $row['rest_id'] . "'";
						$result	= mysqli_query($dbc, $query);
						$row	= mysqli_fetch_array($result);
						
						echo '<a class="button wide_button cont_shop_button" href="restaurants/' . $row['menu'] . '">Continue Shopping &#10152;</a>';
					?>
				</div>
				
				<h1>Your Cart</h1>
				
				<form name="cart_form" action="" method="post">
					<input type="hidden" name="item_id" />
					<input type="hidden" name="command" />
				</form>
				
				<table>
					<?php
						if (count($_SESSION['cart']))
						{
							// for ($i = 0; $i < count($_SESSION['cart']); $i++)
							// {
								// echo '<td>' . $_SESSION['cart'][$i]['item_id'] . '</td>';
							// }
							
							// echo '<td>' . count($_SESSION['cart']) . '</td>';
							
							//
							echo	'<thead>
										<tr>
											<th>#</th>
											<th>Restaurant</th>
											<th>Item</th>
											<th>Price</th>
											<th>Quantity</th>
											<th>Amount</th>
											<th>Options</th>
										 </tr>
									 </thead>';
							
							echo	'<tfoot>
										<tr>
											<td colspan="2"><strong>Order Total: $' . get_order_total($dbc) . '</strong></td>
											<td colspan="5">
												<input type="submit" class="button cart_button" value="Complete Order" onclick="complete_order()">
												<!-- <input type="submit" class="button cart_button" value="Update Cart" onclick="update_cart()"> -->
												<input type="button" class="button cart_button" value="Clear Cart" onclick="clear_cart()">
											</td>
										 </tr>
									 </tfoot>';
									 
							 //
							 $max = count($_SESSION['cart']);
							 
							 for ($i = 0; $i < $max; $i++)
							 {
								//
								$item_id = $_SESSION['cart'][$i]['item_id'];
								
								//
								$name		= get_item_name($dbc, $item_id);
								$price 		= get_price($dbc, $item_id);
								$quantity	= $_SESSION['cart'][$i]['quantity'];
								
								//
								if ($quantity == 0) 
								{
									continue;
								}
								
								echo	'<tbody>
											<tr>
												<td>' . ($i + 1) . '</td>
												<td>' . '</td>
												<td>' . $name . '</td>
												<td>' . '$' . number_format($price, 2) . '</td>
												<td>' . $quantity . '</td>
												<td>' . '$' . number_format(($price * $quantity), 2) . '</td>
												<td><a class="button" href="javascript:del(' . $item_id . ')">Remove Item</a></td>
											 </tr>
										 </tbody>';
							 }
						}
						else 
						{
							echo '<tr><td>There are no items in your shopping cart</td></tr>';
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
						<a href="about.php">About Us</a>
						<span>|</span>
						<a href="contact.php">Contact Us</a>
					</p>
					<p class="shrink_text">&copy;2014 Jordan Parra</p>
				</div>
			</div>
		</footer>
		
		<!--
		<script src="js/core.js"></script>
		-->
		<script>
			function del(item_id)
			{
				if (confirm('Are you sure you want to delete this item?'))
				{
					cart_form.item_id.value = item_id;
					cart_form.command.value	= 'delete';
					cart_form.submit();
				}
			}

			function clear_cart()
			{
				if (confirm('Are you sure you want to empty your cart?'))
				{
					cart_form.command.value = 'clear';
					cart_form.submit();
				}
			}

			function update_cart()
			{
				cart_form.command.value = 'update';
				cart_form.submit();
			}

			function complete_order()
			{
				cart_form.command.value = 'complete';
				cart_form.submit();
			}
		</script>
	</body>
</html>