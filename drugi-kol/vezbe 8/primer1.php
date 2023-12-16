<?php

class Fruit{
   public $name;
   public $color;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name; //kada stavim  return $this->$name; onda nece da mi radi
                            //kada stavim return return $this->name; onda radi zasto? 
    }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name("apple");
$banana->set_name("banana");

echo "Ja jedem " . $apple->get_name() . "<br>";
echo "Ja jedem " . $banana->get_name(); 


?>