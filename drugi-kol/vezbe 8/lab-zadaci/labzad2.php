<?php

$submit = $_POST['submit'];
$indeks = $_POST['indeks'];
$imePrezime = $_POST['imePrezime'];

if(isset($submit)){
    upisBaze();
    prikazBaze();
}
else{
    prikazBaze();
}


?>