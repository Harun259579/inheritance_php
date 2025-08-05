<?php
class Myclass
{


	public function hello()
	{
		echo "Hello from Parent Class"."<br>";

	}
	public function thnks()
	{
		echo "Thanks from Parent Class"."<br>";

	}
}

//inheritance 
class Newclass extends Myclass
{
	public function thnks()
	{
		echo "Thnks from child Class"."<br>";


	}

}

$obj1 = new Myclass();
$obj1->hello();
$obj1->thnks();//my class ar thnks


$obj2 =new Newclass();
$obj2->hello();
$obj2->thnks();//child class ar thnks

?>