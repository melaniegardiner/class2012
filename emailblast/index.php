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
//deleting email from db
elseif($action == 'Delete')
{
	$oEmail = Email::find_by_email($_GET['email']);//class method find by email
	if($oEmail && $oEmail->delete())
	{
		echo "1 email deleted";
	}
	else 
	{
		echo "0 emails deleted";	
	}
}
	
elseif($action == 'Unsubscribe')
{
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
elseif($action == 'Send')
{
	include 'model/helpers.php';
	sendEmails();
}

//test the $action
if($action == '' || $action == 'Send')
{
	include 'views/email.php';
}
else 
{
	include 'views/edit.php';

}

		
//get is for unsigning from eblast list

?>

