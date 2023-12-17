
<?php
abstract class Car{
    public $name;
    
    function __construct($name){
        $this->name = $name;
    }

    public abstract function info() : string;
}

class BMW extends Car{
    public function info() : string{
        return "$this->name kao sinonim nemackog kvaliteta";
    }
}

$bmw = new BMW("BMW");
echo $bmw->info();
?>