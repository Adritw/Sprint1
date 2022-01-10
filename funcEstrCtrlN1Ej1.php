<?php 
$edad= 21;
 numParImpar($edad);  
 
function numParImpar($num){
    if ($num %2 == 0) {
      echo "Tu edad es par.";
    }
    else {
      echo "Tu edad es impar.";
    }
}
?>