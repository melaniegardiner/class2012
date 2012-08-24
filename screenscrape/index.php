<?php
	
	header("Content-Type: text/plain");
	
	//flickr
	$sIn = file_get_contents("http://api.flickr.com/services/feeds/photos_public.gne?id=51035594111@N01");
	
	//twitter
	$sIn = file_get_contents("http://search.twitter.com/search.atom?q=MelakneeG&rpp=5&lang=en");
	
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


