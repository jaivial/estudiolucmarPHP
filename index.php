<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Iniciar Sesión</title>
    <link href="./output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Loading screen -->
    <div id="loading-screen" class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-white bg-opacity-100 z-50 ">
        <svg class="h-[100px] w-auto" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
            <circle cx="12" cy="2" r="0" fill="currentColor">
                <animate attributeName="r" begin="0" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
            </circle>
            <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(45 12 12)">
                <animate attributeName="r" begin="0.125s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
            </circle>
            <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(90 12 12)">
                <animate attributeName="r" begin="0.25s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
            </circle>
            <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(135 12 12)">
                <animate attributeName="r" begin="0.375s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
            </circle>
            <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(180 12 12)">
                <animate attributeName="r" begin="0.5s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
            </circle>
            <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(225 12 12)">
                <animate attributeName="r" begin="0.625s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
            </circle>
            <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(270 12 12)">
                <animate attributeName="r" begin="0.75s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
            </circle>
            <circle cx="12" cy="2" r="0" fill="currentColor" transform="rotate(315 12 12)">
                <animate attributeName="r" begin="0.875s" calcMode="spline" dur="1s" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" repeatCount="indefinite" values="0;2;0;0" />
            </circle>
        </svg>
    </div>
    <section class="h-screen overflow-y-hidden w-full bg-slate-50 flex flex-row justify-center items-start pt-20">
        <div class="flex flex-col items-center justify-start h-full w-96 px-8">
            <div class="w-full px-5 flex flex-row items-center justify-evenly gap-0 mb-10">
                <div class="h-auto w-[70px]">
                    <img class="w-full rounded-xl" src="./assets/img/logolucmar.jpg" alt="" />
                </div>
                <div class="flex flex-col items-start justify-center w-fit h-full">
                    <span class="font-bold font-sans text-xl tracking-wide text-slate-800">Lucmar Cloud</span>
                    <span class="font-sans font-extralight text-base text-slate-800">Panel de administración</span>
                </div>
            </div>

            <div class="w-full">
                <h1 class="font-sans font-bold text-4xl tracking-wide text-slate-800">Iniciar sesión</h1>
                <?php
                include "login_form.php";
                ?>
            </div>

            <div class="login__footer text-neutral-700"></div>
        </div>
        <div class="login__background h-screen"></div>
    </section>

<script>
    function hideLoadingScreen() {
            const loadingScreen = document.getElementById('loading-screen');
            loadingScreen.classList.add('hidden');
        }

        // Call hideLoadingScreen function when content is fully loaded
        window.addEventListener('load', function() {
            hideLoadingScreen();
        });
</script>

</body>

</html> 