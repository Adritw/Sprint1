<?php 
 $cuentaHasta=20;
contarDeDosEnDos($cuentaHasta);    //llamada con argumento 


function contarDeDosEnDos($num){    //funcion con param y sin return
    for ($i=0;$i<=$num; $i+=2){
        echo $i."<br>";
    }
}

?>