<?php

class Messagge{
    const MESSAGGE = "Ovo je neka poruka"; //da bi smo ispisali ovaku neku poruku ne stavljamo dolar sign

    function ispisiPoruku(){
        echo self::MESSAGGE;
    }
}

echo Messagge::MESSAGGE . "<br>";

$poruka = new Messagge();
$poruka->ispisiPoruku();


?>