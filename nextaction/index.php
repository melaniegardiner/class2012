<?php
//********************
//scrape data from website
//***************************
	
	header("Content-Type: text/plain");
	
	//wowjobs
	$sIn = file_get_contents("http://www.wowjobs.ca/wowrss.aspx?q=Web+Developer&1=N2T1G8&s=sr=25&t=30&f=r&e=si=A&Dup=H");
	
	
	
	echo $sIn;
	//exit();
	
	if(preg_match_all("|<title(.*)</title>|U", $sIn, $aIn))
	{
		//print_r($aIn);
		foreach($aIn[0] as $sTitle)
		{
			echo $sTitle ."\n";
		}//end foreach
	}//end if
	else 
	{
		echo "nothing to display";	
	}//end else

?>

<html><body>hullo worldz!</body></html>