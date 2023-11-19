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


?>

