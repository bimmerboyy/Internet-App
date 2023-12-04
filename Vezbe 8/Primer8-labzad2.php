
<html>
<head>
<title>Zadatak 2</title></head>
<body style="background-color:LightGreen">
<h1>Spisak studenata</h1><hr/>

<?php
if(isset($_POST["submit"]))
{


$indeks = $_POST["indeks"];
$imeprez = $_POST["imeprez"];
upisBaza($indeks, $imeprez);
prikazBaza();
}
else
{
	prikazBaza();
}


function prikazBaza()
{
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studenti";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	
	$sql = "SELECT * FROM `student`";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border='1'>";
  echo "<tr><th>Indeks</th><th>Ime i prezime</th></tr>";
  while($row = $result->fetch_assoc()) {
     echo "<tr><td>". $row["indeks"]. "</td><td>" . $row["ImePrezime"]. "</td></tr>";
  }
   echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
}

function upisBaza($indeks, $imeprez)
{
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studenti";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	$sql = "INSERT INTO student (indeks, ImePrezime)
VALUES ('".$indeks."', '".$imeprez."')";

if ($conn->query($sql) === TRUE) {
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<h1>Podaci o novom studentu</h1>
<form action="Primer8-labzad2.php" method="POST">
<table>
<tr><td>Indeks:</td><td><input type="text" name="indeks"></td></tr>
<tr><td>Ime i prezime:</td><td><input type="text" name="imeprez"></td></tr>
<tr><td><input type="submit" name="submit" value="Prosledi"></td><td></td></tr>
</table>
</form>
</body>
</html>