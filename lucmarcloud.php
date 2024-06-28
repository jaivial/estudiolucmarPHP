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
        <div id="home" class="lg:ml-52 w-[100%] h-dvh bg-slate-200 overflow-y-hidden">
            <?php
            include 'home.php';
            ?>
        </div>
        <div id='buscadordeinmuebles' class=" lg:ml-52 w-[100%] h-dvh bg-slate-200 overflow-y-auto hidden">
            <?php
            include 'buscadordeinmuebles.php';
            ?>
        </div>
        <div id='buscadordeencargos' class=" lg:ml-52 w-[100%] h-dvh bg-slate-200 overflow-y-auto hidden">
            <?php
            include 'buscadorDeEncargos.php';
            ?>
        </div>
        <div id='settings' class="lg:ml-52 w-[100%] h-full bg-slate-200 hidden">
            <?php
            include 'settings.php';
            ?>
        </div>

    </main>

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
        document.addEventListener("DOMContentLoaded", (event) => {
            localStorage.setItem("seleccionado", "buscador");

            const listItemSearch = document.getElementById("list-itemSearch");
            const listItemHome = document.getElementById("list-itemHome");
            const buscadorDeInmuebles = document.getElementById("buscadordeinmuebles");

            // Function to update the visibility based on localStorage
            function updateVisibility() {
                if (localStorage.getItem("seleccionado") === "buscador") {
                    buscadorDeInmuebles.classList.remove("opacity-0");
                    buscadorDeInmuebles.classList.add("opacity-100", "transition-opacity", "duration-[0.7s]");

                } else {
                    buscadorDeInmuebles.classList.remove("opacity-100");
                    buscadorDeInmuebles.classList.add("opacity-0");
                }
            }

            // Initial check
            updateVisibility();

            listItemSearch.addEventListener("click", () => {
                console.log("Item clicked!");
                localStorage.setItem("seleccionado", "buscador");
                updateVisibility();
            });
            listItemHome.addEventListener("click", () => {
                console.log("Item clicked!");
                localStorage.setItem("seleccionado", "inicio");
                updateVisibility();
            });


            const moreInfoButtons = document.getElementsByClassName('more-info-button');
            Array.from(moreInfoButtons).forEach(button => {
                button.addEventListener('click', function() {
                    console.log("Button clicked!");
                    // Your code to handle button click goes here
                });
            });


        });
    </script>

</body>


</html>