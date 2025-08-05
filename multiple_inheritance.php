<?php
class A
{
	public function showA()
	{
		echo "I'm A"."<br>";
	}
}

class B
{
	public function showB()
	{
		echo "I'm B"."<br>";
	}
}
  
//class C extends A,B ...aibabe multiple inheritance php te support kore na ar jonno treat use krte hoy

class C extends A,B
{
	public function showC()
	{
		echo "I'm C"."<br>";
	}
}

?>