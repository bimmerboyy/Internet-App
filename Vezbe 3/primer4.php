<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer 4</title>
</head>
<body>
    <?php

$variable1 = "Ryan";
$variable2 = $variable1;
print( "$variable1,$variable2 <br>");
$variable2 = "Scott";
print( "$variable1,$variable2 <br>");
$variable3 = &$variable1;
print( "$variable1,$variable3 <br>");
$variable3 = "Katie";
print("$variable1,$variable3");


    ?>
    
</body>
</html>