<?php 
//Archivo main

include ("phpObjectsN1Ej2.php");  //asocia el archivo de las clases

$rectancle1=new Rectangle(3,3);
echo "Rectangle1 area is: ". $rectancle1->shapeAreaFormula()."<br>";

$triangle1=new Triangle(4,6);

echo "Triangle1 area is: ". $triangle1->shapeAreaFormula()."<br>";
?>