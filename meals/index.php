<html><body>Hullo world! I live in the index</body></html>

<?php 

require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/meals',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

if(array_key_exists('submit', $_POST))
{
	$oMeal = new Meal();
	$oMeal->date = $_POST['date'];
	$oMeal->member = $_POST['members'];
	
	$oPurchase->save();
}

if(array_key_exists('add', $_POST))
{
	include 'views/add.php';//link add file
}
else 
{
	include 'views/list.php';//link view file
}


?>