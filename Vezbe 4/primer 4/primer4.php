<?php
//Stavljamo dve nedelje na trenutno vreme
$aTwoWeeks = time() + ( 60 * 60 * 24 * 14 );


//Stavljamo ime kukiju LastTime vrednost time() i kada istice $aTwoWeeeks
setcookie("LastTime",time(),$aTwoWeeks);

//Uzimamo vrednost kukija tj vreme zadnjeg posecivanja sajta koje se automatki cuva pri ulaksu na sajt
$LastTime = $_COOKIE['LastTime'];

if(!empty($LastTime)){
    $aMessage = "The last time you visited was " . date("d F Y",$LastTime) . " at " . date("h:i:s",$LastTime) . "<br><br>";
}
else{
    $aMessage = "You have not visited in past two weeks";
}


$CookieArray = $_COOKIE['CookieArray'];

if(!empty($CookieArray)){
    $ValMessage = "Values:" . $CookieArray[0] . "," . $CookieArray[1];
    $aStartValue = $CookieArray[1] + 1; 
}
else{
    $ValMessage = "The values are not aviable";
    $aStartValue = 0;
}
//Brisemo prethodnu vrednost kukija kako bi ubacili novu
setcookie( "CookieArray[0]" ); 
setcookie( "CookieArray[1]" ); 
//Postavljamo niz kukija gde ce pocetna vrednost na pocetku biti 0
setcookie("CookieArray[0]",$aStartValue,$aTwoWeeeks);
setcookie("CookieArray[1]",$aStartValue + 1,$aTwoWeeeks);



echo $aMessage . "<br><br>" . $ValMessage;

?>

