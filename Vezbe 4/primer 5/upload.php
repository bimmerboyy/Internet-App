<?php
//Pitamo da li je kliknuto na submit
if(isset($_POST['submit'])){
    //Uzimamo file koji smo doabrali
    $file = $_FILES['file'];
    //Uzimamo njegovo ime tip,velicinu... koje su vec po difoltu ugradjene u niz fajl
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
}
//Razdvaja elemente u niz tamo gde stoji . npr slika.png => array { [0] => slika,[1] => png}
$fileExt = explode('.',$fileName);
//Posto je moguce da imamo veliko PNG onda ga pretvaramo u mala slova i izimamo zadnji element niza uz pomoc end funkcije tj ekstenziju
$fileActualExt = strtolower(end($fileExt));
//Kreiramo niz dozvoljenih formata
$allowed = array('jpg','jpeg','png','pdf');
//Pitamo da li se nasa extenzija nalazi u ovom nizu
if(in_array($fileActualExt,$allowed)){
    //Proveravamo da li imamo greske u fajlu ako je 0 onda nema errora
    if($fileError === 0){
        //Postavljamo ogranicenje za velicinu fajla konkretno ne smemo uneti fajl koji ima vise od 500mb
        if($fileSize < 500000){
            $fileNameNew = uniqid('',true) . "," . $fileActualExt;
            $fileDestionation = 'C:/xampp/htdocs/uploads/';
            // . $fileNameNew;
            move_uploaded_file($fileTmpName,$fileDestionation);

            header("Loaction: index.php?uploadsuccess");
        }
        else{
            echo "Your file is too big!";
        }
    }
    else{
        echo "There was an error uploading your file";
    }
}
else{
    echo "You cannot upload files of this type!";
}

?>