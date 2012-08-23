<?php

$action = (array_key_exists('action', $_POST)?$_POST['action']: ''); 

$action = (array_key_exists('action', $_GET)?$_GET['action']: $action);//$action has already been set


require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/emails',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

if($action == 'Subscribe')
{
	$oEmail = new Email;
	$oEmail->email = $_POST['email'];
	$oEmail->save();
}
elseif($action == 'Unsubscribe')
{
	print_r($_GET);
	$oEmail = Email::find_by_email($_GET['email']);//class method find by email
	if($oEmail && $oEmail->delete())
	{
			echo "You have been unsubscribed";
	}
	else 
	{
		echo "Sorry, unscubscription failed";	
	}
	exit();
}

//test the $action
if($action == 'Edit List')
{
	include 'views/edit.php';
}
else 
{
	include 'views/email.php';

}

		
//get is for unsigning from eblast list

?>

