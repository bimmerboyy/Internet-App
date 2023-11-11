<?php

// function DisplayAll($array){

//     if(is_array($array) && count($array) > 0){
//         echo "Uneti podaci: <br><br><br>";
//         foreach($array as $aKey => $aValue){
//             if(!is_array($aValue)){
//                 if(empty($aValue)){
//                     echo "Empty $aValue <br>";
//                 }
//                 else{
                   
//                     echo $aValue . "<br>";
//                 }
//             }
//             else{
//                 DisplayAll($aValue);
//             }
//         }
        
//     }
// }



// DisplayAll($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is submitted using POST method

    // Retrieve form data
    $selectedCountry = $_POST['country'];
    
    
    // Checkboxes
    $database = isset($_POST['database']) ? $_POST['database'] : "Not selected";
    $webDesign = isset($_POST['web_design']) ? $_POST['web_design'] : "Not selected";
    $webProgramming = isset($_POST['web_programming']) ? $_POST['web_programming'] : "Not selected";

    // Radio buttons
    $selectedYear = isset($_POST['first']) ? "first" : (isset($_POST['second']) ? "second" : (isset($_POST['third']) ? "third" : "Not selected"));
    // Multiple select
    $selectedColors = isset($_POST['colors']) ? $_POST['colors'] : [];

    // Text input
    $address = isset($_POST['address']) ? $_POST['address'] : "Not provided";
    
    // Display the form data
    echo "<h2>Form Data</h2>";
    echo "<p>Selected Country: $selectedCountry</p>";
    echo ($database == 'on') ? "<p>Selected topic: Database</p>" : (($webDesign == 'on') ? "<p>Selected topic: Web design</p>" : "<p>Selected topic: Web programming</p>");
    echo "<p>Selected Year: $selectedYear</p>";
    if (is_array($selectedColors)) {
        echo "<p>Selected Colors: " . implode(", ", $selectedColors) . "</p>";
    } else {
        echo "<p>Selected Colors: $selectedColors</p>";
    }
    echo "<p>Address: $address</p>";
}




?>