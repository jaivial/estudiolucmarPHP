<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'db_Connection/db_Connection.php';

// Get the values of cookies
$usuario = $_COOKIE['usuario'] ?? '';
$password = $_COOKIE['password'] ?? '';

// Prepare and execute the SQL query
$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $password);
$stmt->execute();
$result = $stmt->get_result();

// Fetch data and store in an array
$userData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $user = [
            'id' => $row["id"],
            'email' => $row["email"],
            'name' => $row["nombre"],
            'apellido' => $row["apellido"],
            'password' => $row["password"],
            'admin' => $row["admin"]
        ];

        if ($row["profile_photo"] !== null) {
            $user['profile_photo'] = base64_encode($row["profile_photo"]);
        } else {
            $user['profile_photo'] = null;
        }

        $userData[] = $user;
    }
} else {
    $userData[] = ['error' => 'No user found with the provided credentials.'];
}

// Close the database connection
$stmt->close();
$conn->close();

// Output the user data as JSON
header('Content-Type: application/json');
echo json_encode($userData);
?>
