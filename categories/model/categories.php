<?php

require 'database.php';//relative to file you're in
function get_products()
{
	global $db;//db needs global scope so it can be used in a function
	$query = 'select productName from products';
	return $db->query($query);
	
	//return array('guitars', 'basses', 'drums'); //hard coded
}
?>