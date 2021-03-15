<?php

//Autor Rofina Aulia Noviati 

// declare class
class Car {
	//properties
	public $comp;
	public $color ='beige';
	public $hasSunRoof = true;

	//method = hellow
	public function hellow()
	{
		return "beep";
	}
} 

//membuat instance
$bmw = new Car ();
$mercedes = new Car ();

// get values
echo $bmw -> color; //beige
echo "<br />";
echo $mercedes -> color; //beige
echo "<br />";

// set values
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

//get values 
echo $bmw -> color; //blue
echo "<br />";
echo $mercedes -> color; //blue
echo "<br />";
echo $bmw -> comp; // BMW
echo "<br />";
echo $mercedes -> comp; // MERCEDES BENZ
echo "<br />";

//method get a beep
echo $bmw -> hellow(); //beep
echo "<br />";
echo $mercedes -> hellow(); //beep


 ?>