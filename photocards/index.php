<?php

require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/photocards',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

	include 'views/list.php';
	
	
	$action = array_key_exists('action', $_POST)?$_POST['action']: '';
	
	if($action == 'Send')
	{
		// The message
		$message = $_POST['message'];
		$subject = $_POST['subject'];
	
		// In case any of our lines are larger than 70 characters, we should use wordwrap()
		$message = wordwrap($message, 70);
	
		$headers = 	'From: ' . $_SERVER['SERVER_ADMIN'] . "\r\n" .
				'Reply-To: ' . $_POST['email'] . "\r\n" .
				//read receipt
		//"Disposition-Notification-To: " . $_POST['email'] . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		echo $headers;
	
		// Testing send
		if(mail('melaniegardiner13@gmail.com', $subject, $message, $headers))
		{
			echo "mail sent";
			$oEmail = new Email;
			$oEmail->email = $_POST['email'];
			$oEmail->save();
		}
		else {
			echo "mail failed";
		}//end else
	}//end if
?>


