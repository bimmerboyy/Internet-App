<?php
//Ispis podataka

// if (
    // isset($_POST['name']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['state']) 
    // && isset($_POST['zipcode']) && isset($_POST['customer_code']) && isset($_POST['wood']) && isset($_POST['size']) &&
    // isset($_POST['extras']) && isset($_POST['comment'])
// ) {
    //Radi bez isseta
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $customer_code = $_POST['customer_code'];
    $wood = $_POST['wood'];
    $size = $_POST['size'];
    $extras = isset($_POST['extras']) ? implode(', ', $_POST['extras']) : ''; // Handle multiple checkboxes
    $comment = $_POST['comment'];

    echo "Name: $name<br>
    Address: $address<br>
    City: $city<br>
    State: $state<br>
    Zipcode: $zipcode<br>
    Customer Code: $customer_code<br>
    Wood: $wood<br>
    Size: $size<br>
    Extras: $extras<br>
    Comment: $comment<br>";
// } else {
//     echo "Nisu svi postavljeni";
// }
?>