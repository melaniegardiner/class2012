<?php
//get the action
$action = (array_key_exists('action', $_POST)?$_POST['action']: '');
$action = (array_key_exists('action', $_GET)?$_GET['action']: $action);

if($action == 'landing' || $action == '')
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

?>