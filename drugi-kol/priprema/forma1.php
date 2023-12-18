<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma1</title>
</head>
<body>
<?php
        $_SESSION['naziv'] = $_POST['naziv'];
        $_SESSION['brend'] = $_POST['brend'];
        $_SESSION['dostupnost'] = $_POST['dostupnost'];
      ?>
<form action="forma2.php" method="POST">
        <label for="staraCena">Stara cena</label>
        <input type="text" name="staraCena">
        <br>
        <label for="popust">Popust</label>
        <input type="text" name="popust">
        <br>
        <input type="submit" name="submit">
 
    </form>
</body>
</html>

