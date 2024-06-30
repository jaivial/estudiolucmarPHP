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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
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
        <div id="home" class="lg:ml-52 w-[100%] h-auto bg-slate-200 overflow-y-hidden">
            <?php
            include 'home.php';
            ?>
        </div>
    </main>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script>
        Toastify({
            text: "Sesión iniciada",
            duration: 2500,
            destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            close: false,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                borderRadius: "10px",
                backgroundImage: "background-image: linear-gradient(to bottom right, var(--tw-gradient-stops))",
                backgroundColor: "#34D399",
                backgroundColor: "#047857",
            },
            onClick: function() {} // Callback after click
        }).showToast();
        const mobileItemBuscador = document.getElementById("mobile-itemHome");

        // Function to update the visibility based on localStorage
        function updateVisibility() {
            document.querySelectorAll('[id*="mobile-item"]').forEach(function(element) {
                element.classList.remove('h-[55px]', 'bg-blue-400', 'p-2.5', 'text-white');
                element.classList.add('h-[45px]', 'bg-white', 'p-2', 'text-black');
            });
            mobileItemBuscador.classList.remove('h-[45px]', 'bg-white', 'p-2', 'text-black');
            mobileItemBuscador.classList.add('h-[55px]', 'bg-blue-400', 'p-2.5', 'text-white');
        }

        // Initial check
        updateVisibility();
    </script>
</body>


</html>