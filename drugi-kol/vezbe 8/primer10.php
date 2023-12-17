<?php

class domain{
   protected static function ispisDomaina(){ //Da bi mogla da se korisiti u child funkcijama mora static
        return "W3Schools.com";
   }
   public static $text = "W3Schools je najbolji sajt";
}

class W3Schools extends domain{
    public $websitename;
    public function __construct() {
        $this->websitename = parent::ispisDomaina();
    }
    function opis(){
        echo parent::$text;
    }
}

$w3scools = new W3Schools();
$w3scools->__construct();
echo $w3scools->websitename . "<br>";
$w3scools->opis();


?>