<?php 
$saludo= "Hello World";
$saludo= str_split ($saludo);
unset($saludo [5]);
ksort($saludo);   // ordena array por indices
var_dump($saludo);

/*si se quiere borrar un elemento intermedio de un array y no se sabe la posicion pq es muy grande, se puede hacer:

$index= array_search($saludo, " ");  //buscar elemento vacio o por valor
unset($saludo,[$index]);             //eliminar */
?>

