<?php 

//Autor Rofina Aulia Noviati

class Car{

	//properties
	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;

	//method = hellow
	public function hellow()
	{
		return "beep i am a <i>" . $this -> comp.
		"</i>, and i am <i>" . $this -> color;
	}
}

//create object di class
$bmw = new Car ();
$mercedess= new Car ();

//set values dari class properties
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedess -> comp = "Mercedes Benz";

//call hellow mwthod untuk $bmw object
echo $bmw -> hellow();
?>