<?php
$host = "srv747.hstgr.io";
$port = "3306";
$user = "u212050690_Jaivial";
$password = "Jva_Mvc_5171";
$database = "u212050690_Astrodatabase";
$rows_per_page = 10;

// Get the current page number from the query string, default to 1 if not set
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) {
    $current_page = 1;
}

// Calculate the offset for the SQL LIMIT clause
$offset = ($current_page - 1) * $rows_per_page;

// Create connection
$conn = new mysqli($host, $user, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve direccion and id columns from a table with LIMIT and OFFSET
$sql = "SELECT direccion, id FROM inmuebles LIMIT $rows_per_page OFFSET $offset";
$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Output data in JSON format
header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
?>
