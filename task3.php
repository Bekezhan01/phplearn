<?php

class Shape{
    public $x;
    public function __construct($x){
        $this->x = $x;
    }
    public function getX()
    {
        return $this->x;
    }
    public function calculateArea(){
        return $this->x * $this->x;
    }

}
class Circle extends Shape{
    public function __construct($x){
        parent::__construct($x);
        $this->x = $x;
    }

}
class Square extends Circle{
    public function __construct($x){
        parent::__construct($x);
    }
}
$shape = new Circle(10);
echo $shape->getX()."\n";
echo $shape->calculateArea()."\n";