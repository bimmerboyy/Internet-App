<?php

//Nizovi
//Indeksirani niz
// $brojevi = array(10,20,30,40,50);

//kraci nacin za pisanje niza
// $brojevi = [10,20,30,40,50];

// echo $brojevi[2];

//Asocijativni niz

// $osoba = [
//     "ime" => "Marko",
//     "prezime" => "Markovic",
//     "godine"=> 18,
//     "zanimanje" => "porgramer"
// ];

// var_dump($osoba);

// echo $osoba["ime"];

//Visedimenzionalni asocijativni niz

// $gradovi = [
//     "Srbija" => ["Beograd","Novi Pazar","Nis"],
//     "Hrvatska" => ["Zagreb","Split","Rijeku"],
//     "Crna Gora" => ["Podgorica","Niksic","Budva"],
//     "Bosna i Hercegovina" => ["Sarajevo","Mostar","Travnik"],

// ];

// var_dump($gradovi);

// echo $gradovi["Srbija"][1];

//Operacije push i pop na niz
// $brojevi = [2,4,5];

// var_dump($brojevi);

// $element = array_push($brojevi,10, 15);

// $poslednji_element = array_pop($brojevi);

// echo $poslednji_element;

// var_dump($brojevi);
// $broj_elemenata = count($brojevi);

// echo $broj_elemenata;

//Spajanje dva niza u jedan
// $brojevi1 = [2,4,5];
// $brojevi2 = [10,11,12];

// $treci_niz = array_merge($brojevi1,$brojevi2);

// var_dump($treci_niz);

//Sortiranje niza

// $brojevi = [5,3,1,4,2];

// sort($brojevi); //rsort($brojevi); reverse sort

// var_dump($brojevi);

//Petlje

// $broj = 1;

// while($broj <= 5){
//     echo "Broj: $broj <br>";
//     $broj++; 
// }

// for($broj = 1;$broj <= 5;$broj++){
//     echo "Broj: $broj <br>";
// }

// $brojevi = [1,10,4,7,15,100,45,29,49,22];

//Umesto ovoga pisemo foreach
// echo $brojevi[0] . "<br>";
// echo $brojevi[1] . "<br>";
// echo $brojevi[2] . "<br>";
// echo $brojevi[3] . "<br>";
// echo $brojevi[4] . "<br>";

// foreach($brojevi as $broj){
//     echo "$broj <br>";
// }

//Za asocijativne nizove

// $drzave = [
//     "Hrvatska" => ["Zagreb","Split","Rijeka"],
//     "Srbija" => ["Beograd","Novi Sad","Nis"],
//     "Crna Gora" => ["Podgorica","Niksic","Budva"]
// ];

// foreach($drzave as $drzava => $gradovi){
//     echo "<b>$drzava</b> <br>";
//     foreach($gradovi as $grad){
//         echo "$grad <br>";
//     }
// }

?>