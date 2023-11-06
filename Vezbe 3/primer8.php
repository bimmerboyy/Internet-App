<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer 8</title>
</head>
<body>
    <?php
function ReturnSum($a,$b){
    return $a + $b;
}
function StringAppend(&$BaseString,$AddString){
    $BaseString .= $AddString;
    echo $BaseString;

}
function PrintAnchorTag($aHref,$aText,$aTrag = ""){
    if($aTrag == ""){
        print("<a href=\"$aHref\">$aText</a>");
    }
    else{
        print("<a href=\"$aHref\" target = \"$aTrag\">$aText</a>");
    }
}
$myString = "Hello ";
StringAppend($myString, "World <br>");

PrintAnchorTag("http://moodle.np.ac.rs/mod/folder/view.php?id=12945","Moodle","_blank");


    ?>
</body>
</html>