<?php 

 $cuentaHasta=20;
  contarDeDosEnDos();    //llamada con argumento atendera a este sino ponemos argumento, atendera al parametro por defecto


function contarDeDosEnDos($num=10){    //funcion con parametro con un valor por defecto y sin return
    for ($i=0;$i<=$num; $i+=2){
        echo $i."<br>";
    }
}

?>