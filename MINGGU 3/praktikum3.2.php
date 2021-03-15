<?php
class Car {

	//private
	private $model;

	public function getModel() {
		return "The car model is" . $this -> model;
	}
}

$mercedes = new car ();

////akses property dari luar class
$mercedes -> model = "Mercedes Benz";
echo $mercedes -> getModel();
 
?>