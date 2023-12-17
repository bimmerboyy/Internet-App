<?php

$submit = $_POST['submit'];
$indeks = $_POST['indeks'];
$imePrezime = $_POST['imePrezime'];

if(isset($submit)){
    upisBaze($indeks,$imePrezime);
    prikazBaze();
}
else{
    prikazBaze();
}

function prikazBaze(){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "labzad2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM studenti";
$result = $conn->query($sql);
$text = "";

if ($result->num_rows > 0) {
    echo "<table style='text-align:center;'>
    <tr>
      <th>indeks</th>
      <th>ImePrezime</th>
    </tr>";
  while($row = $result->fetch_assoc()) {
    $text .= "<tr><td>".$row["indeks"]." </td>"."<td>".$row["ImePrezime"]." </td></tr>";
  }
  $text .= "</table>";
  echo $text;
} else {
  echo "0 results";
}
$conn->close();
}

function upisBaze($indeks,$imePrezime){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labzad2";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO studenti (indeks, ImePrezime) VALUES (" . $indeks . ", '" . $imePrezime . "')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


?>