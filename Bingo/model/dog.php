<?php
class Animal implements Showable
{
	public $sHungry = 'hell yeah I am hungry.';
	

	function eat($food)
	{
		//$this->sHungry = "not so much. I don't like " .$food;
		//
		if ($food == 'salad')
		{
			$this->sHungry = 'not so much salad pls.';
		}
		else 
		{
			$this->sHungry = 'I love it!';
		}//end else
		
	}//end eat function
	
	function show ()
	{
	
		foreach($this as $name => $value)
		{
			echo "<li>$name = $value</li>";
		}
	
	}
	
}//end class

interface Gender 
{
	const MALE = 'm';
	const FEMALE = 'f';	
}

interface Showable
{
	function show();
		
}

class dog extends Animal implements Gender, Showable
{
	public $sBreed = 'Lab';
	
	function __construct($sBreed)
	{
		$this->sBreed = $sBreed;
		$this->sGender = Gender::MALE;//how you do a const when its part of a class; this is hard coded; evry dog is male
		$this->show();
	}
	
	function show ()
	{
		
		foreach($this as $name => $value)
		{
			echo "<li>$name = $value</li>";
		}
		
	}
}//end class dog


?>