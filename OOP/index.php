<?php
Class Car
{

    //properties
    private $name ;
    public $price ;

    
    //method
    public function getCarName($userName = 'default'){
        $this->name = $userName;
        echo $this->name;
    }
    public function getCarPrice($userPrice = 0){
        $this->price = $userPrice;
        echo $this->price;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name = 'default'){
         $this->name = $name;
    }
    
}
$result = new Car(); //object create
 

$result->getCarName('toyota');
echo "<br>";
$result->getCarPrice('20000');
echo "<br>";
$result->setName('BBB');
$name =$result->getName();
echo $name;


