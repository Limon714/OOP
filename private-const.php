<?php

// Object Oriented programming

class Person{
    
  private  const NAME = 'Limon khan';
  public function mycon(){
      echo self::NAME;
  }
}

$ob = new Person;
echo $ob->mycon(); 
 ?>
