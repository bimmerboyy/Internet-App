<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenos parametara u dve forme</title>
</head>
<body>
    <?php
    //Sesiju koristimo da bi smo podatke preneli i na obradu2 tj sesiju mozemo da korsitimo sve dok traje
    $_SESSION['indeks'] = $_POST['indeks']; //Dodajemo u sesiju na mesto indeks koje preavimo za tu sesiju podatak iz posta za indeks
    $_SESSION['ime'] = $_POST['ime']; //Odnosno sesiji smo dodelili id kolacica
    $_SESSION['prezime'] = $_POST['prezime']; 
        
    ?>

<form action="obrada2.php">
    <input type="radio" name="FIB">
    <label for="finansiranje">FIB</label>
    <input type="radio" name="SAF">
    <label for="finansiranje">SAF</label>
    <br>
    <br>
    <label for="godina">Godina studija:</label>
    <br>
    <select name="godina" id="">
        <option value="prva">prva</option>
        <option value="druga">druga</option>
        <option value="treca">treca</option>
        <option value="cetvrta">cetvrta</option>
    </select>
    <br><br>
    <textarea name="napomena" id="" cols="30" rows="5">
        Napomena
    </textarea>
    <br>
    <input type="submit" name="submit" value="Upisi">
    <input type="reset">
</form>
    
</body>
</html>