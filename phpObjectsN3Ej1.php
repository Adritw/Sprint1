<
<?php 
class Accounts{
    private $accountNum;
    private $accountBalance;
    private $clientName;
    private $clientLastName;
    
    

    function __Constructor ($newAccountNum, $clientName, $clientLastName){
        $this-> accountNum= $newAccountNum;
        $this-> accountBalance= 0;
        $this-> $clientName= $clientName ;
        $this-> $clientLastName= $clientLastName;
    }
    function getAccountNum(){
        return $this->accountNum;
    }
    function getClientName(){
        return $this->clientName;
    }
    function getClienLasttName(){
        return $this->clientLastName;
    }
    function setAccountNum($accountNum){
        $this->accountNum=$accountNum;
    }
    function setClientName($clientName){
        $this->clientName=$clientName;
    }
    function setClienLasttName($ClienLasttName){
        $this->ClienLasttName=$ClienLasttName;
    }

    //metodos de clase

    function deposit($euros){
        $this->accountbalance= $this->accountBalance + $euros;
        echo "Account balance: ". $this->accountbalance . "<br>";
    }

    function withdraw($euros){
        if ($this->accountbalance < $euros) {
            echo "The amount to be withdrawn exceeds your account balance. <br>";
        }
        else {
            $this->accountbalance= $this->accountBalance - $euros;
            echo "Amount withdrawn: " . $this->accountbalance . "euros. <br>";
        }

    }

}

$client1=new Accounts(01,"Carlos", "Perez");
$client1->deposit(100);
$client1->withdraw(120);
$client1->withdraw(50);
?>
