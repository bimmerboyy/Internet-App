<?php

class Fruit{
    public $name;
    public $color;
    public $weight;
}

$mango = new Fruit();
$mango->name = "Mango";
$mango->color = "Green"; //Nije error kao sto je naglaseno kod njih
echo $mango->name;
echo $mango->color;


?>