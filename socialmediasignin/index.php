<?php

$action = array_key_exists('code', $_GET)?'complete':(array_key_exists('action', $_POST)?$_POST['action']:'');


require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/sessions',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});



if($action == 'signin')
{
	include 'model/starter.php';
}
elseif($action =='complete')
{
	include 'model/complete.php';


	//add user if he doesn't already exist
	$sSocialId = 'google:' . $oProfile->id;//saving in db with google on it so we know where it came from

	//get social media id
	$oUser = User::find_by_social_id($sSocialId);
	if(!$oUser)
	{
		$oUser = new User;
		$oUser->social_id = $sSocialId;
		$oUser->name = $oProfile->name;
		$oUser->save();
	}

	//create a session

	$oSession = new Session;
	$oSession->user_id = $oUser->id;
	$oSession->session_id = base64_encode(uniqid());
	$oSession->save();

	setcookie('session', $oSession->session_id);
	$_COOKIE['session'] = $oSession->session_id;
}

	if(array_key_exists('session', $_COOKIE))
	{
		//if alreay have a session, retrieve the user name from the session

		$oSession = Session::find_by_session_id($_COOKIE['session']);
		$oProfile = User::find($oSession->user_id);
		include 'views/hello.php';
	}
	include 'views/signin.php';
	?>
