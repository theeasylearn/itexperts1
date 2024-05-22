<?php 
    //hierarchical inheritance 
    class MyMath
    {
        public function getPi()
        {
            return 3.14;
        }
        public function getSquare($number)
        {
            $square = $number * $number;
            return $square;
        }
    }
    class Circle extends MyMath
    {
        public function __construct($radius)
        {
            $this->radius = $radius;
        }
        public function getArea()
        {
            $area = $this->getPi() * $this->getSquare($this->radius);
            return $area;
        }
    }
    class Cyliender extends MyMath 
    {
        public function __construct($radius,$height)
        {
            $this->height = $height;
            $this->radius = $radius;
        }
        public function getVolume()
        {
            $volume = $this->getPi() * $this->getSquare($this->radius) * $this->height;
            return $volume;
        }
    }
    //create circle class object
    $c1 = new Circle(100);
    echo "<br/> Area of circle = " . $c1->getArea();
    
    $cy1 = new Cyliender(100,25);
    echo "<br/> Volume of cyliender = " . $cy1->getVolume();
    
    
?>