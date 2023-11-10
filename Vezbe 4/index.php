<?php

// Ova funkcija polazi od niza studenata i stampa sva potrebna hidden polja za njihovo pamcenje
// Za svakog studenta se dodaju dva hidden polja.
// Npr., ako je indeks studenta 1000, ime Petar Petrovic, a prosek 8, stampace se sledeca dva hidden polja:
// <input type="hidden" name="ime_1000" value="Petar Petrovic">
// <input type="hidden" name="prosek_1000" value="8">

function printHiddenFileds($students)
{
	foreach ($students as $indeks => $aStudent)
	{
		$ime = $aStudent["ime"];
		$prosek = $aStudent["prosek"];
		print("<input type='hidden' name='ime_$indeks' value='$ime'>"); 
		print("<input type='hidden' name='prosek_$indeks' value='$prosek'>"); 
	}	
} 

// Ova funckija polazi od niza studenata i vraca string koji se moze nadovezati na kraj nekog linka.
// Npr., ako je indeks studenta 1000, ime Petar Petrovic, a prosek 8, vratice se sledeci string:
// &ime_1000=Petar Petrovic&prosek_1000=8
function getLinkFromStudents($students)
{
	$link = "";
	foreach ($students as $indeks => $aStudent)
	{
		$ime = $aStudent["ime"];
		$prosek = $aStudent["prosek"];
		$link.="&ime_$indeks=$ime&prosek_$indeks=$prosek";
	}
	
	
	return($link);
}

// Ova funkcija dodaje studenta u niz students
function addStudent($indeks, $ime, $prosek, $students)
{
	$students["$indeks"]["ime"] = $ime;
	$students["$indeks"]["prosek"] = $prosek;
	
	return $students;
}


// Ova funckija polazi od niza vrednosti koje su poslate preko REQUEST objekta i kreira niz studenata.
// Npr, ako je prosledjena promenljiva sa $_REQUEST[ime_1000], cija je vrednost "Petar Petrovic", kreirace se
// element niza $students[1000]["ime"], cija ce vrednost biti "Petar Petrovic".
function initStudents()
{
	$students = array();
	foreach ($_REQUEST as $name => $value)
	{
		$name_array = explode("_", $name);
		if ($name_array[0] == "ime")
		{
			$indeks = $name_array[1];
			$students["$indeks"]["ime"] = $value;
		}
		else if ($name_array[0] == "prosek")
		{
			$indeks = $name_array[1];
			$students["$indeks"]["prosek"] = $value;
		}
	}
	
	return $students;
}

// Ova funkcija prikazuje listu studenata, kao i deo za dodavanja studenta.
// Obratiti paznju da funkcija na pocetku svake forme mora da pozove funckiju printHiddenFields, 
// kao i da za svaki link mora da se nadoveze izlaz funckije getLinkFromStudents
function displayStudents($students)
{
	print("<h2>Lista studenata:</h2>");
	
	// PRVA FORMA
	print("<form action='index.php' method='post'>");
	printHiddenFileds($students);
	print("<input type='hidden' name='mode' value='deleteStudents' />");
	
	
	print("<table cellpadding=5>");
	print("<tr><th>Indeks</th><th>Ime i prezime</th><th>Prosek</th></tr>");
	
	$additionalLink = getLinkFromStudents($students);
	
	foreach ($students as $indeks => $student)
	{
		if (empty($indeks))
			continue;
		$ime = $student["ime"];
		$prosek = $student["prosek"];
		print("<tr>");
		print("<td>$indeks</td><td>$ime</td><td>$prosek</td><td><input type='checkbox' name='deletecheckbox[]' value='$indeks' </td>");
		print("<td><a href='index.php?mode=editStudent&indeks=$indeks$additionalLink'>Promeni</a></td>");
		print("</tr>");
		
	}
	print("</table>");
	print("<input type='submit' name='delete' value='Brisi selektovane' />");
	print("</form>");
	
	print("<hr size='1'>");
	
	
	// DRUGA FORMA
	print("<form action='index.php' method='post'>");
	print("<input type='hidden' name='mode' value='addStudent'>");
	printHiddenFileds($students);
	
	print("<h2>Novi student:</h2>");
	print("Indeks: <input type='text' name='new_indeks' />&nbsp;");
	print("Ime i prezime: <input type='text' name='new_ime' />&nbsp;");
	print("Prosek: <input type='text' name='new_prosek' /><br>");
	print("<input type='submit' name='add_button' value='Dodaj' />");
	
	print("</form>");
}

// Ova funkcija stampa formu koja se koristi za promenu podataka o studentima.
function printEditStudent($students, $indeks)
{
	$ime = $students[$indeks]["ime"];
	$prosek = $students[$indeks]["prosek"];
	print("<h2> Promena podataka o studentu </h2>");
	print("<form method='post' action='index.php'>");
	printHiddenFileds($students);
	print("<input type='hidden' name='mode' value='updateEdited' />");
	print("<input type='hidden' name='indeks' value='$indeks' />");
	print("Ime i prezime: &nbsp; <input type='text' name='ime' value='$ime' /> <br/>");
	print("Prosek: &nbsp; <input type='text' name='prosek' value='$prosek' /><br/>");
	print("<input type='submit' name='button' value='Prosledi' />");
	print("</form>");
	
}

// Ova funkcija brise selektovane studente iz niza students. Brisanje se vrsi pozivom funkcije unset.
function deleteStudents($students)
{
	if (is_array($_POST['deletecheckbox']))
	foreach($_POST['deletecheckbox'] as $key => $indeks)
	{
		unset($students["$indeks"]);
	}
	return $students;
}

// Ova funkcija se koristi za promenu podataka o studentu. 
function updateEditedStudent($students)
{
	$indeks = $_POST["indeks"];
	
	$ime = $_POST["ime"];
	$prosek = $_POST["prosek"];
	
	$students["$indeks"]["ime"] = $ime;
	$students["$indeks"]["prosek"] = $prosek;
	
	return $students;
}


$students = initStudents(); 

?>
<html>
	
<head></head>
<body>

<?php
	
switch ($_REQUEST["mode"])
{
	case 'addStudent' : $students = addStudent($_POST['new_indeks'], $_POST['new_ime'], $_POST['new_prosek'], $students);
						displayStudents($students);
						break;
	case 'deleteStudents' : 
						$students = deleteStudents($students);
						displayStudents($students);
						break;
	case 'editStudent' : printEditStudent($students, $_GET["indeks"]);
						 break;
	case 'updateEdited' : $students = updateEditedStudent($students);
						  displayStudents($students);
						  break;
					
	default: displayStudents($students);
}

?>

</body>
</html>