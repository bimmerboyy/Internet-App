<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer 7</title>
</head>
<body>
    
<?php

$aArray = array("Red","Green","Blue");

foreach($aArray as $aValue){
    print("The current value is $aValue <br>");
}
echo "<br>";
$aColorArray = array(
    "Red" => "#FF0000",
    "Green" => "#00FF00",
    "Blue" => "#0000FF"
);

foreach($aColorArray as $color => $key){
    print("The hex value of $color is $key <br>");
}



?>
</body>
</html>