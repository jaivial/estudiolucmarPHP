<?php
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the value from the input field
    $host = "srv747.hstgr.io";
    $port = "3306";
    $user = "u212050690_Jaivial";
    $password = "Jva_Mvc_5171";
    $database = "u212050690_Astrodatabase";
    $rows_per_page = 10;

    // Create connection
    $conn = new mysqli($host, $user, $password, $database, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve direccion and id columns from a table with LIMIT and OFFSET
    $sql = "SELECT direccion, id FROM inmuebles";
    $result = $conn->query($sql);

    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Output data in JSON format
    header('Content-Type: application/json');

    // Encode the results as JSON
    $jsonResults = json_encode($data);

    
    $conn->close();
    header('Location: http://localhost/php/');}
?>
