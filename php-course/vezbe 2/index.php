<?php

//Uslovi

// $broj = 10;


//Ispitivanje vece ili manje od broja

// if($broj >= 10){
//     echo "Broj je veci ili jednak  10";
// }
// else if($broj == 9){
//     echo "Broj je tacno 9";
// }
// else{
//     echo "bilo sta";
// }

//Ispitivanje da li je broj razlicit od 10

// if($broj != 10){
//     echo "Broj nije 10";
// }
// else{
//     echo "Broj jeste 10"; 
// }

//Poredjenje varijeabli sa == je poredjenje samo vrednosti tih varijabli a poredjenje sa === je poredjenje i varijabli i njihovih tipova

// $broj1 = 5;
// $broj2 = 5;

// if($broj1 === $broj2){
//     echo "Brojevi su jednaki";
// }
// else{
//     echo "Brojevi nisu jednaki"; 
// }

//Provera izmedju 10 i 50
// $broj = 30;

// if($broj > 10 && $broj < 50){
//     echo "Broj je izmedju 10 i 50";
// }
// else {
//     echo "Broj nije izmedju 10 i 50";
// }

 //Primer za ili ispod nula stepeni zamzavanje a vise od 100 kljucanje
// $broj = -5;

// if($broj < 0 || $broj > 100){
//     echo "Broj je manji od 0 ili veci od 100😂";
// }

//Pravimo dva uslova 

// $broj = 41;

// if( ($broj > 10 && $broj < 20) || ($broj > 40 && $broj < 50) ){
//     echo "Broj je izmedju 10 i 20 ili izmdeju 40 i 50";
// }

//Kombinacija koriscenjem prethodnih uslova na primeru
// $ime = "Marko";
// $godine = 25;
// $zanimanje = "Programer";

// if($ime == "Marko" && $godine >= 18 && $zanimanje == "Programer"){
//     echo "Marko je punoljetni programer";
// }


//Ispitujemo parnost u skraceni if else
// $broj = 5;

// $parnost = ($broj % 2 == 0) ? "Broj je paran" : "Broj je neparan";

// echo $parnost;
// if(){
//     echo "Broj je paran";
// }
// else{
//     echo "Broj je neparan";
// }

$broj = 5;


//Pretvaranje if uslova u switch

//if uslov
// if($broj == 1){
//     echo "jabuka";

// }
// else if($broj == 2){
//     echo "banana";
// }
// else if($broj == 3){
//     echo "kruska";
// }
// else if($broj == 4){
//     echo "jagoda";
// }
// else{
//     echo "nema voca";
// }

//switch uslov

// switch($broj){
//     case 1:
//         echo "jabuka";
//     break;
//     case 2:
//         echo "banana";
//     break;
//     case 3:
//         echo "kruska";
//     break;
//     case 4:
//         echo "jagoda";
//     break;
//     default:
//     echo "nema voca";
// }

//match uslov

// $voce = match($broj){
//     1 => "jabuka",
//     2=> "banana",
//     3 => "kruska",
//     4 => "jagoda",
//     default => "nema voca"
// };

?>