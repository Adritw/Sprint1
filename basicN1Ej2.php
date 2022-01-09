<?php 
$saludo= "Hello World!";

$saludoMayus= strtoupper ($saludo);
echo $saludoMayus;
echo("<br>");         
echo strlen($saludo);
echo("<br>");           //salto de linea para funciones
echo strrev($saludo);
echo("<br>");
$estudia= "Aquest es el curs de PHP.";
echo $saludo ." ". $estudia;    //concatenar espacios
?>