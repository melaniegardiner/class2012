<?php

require_once('../adodb5/adodb.inc.php');//supports connection for 8080 port
require_once('../adodb5/adodb-active-record.inc.php');//needed to do insert from db

$db = null;

$db = NewADOConnection('mysql');

if($_SERVER['SERVER_PORT'] == 8080)//local host server
{
	//$db = NewADOConnection('mysql://root:@localhost/photocards');
	
	$db->Connect("localhost", "root", "", "photocards" );
}
else
{
	//$db = NewADOConnection('mysql://melaniegardiner:liongate@melaniegardiner.netfirmsmysql.com/photocards');
	//3306 is the port for NetFirms
	$db->Connect("melaniegardiner.netfirmsmysql.com:3306", "melaniegardiner", "liongate", "photocards");
	//host name for the db, user, pw, db name
	
}

ADOdb_Active_Record::SetDatabaseAdapter($db);

class email extends ADOdb_Active_Record{}
class photocard extends ADOdb_Active_Record{}

include 'list.php';

$action = array_key_exists('action', $_POST)?$_POST['action']: '';

if($action == 'Send')
{
	// The message
	$message = $_POST['message'];
	$subject = $_POST['subject'];

	// In case any of our lines are larger than 70 characters, we should use wordwrap()
	$message = wordwrap($message, 70);

	$headers = 	"From: form@melaniegardiner.ca\r\n" .
			'Reply-To: ' . $_POST['email'] . "\r\n" .
			//read receipt
	//"Disposition-Notification-To: " . $_POST['email'] . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	echo $headers;

	// Testing send
	if(mail('melaniegardiner13@gmail.com', $subject, $message, $headers))
	{
		echo "mail sent";
		$oEmail = new email();
		$oEmail->email = $_POST['email'];
		$oEmail->subject = $_POST['subject'];
		$oEmail->message = $_POST['message'];
		
		$oEmail->save();
	}
	else 
	{
		echo "mail failed";
	}//end else
}//end if
?>


