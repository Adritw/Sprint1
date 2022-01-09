<?php 
$chocAmount=2;
$chewingGumAmount=2;
$candyAmount=1;
echo "The total of your purchase is: ". totalPurchase(chocolate($chocAmount), chewingGum($chewingGumAmount), candy($candyAmount)). " euros.";
 
function chocolate ($chocAmount){
    $chocFee= 1;
    $totalChocCost= $chocFee * $chocAmount;
    return $totalChocCost;
}
    
function chewingGum ($chewingGumAmount){
    $chewingGumFee= 0.50;
    $totalChewingGumCost= $chewingGumFee * $chewingGumAmount;
    return $totalChewingGumCost;
}

function candy ($candyAmount){
    $candyFee=1.50;
    $totalCandyCost= $candyFee * $candyAmount;
    return $totalCandyCost;
}

function totalPurchase($totalChocCost, $totalChewingGumCost, $totalCandyCost){
    $totalSweetsPurchase= $totalChocCost + $totalChewingGumCost + $totalCandyCost;
    return $totalSweetsPurchase;
}
?>