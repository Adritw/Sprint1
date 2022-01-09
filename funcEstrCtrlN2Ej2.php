<?php

$mins=6;
llamada($mins);

function llamada($min){

    $callFirstThreeMin=0.10;
        
    if ($min<=3) {
        echo "Total call cost First three minutes: " .$callFirstThreeMin ." cents. <br>";
    }else {
        $sumTotalcall= $callFirstThreeMin+= 0.05 *($min-3);
        echo "Total call cost: " .$sumTotalcall." cents. <br>";
    }
}
?>