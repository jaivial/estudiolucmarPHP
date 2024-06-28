<!DOCTYPE html>
<html>
<head>
    <title>Pagination Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let currentPage = 1;

            function loadTable(page) {
                console.log("Loading page:", page); // Debug: Check which page is being loaded
                $.ajax({
                    url: 'fetch_data.php',
                    type: 'GET',
                    data: { page: page },
                    dataType: 'json',
                    success: function(data) {
                        console.log("Data received:", data); // Debug: Check the received data
                        let rows = '';
                        for (let i = 0; i < data.length; i++) {
                            rows += '<tr><td>' + data[i].id + '</td><td>' + data[i].direccion + '</td></tr>';
                        }
                        $('#data-table tbody').html(rows);
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: ", status, error); // Debug: Log AJAX errors
                    }
                });
            }

            // Initial load
            loadTable(currentPage);

            // Handle Next button click
            $('#next').click(function() {
                console.log("Next button clicked"); // Debug: Check if Next button is clicked
                currentPage++;
                loadTable(currentPage);
            });

            // Handle Previous button click
            $('#previous').click(function() {
                if (currentPage > 1) {
                    console.log("Previous button clicked"); // Debug: Check if Previous button is clicked
                    currentPage--;
                    loadTable(currentPage);
                }
            });
        });
    </script>
</head>
<body>
    <table id="data-table" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Direccion</th>
            </tr>
        </thead>
        <tbody>
            <!-- Rows will be appended here by JavaScript -->
        </tbody>
    </table>
    <button id="previous">Previous</button>
    <button id="next">Next</button>
</body>
</html>
