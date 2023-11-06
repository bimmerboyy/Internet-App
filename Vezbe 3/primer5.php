<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer 5</title>
</head>
<body>

<?php

$aGlobal1 = "This is test";

include("primer5_inic.php");


function DoPrint(){


    // print("$aGlobal1 <br>");
}
DoPrint();

function DoPrint2(){
    global $aGlobal1;

    print("$aGlobal1 <br>");
}
DoPrint2();

function StaticFunc(){
    static $aVal = 0;
    print("$aVal<br>");
    $aVal++;
}
StaticFunc();
StaticFunc();
StaticFunc();

?>


</body>
</html>