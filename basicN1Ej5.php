<?php 
$num1=array(1, 2, 3, 4, 5);
$num2= array(6, 7, 8);
$num2[]= 9;

$num3= array_merge($num1, $num2);
//echo count ($num3);           
echo "El array tiene ".count($num3)." elementos. <br>";

var_dump($num3);        //con tipo de valor
//print_r($num3);      sin tipo de vaLor
//echo "<pre>";         con etiqueta "<pre>" imprime vertical
    
?>