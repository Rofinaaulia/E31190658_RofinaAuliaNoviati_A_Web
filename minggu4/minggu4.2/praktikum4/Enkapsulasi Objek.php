<?php
// The parent class
class Car {
	// The $model  property is private, thus it can be accessed
	// only from inside the class
	private $model;
	//	packublic setter method
	public function setModel($model)
	{
		$this -> model = $model;
	}
}
// The child class
class SportsCar extends Car{
	//Has no problem to get a protected property that belongs to the parent
	public function hello()
	{
		return "beep! I am a <i>" . $this -> model . "</i><br />";
	}
}
//Create an instance from the child class
$sportsCar1 = new SportsCar();
//Set the class model name
$sportsCar1 -> setModel('Mercedes Benz');
?>