<?php

// Object Oriented programming

class Person{
    // properties
    public $name = "Md. Limon Islam";
    public $age = 24;
    public function limon($cal){
        return "This is my name" . $cal;
    }
}

$bol = new Person;

echo $bol->limon(' and you can call me ') . " ";
echo $bol->name;

?>
