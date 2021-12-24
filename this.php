<?php

// Object Oriented programming

class Person{
    // properties
    public $name;
    public $age;

    //getter
    public function getName(){ 
        return $this->name;
    } 
    public function getAge(){ 
        return $this->age;
    } 

    //setter
    public function setAge($age){ 
         $this->age = $age;
    }
    public function setName($name){
     
        $this->name = $name;
    }
}

$bol = new Person;
$bol->setName("Rabin");
$bol->setAge(24);

echo $bol->getName();
echo $bol->getAge();

?>
