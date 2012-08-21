<?php
	if(!isset($_SERVER['HTTPS'])){
		//tell us if we're not on https
		$url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		//echo $url;
		//print_r($_SERVER);//print server variable
		
		header("Location: " . $url); //http header adding location header
		exit();
	}
?>

<html><body>hullo worlds</body></html>