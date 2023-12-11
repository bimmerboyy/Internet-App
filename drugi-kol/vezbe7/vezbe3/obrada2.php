<?php
session_start();


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

$sql = "INSERT INTO student (indeks,Ime,Prezime,finansiranje,godina,napomena)
VALUES (036012,'Tarik', 'Kucevic', 'budzet',3,'Dobar decko')";

$sql = "UPDATE student 
        SET Ime = 'Tarik', 
            Prezime = 'Kucevic', 
            finansiranje = 'budzet', 
            godina = 3, 
            napomena = 'Dobar decko' 
        WHERE indeks = 036012";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    $sql = "SELECT * FROM student";
} else {
    echo "Error updating record: " . $conn->error;
}



$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
      <th>indeks</th>
      <th>Ime</th>
      <th>Prezime</th>
      <th>finansiranje</th>
      <th>godina</th>
      <th>napomena</th>
    </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["indeks"] . "</td>"
            . "<td>" . $row["Ime"] . "</td>"
            . "<td>" . $row["Prezime"] . "</td>"
            . "<td>" . $row["finansiranje"] . "</td>"
            . "<td>" . $row["godina"] . "</td>"
            . "<td>" . $row["napomena"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}




$conn->close();
?>