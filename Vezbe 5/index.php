<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Priprema za kolokvijum</title>

    <style>

input{
    margin-left:50px;
    margin-bottom:20px;
}
label{
    margin-bottom:20px;
}
#ime{
    margin-left:96px;
    
}
button{
    margin-top:20px;
    margin-left:30px;
    padding:8px;
    cursor: pointer;
}

</style>
</head>
<body>
    <?php
    
    ?>
    <h1>OVA FORMA SALJE EMAIL</h1>
<form method="GET" action="index2.php">
    <label for="name">Korisnicko ime:</label>
    <input type="text" name="name"><br> <!-- Add name="name" -->
    <label for="password">Lozinka:</label>
    <input type="password" id="ime" name="password"> <!-- Add name="password" -->
    <br>
    <label for="payment">Nacin placanja:</label>
    <select id="cars" name="payment"> <!-- Add name="payment" -->
        <option value="volvo">KES</option>
        <option value="saab">KARTICA</option>
        <option value="fiat">CEK</option>
        <option value="audi">CALE</option>
    </select>
    <br>
    <label for="book">Narucujem knjigu</label>
    <label for="cbook" style="margin-left:50px;">Knjiga</label>
    <input type="checkbox" name="narucujem_knjigu"> <!-- Add name attribute -->
    <label for="cbook" style="margin-left:50px;">CD</label>
    <input type="checkbox" name="narucujem_cd"> <!-- Add name attribute -->
    <br>
    <label for="comment">Komentar</label>
    <textarea rows="5" cols="50" name="komentar"></textarea> <!-- Add name attribute -->
    <br>
    <button type="submit">Potvrdi</button>
    <button>Ponisti</button>
</form>

<?php

if (isset($_GET['name']) && isset($_GET['password']) && isset($_GET['payment']) &&
 (isset($_GET['narucujem_knjigu'])) || isset($_GET['narucujem_cd']))
 {
    // $name = $_GET['name'];
    // $password = $_GET['password'];
    // echo "<a href=index2.php?name=$name&password=$password'>Click here to go to the new page</a>";


}



?>

    
</body>
</html>