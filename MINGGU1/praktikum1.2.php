<?php include (praktikum1.1.php);?>
<?php
//contoh property
$bmw = new Car();
$mercedes = new Car();
//contoh objects
echo $bmw -> color;
echo "<br/>";
echo $mercedes -> color;
echo "<br/>";
//Get objects properties

//set objects properties
//set the color to 'blue' the bmw objects
$bmw -> color = 'beige';

//set value $comp property untuk kedua objects
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

//get the color dari $bmw objects
echo $bmw -> color;
echo "<br/>";
echo $mercedes -> color;
echo "<br/>";
echo $mercedes -> comp;
echo "<br/>";
?>