<?php

$text = $_POST['text'];
$filterMethod = $_POST['filterType'];
$stripSlashes = isset($_POST['strip_slashes']); 
$nl2br = isset($_POST['nl2br']);
// if($stripSlashes){
//     echo "Strip slashes is checked<br>";
// }
// if($nl2br){
//     echo "nl2br is checked<br>";
// } 

switch($filterMethod){
    case 0:
        $aTextValue = $text;
        break;
    case 1:
        $aTextValue = strip_tags($text);
        break;
    case 2:
        $aTextValue = htmlentities($text);
    break;

}
if($stripSlashes == 'on'){
    $aTextValue = stripslashes($text);
}
if($nl2br == 'on'){
    $aTextValue = nl2br($text);
}

echo $aTextValue;


?>