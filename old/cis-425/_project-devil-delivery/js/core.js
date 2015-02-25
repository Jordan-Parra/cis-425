/* Javascript Document */
/* ---------------------------------------------------------------------------------------------------------------------- */

/*  */
function addtocart(item_id)
{
	menu_form.item_id.value = item_id;
	menu_form.command.value = 'add';
	menu_form.submit();
}

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
/* ---------------------------------------------------------------------------------------------------------------------- */