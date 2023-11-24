<?php
if (isset($_POST['submit']))
{
obrisi();
}
else
{
prikazi();
}

function obrisi()
{
for($i=0;$i<sizeof($_POST['indeksi']);$i++)
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "primer1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM student WHERE indeks=".$_POST['indeksi'][$i];

if ($conn->query($sql) === TRUE) {
    prikazi();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
}

}

function prikazi()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpexample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT indeks, imeprezime FROM student";
$result = $conn->query($sql);
echo "<form action='spisak.php' method='POST'>";
if ($result->num_rows > 0) {
    echo "<table><tr><th>indeks</th><th>Ime i prezime</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["indeks"]."</td><td>".$row["imeprezime"]."</td><td><input type='checkbox' name='indeksi[]' value=".$row["indeks"]."> </td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo "<input type='submit' name='submit' value='obrisi'/>";
echo "</form>";
$conn->close();
}
?>