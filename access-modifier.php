<?php

// Object Oriented programming

class Person{
    
    public $eye = 2;
    public $fingure = 5;
    private $mind = 1;

}
$chid = new Person;
$chid->fingure = 22;
echo(new Person)->eye;
echo $chid->fingure;
    
 ?>
