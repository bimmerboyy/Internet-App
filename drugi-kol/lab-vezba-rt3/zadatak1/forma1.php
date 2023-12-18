<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma 1</title>
</head>
<style>
    body{
        background-color:lightgreen;
    }
</style>

<body>
    <form action="forma2.php" method="POST">
    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Output POST data if available
        echo $_POST['indeks'] . $_POST['ime'] . $_POST['prezime'];

        if (isset($_POST['indeks'])) {
            $_SESSION['indeks'] = $_POST['indeks'];
        } else {
            echo "Nije postavljeno";
        }

        if (isset($_POST['ime'])) {
            $_SESSION['ime'] = $_POST['ime'];
        } else {
            echo "Nije postavljeno";
        }

        if (isset($_POST['prezime'])) {
            $_SESSION['prezime'] = $_POST['prezime'];
        } else {
            echo "Nije postavljeno";
        }
    }
    else
    {
        echo "Nije post";
    }
    ?>
        <label for="godina" style="margin-right:30px;">Godina:</label>
        <select name="godina" id="">
            <option value="prva">Prva</option>
            <option value="druga">Druga</option>
            <option value="treca">Treca</option>
            <option value="cetvrta">Cetvrta</option>
        </select>
        <br>
        <label for="tip" style="margin-right:60px;">Tip</label>
        <input type="radio" name="FIB">
        <label for="FIB">FIB</label>
        <br>
        <input type="radio" name="SAF" style="margin-left:90px;">
        <label for="SAF">SAF</label>
        <br>
       <a href="index.html"><input type="submit" value="<<Nazad"></a> 
        <input type="submit" value="Prosledi">
    </form>
</body>
</html>
