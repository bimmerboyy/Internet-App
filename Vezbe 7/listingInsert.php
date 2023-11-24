<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpexample";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    // $sql = "INSERT INTO employes (id,first_name,last_name,position) VALUES ('1','John','Doe','john@example.com')";
    
    // $sql = "DELETE FROM employes WHERE id = 1";
    // $sql = "UPDATE employes SET last_name = 'Doe' WHERE id=2";
    $sql = "SELECT id,first_name,last_name FROM employes";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "id: " . $row["id"] . " - Name: " . $row["first_name"] . " " . $row["last_name"] . "<br>";
        }
    }
    else{
        echo "0 results";
    }
    // if($conn->query($sql) === TRUE){
    //     echo "New record created successfully";
    // }
    // else{
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
  


    $conn->close();
    ?>
    
</body>
</html>