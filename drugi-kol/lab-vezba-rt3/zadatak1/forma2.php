<?php
session_start();

$godina = $_POST['godina'];
$fib = isset($_POST['FIB']) ? $_POST['FIB'] : false;
$saf = isset($_POST['SAF']) ? $_POST['SAF'] : false;

echo "Indeks:" . $_SESSION['indeks'] . "<br>Ime:" . $_SESSION['ime'] . "<br>Prezime:" .  $_SESSION['prezime']
. "<br>Godina:$godina <br>";

if ($fib) {
    echo "Finansiranje:FIB";
} elseif ($saf) {
    echo "Finansiranje:SAF";
} else {
    echo "Nije izabrano finansiranje";
}
?>
