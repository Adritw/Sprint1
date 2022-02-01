<?php 
Class PockerDice{
    private $diceSide= array ('As','K','Q','J',7,8);
    private $face;
    private static $countThrows=0;
    
    function throw(){
        $num= array_rand($this->diceSide);
        $this->face=$this->diceSide[$num]." ";
        
         return $this->face;
    }
    
    function getShapeName(){
        self::$countThrows++;
        return $this->face . "<br>";
    }

    function getTotalThrow(){
        
       return self::$countThrows++;
      
    }
}


$player1= new PockerDice();
echo $player1->throw();
echo $player1->getShapeName();


$player1= new PockerDice();
echo $player1->throw();
$player2= new PockerDice();
echo $player2->throw();
$player3= new PockerDice();
echo $player3->throw();
$player4= new PockerDice();
echo $player4->throw();
$player5= new PockerDice();
echo $player5->throw();

echo $player1->getTotalThrow();

?>
