<?php
//get the action
$action = (array_key_exists('action', $_POST)?$_POST['action']: 'portfolio');
$action = (array_key_exists('action', $_GET)?$_GET['action']: $action);

require_once('../adodb5/adodb.inc.php');//supports connection for 8080 port
require_once('../adodb5/adodb-active-record.inc.php');//needed to do insert from db

$db = null;//set $db to null
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

if($action == 'portfolio')
{
	include 'views/landing.php';
}
elseif ($action == "contact")
{
	include 'views/contact.php';
}
elseif ($action == "store")
{
	include 'views/store.php';
}

if($action == 'Send')
{
	// The message
	$message = $_POST['message'];
	$subject = $_POST['subject_'];

	// In case any of our lines are larger than 70 characters, we should use wordwrap()
	$message = wordwrap($message, 70);

	$headers = 	"From: form@melaniegardiner.ca\r\n" .
			'Reply-To: ' . $_POST['email_'] . "\r\n" .
			//read receipt
	//"Disposition-Notification-To: " . $_POST['email'] . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	echo $headers;

	// Testing send
	if(mail('melaniegardiner13@gmail.com', $subject, $message, $headers))
	{
		//echo "mail sent";
		$oEmail = new email();
		$oEmail->email_ = $_POST['email_'];
		$oEmail->subject_ = $_POST['subject_'];
		$oEmail->message = $_POST['message'];
		$oEmail->req_name = $_POST['req_name'];
		$oEmail->phone_ = $_POST['phone_'];
		
		if (!$oEmail->save())
		{
			echo $oEmail->ErrorMsg();
		}//end if
	}//end if
	else
	{
		echo "mail failed";
	}//end else

	include 'views/form_thankyou.php';

}//end if
?>