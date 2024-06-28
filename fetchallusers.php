<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set response headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Allow access from any origin (for development purposes)

// Database configuration
require_once 'db_Connection/db_Connection.php';

// Initialize users array
$users = array();

// Check if the cookies are set
if (isset($_COOKIE['usuario']) && isset($_COOKIE['password'])) {
    $email = $_COOKIE['usuario'];
    $password = $_COOKIE['password'];
    
    // SQL query to select all columns where email and password match the cookies
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo json_encode(array("error" => "Failed to prepare statement: " . $conn->error));
        exit();
    }
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Check if there are results
    if ($result->num_rows > 0) {
        // Fetch all results into an array
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    } else {
        echo json_encode(array("error" => "No records found."));
        $stmt->close();
        $conn->close();
        exit();
    }
    
    // Close statement
    $stmt->close();
} else {
    echo json_encode(array("error" => "Cookies are not set."));
    $conn->close();
    exit();
}

// Close connection
$conn->close();


$newString = mb_convert_encoding($users, "UTF-8", "auto");

// Output users array as JSON
$response = json_encode($newString);

if ($response === false) {
    echo json_encode(array("error" => "JSON encoding failed: " . json_last_error_msg()));
    exit();
}
echo $response;
?>
