<!DOCTYPE html>

<!-- 
Project - Devil Delivery Regisitration Page
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
		
		<!-- Web Page Title -->
		<title>Registration</title>
		
		<!-- Stylesheet -->
		<link type="text/css" rel="stylesheet" href="css/main.css" />
		<link type="text/css" rel="stylesheet" href="css/register.css" />
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
			<!-- Registration Heading -->
			<div id="heading_wrapper">
				<h1 class="heading">Register with Devil Delivery for Easy (Re-)Ordering</h1>
				<p class="shrink_text">Already a member? Login <a href="login.php">here</a></p>
			</div>
			
			<!-- Registration Form -->
			<form id="registration_form" action="confirm.php" method="post">
				<!-- Login Information -->
				<div>
					<h2>Login Info</h2>
					
					<!-- Username -->
					<label for="uname">Username:*</label>
					<input type="text" id="uname" name="uname"
					required
					autofocus
					title="Between 4-15 chars using alphanumeric chars and/or special chars (i.e. -, _, !, $) only"
					pattern="[\w!$-]{4,15}" />
					
					<!-- Email -->
					<label for="email">Email:*</label>
					<input type="email" id="email" name="email"
					required
					title="Please enter a valid email address"
					onchange="cfm_email.pattern = this.value"
					maxlength="50" />
					
					<!-- Confirm Email -->
					<label for="cfm_email">Confirm Email:*</label>
					<input type="email" id="cfm_email" name="cfm_email"
					required
					title="Please confirm your email"
					maxlength="50"
					title="Must match with email above" />
					
					<!-- Password -->
					<label for="pword">Password:*</label>
					<input type="password" id="pword" name="pword"
					required
					title="Between 5-15 chars using alphanumeric chars and/or special chars (i.e. -, _, !, $) only"
					pattern="[\w!$-]{5,15}" 
					onchange="cfm_pword.pattern = this.value" />
					
					<!-- Confirm Password -->
					<label for="cfm_pword">Confirm Password:*</label>
					<input type="password" id="cfm_pword" name="cfm_pword" 
					required 
					title="Confirm your password"/>
				</div>
				<!-- Contact Information -->
				<div>
					<h2>Contact Info</h2>
					
					<!-- First Name -->
					<label for="f_name">First Name:*</label>
					<input type="text" id="f_name" name="f_name"
					required />
					
					<!-- Last Name -->
					<label for="l_name">Last Name:*</label>
					<input type="text" id="l_name" name="l_name"
					required />
					
					<!-- Phone -->
					<label for="phone">Phone:*</label>
					<input type="text" id="phone" name="phone"
					required 
					pattern="[\d]{10}"
					title="Please enter your 10 digit phone number" />
					
					<!-- Alternative Phone -->
					<label for="alt_phone">Alt Phone:</label>
					<input type="text" id="alt_phone" name="alt_phone" 
					pattern="[\d]{10}"
					title="Please enter your 10 digit phone number" />
				</div>
				<!-- Delivery Information -->
				<div>
					<h2>Delivery Info</h2>
					
					<!-- Street Address -->
					<label for="address">Address:*</label>
					<input type="text" id="address" name="address"
					required />
					
					<!-- Apt/Suite/Floor -->
					<label for="apt_suite_floor">Apt/Suite/Floor:</label>
					<input type="text" id="apt_suite_floor" name="apt_suite_floor" />
					
					<!-- Complex Name -->
					<label for="complex_name">Complex Name:</label>
					<input type="text" id="complex_name" name="complex_name" />
					
					<!-- Cross Street -->
					<label for="cross_street">Cross Street:</label>
					<input type="text" id="cross_street" name="cross_street" />
					
					<!-- City -->
					<label for="city">City:*</label>
					<input type="text" id="city" name="city"
					required />
					
					<!-- State -->
					<label for="state">State:*</label>
					<select id="state" name="state" required>
						<option value="">Select a state...</option>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
					<div>
						<!-- Zip Code -->
						<label for="zip_code">Zip Code:*</label>
						<input type="text" id="zip_code" name="zip_code"
						required 
						pattern="[\d]{5}"
						title="Please enter your 5 digit zip code" />
					</div>
				</div>
				
				<!--
				<div id="checkbox_wrapper">
					<input type="checkbox" id="promotions" name="promotions" value="Yes" />
					<label for="promotions" class="shrink_text long_label">
						Yes, I would like to receive emails for discount offers from Devil Delivery.
					</label>
				</div>
				-->
				
				<input type="reset" class="button" value="Clear form" />
				<input type="submit" class="button" value="Register &#10152;" />
			</form>
		</div>
		
		<!-- Footer -->
		<footer>
			<div class="container1">
				<div class="container2">
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