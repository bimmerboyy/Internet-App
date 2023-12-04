<?php

$students = [
    "1000" => ["Petar Petrovic" => "8","Marko Markovic" => "7.5","Zile Zilovic" => "6.5"],
    "2000" => ["Abaz Abazovic" => "4.5","Dzenan Dzenanovic" => "7.5","Hamdo Hamdovic"=> "3.7"],
    "3000" => ["Zekerija Zekrovic" => "6.7","Ruso Rusovic" => "9.8","Ivan Ivanovic" => "7.9"]
];


// foreach ($students as $indeks => $imeArray) {
//     echo "Students with indeks $indeks:<br>";

//     foreach ($imeArray as $ime => $grade) {
//         echo "$ime has a grade of $grade<br>";
//     }

//     echo "<br>";
// }

//Stampa nevidljiva polja nema poente al aj

function printHiddenFields($students){
    foreach($students as $indeks => $imeArray){
        foreach($imeArray as $ime => $grade){
        echo "<input type='hidden' name='ime_$indeks' value='$ime'/>";
        print("<input type='hidden' name='ime_$indeks' value='$grade'/> <br>");
        }
    }
}

printHiddenFields($students);

// Ova funckija polazi od niza studenata i vraca string koji se moze nadovezati na kraj nekog linka.
// Npr., ako je indeks studenta 1000, ime Petar Petrovic, a prosek 8, vratice se sledeci string:
// &ime_1000=Petar Petrovic&prosek_1000=8

function getLinkFromStudents($students){
    $link = "";
    foreach($students as $indeks => $imeArray){
        foreach($imeArray as $ime => $grade){
            $link .= "&" . $ime . "_" . $indeks . "=$ime&prosek_$indeks=$grade<br>";
        }
    }
    return $link;
}

// echo getLinkFromStudents($students);

//Ova funkcija dodaje studenta u niz students

function addStudents(&$students,$ime,$indeks,$prosek){
   $students[$indeks][$ime] = $prosek;
}

addStudents($students,"Sabit Kangal","3000","7.5");

//Funkcija za ispisivanje svih studenata

function printAllStudents(){
    global $students;
    foreach($students as $indeks => $imeArray){
        foreach($imeArray as $ime => $grade){
            echo "$indeks => [$ime => $grade]<br>";
        }
    }
}
// printAllStudents();

//Funkcija za kupljenje podataka sa requesta i smestanje u niz
//Moramo da posaljemo adresu niza kada vrsimo dodavanje

function initStudents(&$students){
    if(isset($_POST["indeks"]) && isset($_POST["ime"]) && isset($_POST["prosek"])){
        $students[$_POST["indeks"]][$_POST["ime"]] = $_POST["prosek"];
    }
    else{
        echo "nije uspeo da ih postavi<br>";
    }
    
}
initStudents($students);

// printAllStudents();

function displayStudents($students){
    $imeStudenta = "";
    $indeksStudenta = "";
    $prosek = "";
    $duzinaNiza = 0;
    foreach($students as $indeks => $imeArray){
        foreach($imeArray as $ime => $grade){
            $imeStudenta .= $ime . "_";
            $indeksStudenta .= $indeks . "_";
            $prosek .= $grade . "_";
            $duzinaNiza = sizeof($students) + sizeof($imeArray);
        }
    }
    $imeStudenta = explode("_",$imeStudenta);
    $indeksStudenta = explode("_",$indeksStudenta);
    $prosek = explode("_",$prosek);
    $string = "";
    for($i = 0;$i < $duzinaNiza;$i++){
        $string .= 
    "<tr>
     <td>$indeksStudenta[$i]</td>
     <td>$imeStudenta[$i]</td>
     <td>$prosek[$i]</td>
    </tr>";
    }
    echo "
    <table style='width:500px;'>
    <tr>
    <th>Indeks</th>
    <th>Ime i prezime</th>
    <th>Prosek</th>
    </tr>
    $string
    </table>
    ";
    

}



function deleteStudent(&$students, $indeksToDelete) {
    if (isset($students[$indeksToDelete])) {
        unset($students[$indeksToDelete]);
        echo "Student with index $indeksToDelete deleted successfully.";
    } else {
        echo "Student with index $indeksToDelete not found.";
    }
}

deleteStudent($students,"1000");

displayStudents($students);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table,tr,td{
    border: 1px solid black;
    border-collapse:collapse;
}
</style>
<body>
    
</body>
</html>

