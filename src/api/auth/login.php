<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    // Send JSON response with error
header('Content-Type: application/json');
// Include auth.php to use the authenticate function

require 'auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['email']) && isset($_GET['password'])) {
    $email = $_GET['email'];
    $contra = $_GET['password'];
    $user = authenticate($email, $contra);

    if ($user) {
         // Return success JSON response
         $response['status'] = 'success';
         $response['message'] = 'Login successful';
        } else {
            // Return failure JSON response
            $response['status'] = 'failure';
            $response['message'] = 'Invalid username or password';
        }
    
        // Output JSON response
        echo json_encode($response);
    } else {
        // Return failure JSON response
        $response['status'] = 'failure';
        $response['message'] = 'Invalid request method';
    
        // Output JSON response
        echo json_encode($response);
    }
?>
