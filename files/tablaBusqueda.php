<?php
// Connect to your database
// Connect to your database
$host = "srv747.hstgr.io";
$port = "3306";
$user = "u212050690_Jaivial";
$password = "Jva_Mvc_5171";
$database = "u212050690_Astrodatabase";

function fetchInmuebles($direccion) {
    global $host, $user, $password, $database, $port;

    // Create connection
    $conn = new mysqli($host, $user, $password, $database, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 1: Determine current page number
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

    // Step 2: Modify your database query with LIMIT and WHERE clauses
    $offset = ($current_page - 1) * 10;
    $where_clause = " WHERE direccion LIKE '%$direccion%'";
    $query = "SELECT id, direccion FROM inmuebles $where_clause LIMIT $offset, 10";
    $result = $conn->query($query);

    // Step 3: Retrieve total number of rows from your database query
    $totalRows = $result->num_rows;

    // Step 4: Calculate total number of pages
    $totalPages = ceil($totalRows / 10);

    // Display navigation links
    echo "<div>";
    if ($current_page > 1) {
        echo "<a href='?page=" . ($current_page - 1) . "&direccion=$direccion'>&lt; Previous</a>";
    }
    echo "Page $current_page of $totalPages";
    if ($current_page < $totalPages) {
        echo "<a href='?page=" . ($current_page + 1) . "&direccion=$direccion'>Next &gt;</a>";
    }
    echo "</div>";

    // Display query results
    if ($result->num_rows > 0) {
        echo "<table>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["direccion"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
}

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get submitted value from form
    $direccion = $_POST["direccion"];
    fetchInmuebles($direccion);
}
?>

<!-- HTML Form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Direccion: <input type="text" name="direccion">
    <input type="submit" value="Submit">
</form>