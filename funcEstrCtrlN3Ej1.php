<?php 
//$numMin=2;
$num=20;

listaPrimosErastostenes($num);     

function listaPrimosErastostenes($numMax){
    $numMin=2;
    //$primos=array();
    for ($i=$numMin; $i<=$numMax; $i++) {       
        $primos[$i] = true;     
    }                                           
    var_dump($primos);
       echo "<br>"; 

    for ($j=$numMin; $j <= $numMax; $j++) {   
        var_dump($j);
        echo "<br>";     
       if ($primos[$j] == true) {                       
           for ($i= $j * $j; $i <= $numMax; $i==$j+$j) {  
            $primos[$i]= false;                              
           }
       }
    }
    var_dump($primos);
       echo "<br>";

    for ($j=2; $j <=$numMax ; $j++) {       
        if ($primos[$j]== true) {
            echo $j;
        }
       
    }
    var_dump($primos);
}
?>