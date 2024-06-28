<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'db_Connection/db_Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']) && isset($_GET['comentario'])) {
    // Get the form data
    $comment = $_GET['comentario'];
    $commentId = $_GET['id'];
    $date = date("Y-m-d H:i:s");

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO comentarios (comentario_id, date_time, texto) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die(json_encode(array("success" => false, "message" => "Prepare failed: " . $conn->error)));
    }

    $stmt->bind_param("iss", $commentId, $date, $comment); // Assuming the comment ID is an integer

    // Execute the statement
    if ($stmt->execute()) {
        // Return JSON response indicating success
        echo json_encode(array("success" => true, "message" => "Commentario añadido con éxito"));
    } else {
        // Return JSON response indicating failure
        echo json_encode(array("success" => false, "message" => "Error insertando comentario: " . $stmt->error));
    }

    // Close connections
    $stmt->close();
} else {
    // Return JSON response indicating missing or invalid parameters
    echo json_encode(array("success" => false, "message" => "Invalid request"));
}

$conn->close();
?>
