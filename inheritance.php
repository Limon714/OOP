<?php

// Object Oriented programming

class Person{
    
    public $eye = 2;
    public $fingure = 5;

    public function bongso(){

        return "Ami Winner hoye dekhabo";
    }
}
 class child extends Person{

 }

 echo (new child)->fingure . "<br>";

 $chi = new child;

 echo $chi->bongso();

    ?>
