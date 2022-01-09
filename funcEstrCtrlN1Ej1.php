<?php 
$edad= 28;
$resultado= numParImpar($edad);  //la llamada de funcion con param y con return hay que hacer algo: imprimirla o guardarla en una var para utilizar luego.
if ($resultado) {
echo "Tu edad es par.";
}
else {
echo "Tu edad es impar.";
}
   
function numParImpar($num){
    if ($num %2 == 0) {
       return true;
    }
    else {
       return false;
    }
}
?>