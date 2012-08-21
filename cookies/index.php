<?php
//to make sure we're on https
if(!isset($_SERVER['HTTPS']))
{
	//tell us if we're not on https
	$url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	//echo $url;
	//print_r($_SERVER);//print server variable

	header("Location: " . $url); //http header adding location header
	exit();
}

//set up database
require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/cookies',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

//contoller logic
//signup button
if(array_key_exists('signup', $_POST) && isset($_POST['signup']))
{
	include 'views/signup.php';
	exit();
}

// cookie
elseif(array_key_exists('save', $_POST) && isset($_POST['save']))
{
	//this is where we will validate password
	if($_POST['password'] == 'Secret55')
	{
		setcookie('username', $_POST['username']);
		$_COOKIE['username'] = $_POST['username'];
	} 
	else 
	{
		echo 'incorrect password';
	}
}
if(array_key_exists('username', $_COOKIE))
{
	include 'views/hello.php';
} 
include 'views/form.php';//log in request comes up on load


?>
