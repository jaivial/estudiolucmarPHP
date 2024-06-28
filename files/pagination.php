<?php
header('Content-Type: application/json');


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Start the session
    session_start();

    // Include 'form.php' to execute its PHP code
    require_once 'form.php';

    // Check if $jsonResults is set in 'form.php'
    if (!isset($jsonResults)) {
        echo json_encode(array("error" => "Failed to read JSON data."));
        exit();
    }

    // Decode the JSON data
    $data = json_decode($jsonResults, true);

    // Check if the data was decoded correctly
    if ($data === null) {
        echo json_encode(array("error" => "Failed to decode JSON data."));
        exit();
    }

    // Pagination parameters
    $itemsPerPage = isset($_GET['itemsPerPage']) ? (int)$_GET['itemsPerPage'] : 10;
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Calculate total number of pages
    $totalItems = count($data);
    $totalPages = ceil($totalItems / $itemsPerPage);

    // Calculate the starting index of items for the current page
    $startIndex = ($currentPage - 1) * $itemsPerPage;

    // Extract the items for the current page
    $paginatedData = array_slice($data, $startIndex, $itemsPerPage);

    // Return paginated data along with pagination information
    $response = array(
        "currentPage" => $currentPage,
        "itemsPerPage" => $itemsPerPage,
        "totalItems" => $totalItems,
        "totalPages" => $totalPages,
        "data" => $paginatedData
    );

    echo json_encode($response);
} else {
    echo json_encode(array("error" => "Invalid request method."));
}
?>
