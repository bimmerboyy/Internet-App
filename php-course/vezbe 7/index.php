
<html>
    <head>
        <title>Auta</title>
    </head>
    <body>
    <form method="POST">
    <p>
        <label for="">Ime</label>
        <input type="text" name="fname">
    </p>
    <p>
        <label for="">Prezime</label>
        <input type="text" name="lname">
    </p>
    <p>
        <label for="">Email</label>
        <input type="email" name="email">
    </p>
    <p>
        <label for="">Datum rodjenja</label>
        <input type="date" name="date">
    </p>
        <button type="submit">Posalji</button>
    </form>

        <?php
        //Prrovravamo da li je zadata metoda koju smo poslali POST
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $date = $_POST['date'];

        $today = date("Y-m-d");

        $today = date_create($today);

        $converted_date = date_create($date);

        $diff = date_diff($converted_date,$today);
        $diff = $diff -> y;

        if($diff >= 18){
                
        $data = "Ime: $first_name <br>
        Prezime: $last_name <br>
        Email: $email <br>
        Datum rodjenja: $date";

        echo $data;

        $file = fopen("podaci.txt", "w");

        fwrite($file,$data);

        fclose($file);

        echo "<br>Uspjesno ste poslali poruku";
        }
        else{
            echo "Morate imati 18 godina da bi ste poslali poruku";
        }
    }    
    else{
    echo "Nema POST request-a";
    }

        ?>

    </body>
</html>
