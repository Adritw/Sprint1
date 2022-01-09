<?php 
$x= 8;
$y= 4;
$m=2.3;
$n=1.5;

echo "$x $y $m $n<br>";
echo $x + $y."<br>";
$suma= $m + $n;
echo "$suma <br>";   // todo entre "" con var y con texto no con oper.

$resta= $x-$y;
echo "La resta de $x - $y es: ", $resta , "<br>";   // tambien se puede concatenar con . en vez de  , 
echo "La resta de $m - $n es: ". $m - $n . "<br>";

echo $x * $y."<br>";
echo $m * $n."<br>";

echo $x / $y. "<br>";
echo $m / $n. "<br>";

echo $x % $y."<br>";
echo $m % $n."<br>";

echo $x*2 ,"<br>";
echo $y*2 ,"<br>";
echo $m*2 ."<br>";
echo $n*2 ."<br>";

$x= 8;
$y= 4;
$m=2.3;
$n=1.5;

echo $x + $y + $m + $n."<br>";
echo $x * $y * $m * $n."<br>";

?>