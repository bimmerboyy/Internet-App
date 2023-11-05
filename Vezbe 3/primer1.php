<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stringovi</title>
</head>
<body>
    <?php
$aStr1 = "This is simple string";
print("$aStr1 <br>");
$aStr2= "Thatcher";
print("$aStr2 <br>");
$aStr3 = "My name is Thatcher";
print("$aStr3 <br>");
$aStr4 = "My name is \$aStr2";
print("$aStr4 <br>");
$aStr1 = "Dont evaulate $aStr2";
print("$aStr1 <br>");

print($aStr3 . " and " . $aStr4);

    ?>
</body>
</html>