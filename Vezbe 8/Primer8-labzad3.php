<html>
<head>
<title>Zadatak 3</title></head>
<body style="background-color:LightGreen">
<h1>Spisak studenata</h1>
<form action="Primer8-labzad3.php" method="POST">
<?php

if(isset($_POST["submit"]))
{
	
	$indeksi = $_POST["indeksi"];
	for ($i=0;$i<sizeof($indeksi);$i++)
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
		$sql = "DELETE FROM student WHERE indeks='$indeksi[$i]'";
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
	}

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
  echo "<table>";
  echo "<tr><th>Indeks</th><th>Ime i prezime</th></tr>";
  while($row = $result->fetch_assoc()) {
     echo "<tr><td>". $row["indeks"]. "</td><td>" . $row["ImePrezime"]. "</td><td><input type='checkbox' name='indeksi[]' value='". $row["indeks"]."'></td></tr>";
  }
   echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
}

prikazBaza();
?>
<tr><td><input type="submit" name="submit" value="Obrisi"></td><td></td></tr>
</table>
</form>
</body>
</html>