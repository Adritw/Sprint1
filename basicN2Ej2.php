<?php 
$palabra= "Visual";
$word= str_replace("V","l",$palabra);
$word= substr($word,0,-1);

echo $word."V";




/*$fraseCorta= "El sol brilla de dia.";
$frase= str_replace("El sol","La luna",$fraseCorta);
$frase= str_replace("dia","noche",$frase);

echo $frase;*/

?>