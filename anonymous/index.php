<?php

function sayHello()
{
	echo "hello world!!!! yay!";
}

$fSayGoodDay = function()//annonymous function because the function is put in a variable
{
	echo "good day!";
};//end variable declaration needs a ;

function callMeBack($fCallMe)
{
	$fCallMe();
}
?>

<html><body><?php callMeBack($fSayGoodDay); ?></body></html>