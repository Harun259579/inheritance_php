<?php
class Chairman
{
	public function showchairman()
	{
		echo "I'm Companies Owner"."<br>";
	}
}




class Md extends Chairman
{
	public function showmd()
	{
		echo "I'm Companies md"."<br>";
	}
}


class Worker extends md
{
	public function showworker()
	{
		echo "I'm Companies worker"."<br>";
	}
}


$obj = new Worker();
$obj->showchairman();
$obj1 = new Md();
//$obj1->showworker(); //possible na 
$obj1->showmd();


?>