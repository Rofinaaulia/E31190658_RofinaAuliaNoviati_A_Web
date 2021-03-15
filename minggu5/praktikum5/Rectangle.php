<?php
		class Rectangle implements Shape {
			private $width;
			private $height;
			
			public function __construct($width, $height)
			{
				$this -> width = $width;
				$this -> height = $height;
			}
			
			// calArea calculates the area of rectangles
			public function calArea()
			{
				return $this -> width * $this -> height;
			}
		}
		
		$circ = new Circle(3);
		$rect = new Rectangle(3,4);
		
		echo $circ -> calArea();
		echo $rect -> calArea();
?>