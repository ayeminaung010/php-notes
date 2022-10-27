<?php

class Animals {
    public $name;
    public $color;

    public function_construct($AnimalName = 'default',$animalColor = 'default'){
        $this->name = $AnimalName;
        $this->color = $animalColor;
    }

    public function sleep(){
        echo "Good Night";
    }
}

class dog extends Animals{
    public function greeting(){
        echo "hello dog";
    }

}
$animal = new Animals("Shwe War", "yellow");
$dog = new Dog("Aung Net" , "black");

$dog->sleep();
echo $dog->name;