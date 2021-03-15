<?php
//Deklare class
class Car{
	//properties
	public $comp;
	public $color = 'beige';
	public $hasSunroof = true;

	//method = hello
	public function hello()
	{
		return "beep";
	}
}

//membuat instance
$bmw = new Car ();
$mercedes = new Car ();
//get value
echo $bmw -> color;//beige
echo "<br/>";
echo $mercedes -> color;//beige
echo "<hr/>";

//set values
$bmw -> color = 'blue';
$bmw -> comp = 'BMW';
$mercedes -> comp = 'Mecedes Benz';

//get values
echo $bmw -> color; //blue
echo "<br/>";
echo $mercedes -> color; //beige
echo "<br/>";
echo $bmw -> comp; //BMW
echo "<br/>";
echo $mercedes -> comp; //Mercedes Benz
echo "<hr/>";

//methods get a beep
echo $bmw -> hello(); //beep
echo "<br/>";
echo $mercedes -> hello(); //beep
?>