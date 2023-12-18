<?php
session_start();
$_SESSION['staraCena'] = $_POST['staraCena'];
$_SESSION['popust'] = $_POST['popust'];
class Proizvod{
    public $id;
    public $naziv;
    public $brend;
    public $staraCena;
    public $novaCena;
    public $dostupnost;
    public function __construct($id,$naziv,$brend,$staraCena,$novaCena,$dostupnost) {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->brend = $brend;
        $this->staraCena = $staraCena;
        $this->novaCena = $novaCena;
        $this->dostupnost = $dostupnost;
        
    }
   function ispisi(){
        echo "Id:" .$this->id ."<br>Naziv:" .$this->naziv ."<br>Brend:" .$this->brend ."<br>Stara cena:" .$this->staraCena .
        "<br>Nova cena:" .$this->novaCena ."<br>Dostupnost:" .$this->dostupnost;
    }
    function prikaziBazu(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kolkokvijum1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO proizvodi (naziv, brend, stara_cena,nova_cena,dostupnost)
VALUES ('".$this->naziv."', '".$this->brend."', '".$this->staraCena."','".$this->novaCena."','".$this->dostupnost."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    }
}

$naziv = $_SESSION['naziv'];
$brend = $_SESSION['brend'];
$staraCena = $_SESSION['staraCena'];
$popust = $_SESSION['popust'];
$novaCena = $staraCena - ($staraCena * ($popust / 100));
$dostupnost = $_SESSION['dostupnost'];  

$p1 = new Proizvod(1,$naziv,$brend,$staraCena,$novaCena,$dostupnost);
$p2 = new Proizvod(2,$naziv,$brend,$staraCena,$novaCena,$dostupnost);
$p3 = new Proizvod(3,$naziv,$brend,$staraCena,$novaCena,$dostupnost);
$p1->ispisi();
$p1->prikaziBazu();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forma3.php">
        <input type="submit" name="submit">
    
    </form>
</body>
</html>

