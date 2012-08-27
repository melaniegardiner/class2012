<html><body>
<h1>Photography by Melanie Gardiner</h1>
<h2>Thanks for visiting my website.</h2>
<p>I've been a graphic designer for over 10 years, 
working in agencies and corporate marketing departments 
developing marketing communication materials. I enjoy taking photos of nature. 
Please browse my current catalogue of my photocards.</p>

</body></html>


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

//if(array_key_exists('catalogue', $_POST))
//{
//	$oPhotocard = new Photocard();
/*	$oPhotocard->title = $_POST['title'];
	$oPhotocard->description = $_POST['description'];
	$oPhotocard->fileName = $_POST['fileName'];
	$oPhotocard->save();

}*/


	include 'views/list.php';
?>


