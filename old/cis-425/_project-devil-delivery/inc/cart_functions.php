<?php
	function get_item_name($db, $item_id)
	{
		$query	= "SELECT name FROM dd_menu_items WHERE item_id = '" . $item_id . "'";
		$result	= mysqli_query($db, $query);
		$row	= mysqli_fetch_array($result);
		return $row['name'];
	}

	function get_price($db, $item_id)
	{
		$query	= "SELECT price FROM dd_menu_items WHERE item_id = $item_id";
		$result	= mysqli_query($db, $query);
		$row	= mysqli_fetch_array($result);
		return $row['price'];
	}
	
	function get_logo($db, $item_id)
	{
		$query		= "SELECT rest_id FROM `dd_menu_items` WHERE item_id = $item_id";
		$result		= mysqli_query($db, $query);
		$row		= mysqli_fetch_array($result);
		
		$rest_id	= $row['rest_id'];
		
		$query 		= "SELECT image FROM `dd_restaurants` WHERE id = $rest_id";
		$result		= mysli_query($db, $query);
		$row		= mysqli_fetch_array($result);
		
		return $row['image'];
	}
	
	function get_restaurant_name($db, $item_id)
	{
		$query		= "SELECT rest_id FROM `dd_menu_items` WHERE item_id = $item_id";
		$result		= mysqli_query($db, $query);
		$row		= mysqli_fetch_array($result);
		
		$rest_id	= $row['rest_id'];
		
		$query 		= "SELECT name FROM `dd_restaurants` WHERE id = $rest_id";
		$result		= mysli_query($db, $query);
		$row		= mysqli_fetch_array($result);
		
		return $row['name'];
	}

	function remove_item($item_id)
	{
		$item_id	= intval($item_id);
		$max		= count($_SESSION['cart']);
		
		for ($i = 0; $i < $max; $i++)
		{
			if ($item_id == $_SESSION['cart'][$i]['item_id'])
			{
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		
		$_SESSION['cart'] = array_values($_SESSION['cart']);
	}

	function get_order_total($db)
	{
		$max = count($_SESSION['cart']);
		$sum = 0;
		
		for ($i = 0; $i < $max; $i++)
		{
			$item_id	= $_SESSION['cart'][$i]['item_id'];
			$quantity	= $_SESSION['cart'][$i]['quantity'];
			$price		= get_price($db, $item_id);
			$sum		+= $price * $quantity; 
		}
		
		return $sum;
	}

	function add_to_cart($item_id, $quantity)
	{
		if ($item_id < 1 || $quantity < 1)
		{
			return;
		}
		
		if (is_array($_SESSION['cart']))
		{
			$_SESSION['cart'][0]['clicked_item'] = $item_id;
			
			$exists_results = item_exists($item_id);
			$exists			= $exists_results[0];
			$position		= $exists_results[1];
			
			if ($exists)
			{
				$new_quantity = intval($_SESSION['cart'][$position]['quantity']);
				$new_quantity++;
				$_SESSION['cart'][$position]['quantity'] = $new_quantity;
			}
			else 
			{
				$max = count($_SESSION['cart']);
				$_SESSION['cart'][$max]['item_id'] = $item_id;
				$_SESSION['cart'][$max]['quantity']	= $quantity;
			}
		}
		else
		{
			$_SESSION['cart'] = array();
			$_SESSION['cart'][0]['item_id'] = $item_id;
			$_SESSION['cart'][0]['quantity'] = $quantity;
			$_SESSION['cart'][0]['clicked_item'] = $item_id;
		}
	}

	function item_exists($item_id)
	{
		$item_id	= intval($item_id);
		$max		= count($_SESSION['cart']);
		$flag		= 0;
		
		for ($i = 0; $i < $max; $i++)
		{
			if ($item_id == $_SESSION['cart'][$i]['item_id'])
			{
				$flag = 1;
				break;
			}
		}
		
		return array($flag, $i);
	}
?>