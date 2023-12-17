<?php

interface Animal{
    function makeSound();
}

class Dog implements Animal{
   function makeSound(){
        echo "AV AV AV";
    }
}
class Wolf implements Animal{
    function makeSound(){
         echo "AUUUUUUUU";
     }
 }
 class Lion implements Animal{
    function makeSound(){
         echo "RRRRRR";
     }
 }

 $dog = new Dog();
 $wolf = new Wolf();
 $lion = new Lion();

 $animals = array($dog,$wolf,$lion);

 foreach($animals as $animal){
    $animal->makeSound() . "<br>";
 }


?>