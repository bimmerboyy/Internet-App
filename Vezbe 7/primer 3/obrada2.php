<?php
session_start();
/*
echo $_SESSION['indeks']."<br>";
echo $_SESSION['ime']."<br>";
echo $_SESSION['prezime']."<br>";
echo $_POST['finansiranje']."<br>";
echo $_POST['godina']."<br>";
echo $_POST['napomena']."<br>";*/

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

$sql = "INSERT INTO `student`(`indeks`, `Ime`, `Prezime`, `finansiranje`, `godina`, `napomena`) VALUES ('".$_SESSION['indeks']."',"." '".$_SESSION['ime']."' , '". $_SESSION['prezime']."' , '". $_POST['finansiranje']."' , '". $_POST['godina']."' , '". $_POST['napomena']."')";


if ($conn->query($sql) === TRUE) {
  
 $sql = "SELECT `indeks`,`Ime`,`Prezime`,`finansiranje`,`godina`,`napomena` FROM `student`;";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border='1'>";
  echo "<tr><th>indeks</th><th>Prezime_ime</th><th>finansiranje</th><th>godina</th><th>napomena</th></tr>";
  while($row = $result->fetch_assoc()) {
     echo "<tr><td>". $row["indeks"]. "</td><td>" . $row["Ime"]." ".$row["Prezime"]. "</td><td> " . $row["finansiranje"]."</td><td>.".$row["godina"]. "</td><td>".$row["napomena"]."</td></tr>";
  }
   echo "</table>";
} else {
  echo "0 results";
}
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>