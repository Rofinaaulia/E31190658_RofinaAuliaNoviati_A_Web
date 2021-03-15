<?php

		include 'Car.php';
		class miniCar implements Car
		{
			private $model;
			
			public function setModel($name)
			{
				$this -> model = $name;
			}
			
			public function getModel()
			{
				return $this -> model;
			}
		}
		
		$learn=new miniCar();
		$learn -> setModel("Sedan");
		$model=$learn -> getModel();
		echo $model;
?>