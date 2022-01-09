<?php 
$num= array (10,20,30,40,50,60);
var_dump($num );
echo "<br>";
unset($num [3]);
ksort($num);   // ordena array por indices
var_dump($num);
?>