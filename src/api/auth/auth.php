<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function authenticate($email, $password)
{
    require '../db_Connection/db_Connection.php';


    // Check if request method is GET and email/password parameters are set
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['email']) && isset($_GET['password'])) {
        $email = $_GET['email'];
        $password = $_GET['password'];

        // SQL query to select user based on email and password
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
        $conn->close();
    } else {
        header('Content-Type: application/json');
        $response = array('success' => false, 'error' => 'Invalid request');
        echo json_encode($response);
    }
}
