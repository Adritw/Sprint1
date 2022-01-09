<?php 
$numMin=2;
$numMax=20;


for ($i=$numMin; $i<=$numMax; $i++) { 
    echo $i. " ";
}
echo "<br>";
echo "Son primos: ",
listaPrimos($i); 

function listaPrimos($numMax){
    $numMin=2;
    for ($i=$numMin; $i<$numMax; $i++) { 
        if ($i %2 != 0){
            echo $i. " ";
        }
    }
}    
?>