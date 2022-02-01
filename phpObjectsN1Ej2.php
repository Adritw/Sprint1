<?php 
abstract class Shape{
    protected $height;
    protected $width;

    function __construct($width,$height){
       $this->width= $width;
       $this->height=$height;
    }

    abstract function shapeAreaFormula();
}

class Rectangle extends Shape{
    
    function shapeAreaFormula(){
        $area= $this->width * $this->height;
        return $area;
    }
}

class Triangle extends Shape{
    
    function shapeAreaFormula(){
        $area= ($this->width * $this->height)/2;
        return $area;
    }
}
?>