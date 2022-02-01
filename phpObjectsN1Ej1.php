<?php 

class Employee{

    private $name;
    private $salary;

    function __construct($name,$salary){
        $this->name=$name;   //Sin $name viene por parametro, en el constructor, luego al instanciar objetos para ese constructor tienes que enviar argumentos.
        $this->salary=$salary; 
        //$this->name="";   // si el constructor no tiene parametros o algunos de los atributos no vienen por parametro
        //$this->salary=0;
    }

    function getName(){          //getters y setters con camelCase
       return $this->name . ". ";
    }
    function payTax(){
        if ($this->salary>6000){                //los atributos no es necesario que entren por parametro en los metodos de clase.
        return true;
        }
        else {
        return false;
        }
    }
}

$employee1=new Employee("Carlos",7000);
echo $employee1->getName();

$resultado= $employee1->payTax();
if ($resultado == true){
   echo "You have to pay taxes. <br>";
}
else{
echo "Your salary's tax free. <br>";
}

$employee2=new Employee("Ana",6000);
echo $employee2->getName();
$resultado= $employee2->payTax();
if ($resultado == true){
   echo "You have to pay taxes. <br>";
}
else{
echo "Your salary's tax free. <br>";
}