<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LucmarCloud</title>
    <link href="./output.css" rel="stylesheet">
</head>

<body class="overflow-x-hidden">

    <main class="h-svh w-[100%] flex flex-col justify-center items-center overflow-hidden overflow-x-hidden bg-gradient-to-t from-slate-400 via-slate-300 to-slate-200 relative ">
        <div id="clock" class="text-lg font-sans font-medium text-zinc-800 absolute top-10 z-10"></div>

        <div id="nombre-header" class="flex flex-col items-center justify-center w-full h-[60px] pb-10">
            <p class="font-sans text-xl font-medium text-zinc-800 fade-in">Hola,</p>
            <p class="font-sans text-xl font-medium text-zinc-800 fade-in" id="nombreusuario-texto"></p>
        </div>
        <div id="home-title" class="flex flex-col items-center justify-center w-full h-auto pb-40">
            <p class="text-4xl font-bold text-center animate-fade-in-up">Bienvenido a</p>
            <h1 class="animate-fade-in-up-delayed text-5xl font-sans font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-sky-800 via-sky-600 to-sky-300 inline-block">Lucmar Cloud</h1>
        </div>

    </main>


    <style>
        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in {

            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .animate-fade-in-up {
            opacity: 0;
            /* Set initial opacity to 0 */
            animation: fade-in-up 1000ms ease-in-out forwards;
            /* Use forwards to retain the final state */
        }

        .animate-fade-in-up-delayed {
            opacity: 0;
            /* Set initial opacity to 0 */
            animation: fade-in-up 1000ms ease-in-out forwards;
            /* Use forwards to retain the final state */
            animation-delay: 800ms;
            /* Delay the start of the animation */
        }
        .fade-in {
            opacity: 0;
            animation: fade-in 800ms ease-in-out forwards;
            animation-delay: 1s;
        }
    </style>

    <script>
        getUserData();
        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        function updateTime() {
            const clockElement = document.getElementById('clock');
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: '2-digit',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                timeZone: 'Europe/Madrid' // Set timezone to Madrid, Spain
            };
            const madridTime = new Date().toLocaleString('es-ES', options); // Use 'es-ES' locale for Spanish
            const capitalizedTime = capitalizeFirstLetter(madridTime);
            clockElement.textContent = capitalizedTime;
        }

        updateTime(); // Call updateTime function immediately to set the initial time

        // Update time every second
        setInterval(updateTime, 1000);

        function getUserData() {
            fetch('fetchusers.php')
            .then(response => response.json())
            .then(data => {
                console.log('User data:', data);
                const nombreusuario = document.getElementById('nombreusuario-texto');
                nombreusuario.textContent = data[0].name;
            })
            .catch(error => {
                console.error('Error fetching user data:', error);
            });
        }

       
    </script>



</body>


</html>