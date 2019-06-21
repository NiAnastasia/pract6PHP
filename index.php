<?php

/*Создать иерархию классов: фигура - прямоугольник - квадрат. Все классы должны содержать методы для задания и получения значений длины сторон, а производные классы методы вычисления площади.*/

class Figure
{
	public $sideA;
}

class Rectangle extends Figure
 {
 	public $sideA;
 	public $sideB;
 	public function __construct($a, $b)
 	{

 		$this->sideA=$a;
 		$this->sideB=$b;
 		
 	}

 	public function areaRectangle()
 	{
 		$area = $this->sideB*$this->sideA;
 		return $area;
 	}


 }

 class Square extends Rectangle
 {
 	 public function __construct($a)
	{
		$this->sideA=$a;
	}
 	public function areaSquare($a)
 	{
 		$this->sideA=$a;
 		echo $this->sideA*$this->sideA;

 	}
 }



$c = new Rectangle(5,4);
echo $c->areaRectangle();
echo "<br>"; 
$b = new Square(6);
$b->areaSquare(6);
