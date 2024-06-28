<?php

// Database connection parameters
$host = "localhost";
$port = "3306";
$user = "root";
$password = "";
$database = "u212050690_Astrodatabase";

// Create connection
$conn = new mysqli($host, $user, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}
