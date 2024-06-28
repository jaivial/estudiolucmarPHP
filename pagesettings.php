<?php
require 'auth.php';

if (!isset($_COOKIE['usuario']) && !isset($_COOKIE['password'])) {
    header('Location: index.php');
} else if (isset($_COOKIE['usuario']) && isset($_COOKIE['password'])) {

    // Get email and password from cookies
    $email = $_COOKIE['usuario'];
    $contra = $_COOKIE['password'];

    // Attempt authentication
    $user = authenticate($email, $contra);
    if ($user) {
        echo "<script>console.log('User is authenticated');</script>";
    } else {
        header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>LucmarCloud</title>
    <link href="./output.css" rel="stylesheet">
</head>

<body class="overflow-x-hidden bg-slate-200">

    <main class="h-auto w-[100%] flex flex-row justify-start items-stretch bg-slate-200">
        <div id='sidenavbar' class="fixed left-0 top-0 w-auto overflow-y-auto z-20 hidden lg:block">
            <?php
            include 'sidenavbar.php';
            ?>
        </div>
        <div id='mobilesidenavbar' class="fixed left-0 bottom-0 w-auto overflow-visible z-30 block h-auto lg:hidden">
            <?php
            include 'mobilesidenavbar.php';
            ?>
        </div>
        <div id="settings" class=" lg:ml-52 w-[100%] h-dvh bg-slate-200 overflow-y-auto">
            <?php
            include 'settings.php';
            ?>
        </div>
    </main>

    <script>
        const mobileItemSettings = document.getElementById("mobile-itemSettings");

        // Function to update the visibility based on localStorage
        function updateVisibility() {
            document.querySelectorAll('[id*="mobile-item"]').forEach(function(element) {
                element.classList.remove('h-[55px]', 'bg-blue-400', 'p-2.5', 'text-white');
                element.classList.add('h-[45px]', 'bg-white', 'p-2', 'text-black');
            });
            mobileItemSettings.classList.remove('h-[45px]', 'bg-white', 'p-2', 'text-black');
            mobileItemSettings.classList.add('h-[55px]', 'bg-blue-400', 'p-2.5', 'text-white');
        }

        // Initial check
        updateVisibility();
    </script>

</body>


</html>