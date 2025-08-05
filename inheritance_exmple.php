<?php
class Customers
{
public $name;
public $age;

private $accnumber;
private $balence;

protected $dept;

public function setaccnumber($setaccnumber)
{
	$this->accnumber=$setaccnumber;

}

	public function setbalence($balence)
	{
		$this->balence=$balence;
		


	
	}


public function showinfo()
{
	echo "Customer Name is ".$this->name."<br> and age is ".$this->age." <br> Account Nmber is ".$this->accnumber."<br>Balence is ".$this->balence." <br> Department is ".$this->dept;

}

}

class cus1 extends Customers
{
	function setdept($dept)
	{
		$this->dept = $dept;

	}
}

$c1 = new Customers();
$c1->name ="Abrar";
$c1->age =25;
//$c1->setdept("Account"); possible na bcz its protected data
$c1->setaccnumber(11123);
$c1->setbalence(30000);
$c1->showinfo();

echo "<br>";
echo "<br>";
echo "<br>";


$c2 = new cus1();
$c2->name ="Faiyaj";
$c2->age =25;
$c2->setbalence(30000);
$c2->setdept("Account");
$c2->setaccnumber(11123);
$c2->showinfo();


?>