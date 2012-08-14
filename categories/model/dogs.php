<?php
//this is the model file

require 'database.php';//relative to file you're in
function get_dogs()
{
	global $db;//db needs global scope so it can be used in a function
	$query = 'select name from dogs';
	return $db->query($query);
	
	
}
?>