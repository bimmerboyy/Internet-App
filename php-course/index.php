<?php
// echo 'Hello World!';
// print("<br> Hello World");

// $bilosta = 5;
// echo $bilosta . "<br>";
// $bilosta = 10;

// echo $bilosta;

// $test = 'Hello World';
// $test = 'nesto drugo';
// $cijeli_broj = 11;
// $float_broj = 5.14;
// $tacno_netacno = true;
// $prazno = NULL;

// $loPta = 'okrugla';
// $lopta = 'sssss';

// var_dump($lopta);
// var_dump($loPta);

// var_dump($test);

// echo "<br>";

// var_dump($cijeli_broj);

// echo "<br>";

// var_dump($float_broj);

// echo "<br>";

// var_dump($tacno_netacno);
// // echo $test;
// echo "<br>";

// var_dump($prazno);


$broj_1 = 11;
$broj_2 = 5;
$rezultat = $broj_1 * $broj_2;

// echo "Broj 1: " . $broj_1;

// echo "<br>";

// echo "Broj 2: " . $broj_2;

// echo "<br>";

// echo 'Rezultat:' . $rezultat;

// echo "$broj_1 minus $broj_2 jednako je: <h1> $rezultat </h1>"; 

// $tekst1 = "Hello";
// $tekst2 = "World";
//Ovaj kod sluzi za spajanje dva teksta

/*ili 
Ovaj kod 
sluzi 
za spajanje teksta*/
// $spoj = $tekst1 . $tekst2;

// $nova_var =  $spoj . "<span style='color:red'>$tekst1</span>";

// echo $nova_var;

// echo "<div style='background:red'>$broj_1</div>";


// $tekst = "Hello World";
// echo $tekst;
// echo "<br>";
// $duzina = strlen($tekst);
// echo "duzina stringa " . $duzina;
// echo "<br>";
// $pozicija = strpos($tekst, "World");
// echo $pozicija;

$tekst = "Lorem ipsum, or lipsum as it is omg sometimes known, is dummy text used in laying out print lol, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:

    “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”
    The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.
    
    The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.";
$omg_pos = strpos($tekst,"omg");
$lol_pos = strpos($tekst,"lol");

$finish_pos = $lol_pos - $omg_pos;
$preview = substr($tekst,$omg_pos,$finish_pos);

echo $preview . "...";
?>

<!-- <h1>Ovo je neki nalov</h1> -->