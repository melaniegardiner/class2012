<?php
//*******************
//connect to database via ActiveRecord
//*******************
require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/nextaction',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

//********************
//scrape data from website
//***************************
	
	header("Content-Type: text/plain");
	
	//wowjobs
	//$sIn = array();//create array called $sIn
	$sIn = file_get_contents("http://www.wowjobs.ca/wowrss.aspx?q=Web+Developer&l=N2T1G8&s=&sr=25&t=30&f=r&e=&si=A&Dup=H");
		
	echo $sIn; // print out all contents scraped from wow
	//exit();
	
	if(preg_match_all("|<title(.*)</title>|U", $sIn, $aIn))
	{
		print_r($aIn);
		foreach($aIn[0] as $sTitle)
		{
			echo $sTitle ."\n";
			
		}//end foreach
	}//end if
	else 
	{
		echo "nothing to display";	
	}//end else
		
	//**********************
	//create new object
	//****************
	
	if(array_key_exists('$sIn', $_POST))// this needs to be chgd
	{
		$oNextaction = new Nextaction();//this should be renamed Jobs -> needs rework in the database
		
		$oNextaction->dateposted = $_POST['dateposted'];
		$oNextaction->title = $_POST['title'];
		$oNextaction->description = $_POST['description'];
		$oNextaction->link = $_POST['link'];
		$oNextaction->postedby = $_POST['postedby'];
		$oNextaction->nextaction = $_POST['nextaction'];
	
		$oNextaction->save();
	}
	
	
		include 'views/list.php';//link to list file
	
	

?>
