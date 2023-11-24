<?php
session_start();
?>
<html>
<head>
<title>Prenos parametara u dve forme - Forma 2
</title>
</head>
<body>
<form action="obrada2.php" method="POST">

<?php

$_SESSION['indeks']=$_POST['indeks'];
$_SESSION['ime']=$_POST['ime'];
$_SESSION['prezime']=$_POST['prezime'];

?>
  <input type="radio" id="FIB" name="finansiranje" value="FIB">
  <label for="FIB">FIB</label><br>
  <input type="radio" id="SAF" name="finansiranje" value="SAF">
  <label for="SAF">SAF</label><br>
  
  <label for="godina">Godina studija:</label>

<select name="godina" id="godina">
  <option value="prva">Prva</option>
  <option value="druga">Druga</option>
  <option value="treca">Treca</option>
  <option value="cetvrta">Cetvrta</option>
</select>
<textarea name = "napomena">Napomena</textarea>
  
  
  
<input type="submit" name="submit" value="Upisi"/>
<input type="reset">
</form>
</body>
</html>