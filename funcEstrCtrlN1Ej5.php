<?php 

$grade= 60;
studentGrade($grade);

function studentGrade($grade){
    if ($grade>=60) {
        echo "Primera divisio.";
    }else if ($grade>=45) {
        echo "Segunda divisio.";
    }else if ($grade>=33) {
        echo "Tercera divisio.";
    }else if ($grade<33) {
        echo "Reprobado.";
    }   
}
?>