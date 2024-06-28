<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More info</title>
    <link href="./output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="encargos-loading-screen-moreinfo" class="fixed top-0 left-0 right-0 bottom-0 w-full h-dvh flex justify-center items-center bg-white bg-opacity-100 z-50 overflow-y-visible hidden">
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
    <div class="fixed top-2 right-2" onclick="encargoscerrrar()">
        <svg class="text-5xl text-red-800" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
            <path fill="currentColor" d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15l-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152l2.758 3.15a1.2 1.2 0 0 1 0 1.698" />
        </svg>
    </div>
    <p id="encargos-direccion" class="text-center">Calle Casalet, 12345</p>
    <div id="encargos-inmueble-info-container" class="flex flex-row items-center justify-center w-full text-center gap-2 pt-4 h-auto z-20">

        <div class="h-full flex flex-col justify-center items-center w-1/2 py-4 px-2 pt-10 text-start gap-5 bg-blue-400 bg-opacity-15 rounded-lg relative" id="encargos-extrainfocontainer-1">
            <div class="absolute top-1 right-1 text-emerald-800 hover:text-emerald-500 hover:cursor-pointer" onclick="encargosshowEditOne()">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                        <path d="M9.533 11.15A1.823 1.823 0 0 0 9 12.438V15h2.578c.483 0 .947-.192 1.289-.534l7.6-7.604a1.822 1.822 0 0 0 0-2.577l-.751-.751a1.822 1.822 0 0 0-2.578 0z" />
                        <path d="M21 12c0 4.243 0 6.364-1.318 7.682C18.364 21 16.242 21 12 21c-4.243 0-6.364 0-7.682-1.318C3 18.364 3 16.242 3 12c0-4.243 0-6.364 1.318-7.682C5.636 3 7.758 3 12 3" />
                    </g>
                </svg>
            </div>
            <h3 class=" text-base text-gray-800 text-center absolute top-8 px-3 font-semibold">INFORMACIÓN CATASTRAL</h3>
            <p id="encargos-tipo" class="text-sm text-gray-800 text-center mt-14"></p>
            <p id="encargos-uso" class="text-sm text-gray-900 text-center"></p>
            <p id="encargos-superficie" class="text-sm text-gray-900 text-center"></p>
            <p id="encargos-ano" class="text-sm text-gray-900 text-center"></p>
        </div>
        <div class="relative flex-col hidden justify-center items-center w-1/2 py-4 pt-10 px-2 text-start gap-5 bg-blue-400 bg-opacity-15 rounded-lg h-full" id="encargos-extrainfocontainer-1-edit">
            <div class="absolute top-1 right-1 text-rose-800 hover:text-rose-500 hover:cursor-pointer" onclick="encargoshideEditOne()">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m15.75 15l-6-6m0 6l6-6m7 3c0-5.523-4.477-10-10-10s-10 4.477-10 10s4.477 10 10 10s10-4.477 10-10" color="currentColor" />
                </svg>
            </div>
            <input type="text" name="encargostipo" id="encargos-tipo-edit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 hover:bg-slate-100 text-center" placeholder="Tipo">
            <input type="text" name="encargosuso" id="encargos-uso-edit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 hover:bg-slate-100 text-center" placeholder="Uso">
            <input type="text" name="encargossuperficie" id="encargos-superficie-edit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 hover:bg-slate-100 text-center" placeholder="Superficie">
            <input type="text" name="encargosano" id="encargos-ano-edit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 hover:bg-slate-100 text-center" placeholder="Año">
            <button class="bg-emerald-500 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer" type="button" id="encargos-edit-button" onclick="encargosupdateEditOne()">Editar</button>
            <input type="hidden" value="" id="encargos-edit-more-info">
        </div>
        <div class="h-full flex flex-col justify-center items-center w-1/2 py-4 px-2 pt-10 text-start gap-5 bg-blue-400 bg-opacity-15 rounded-lg relative" id="encargos-extrainfocontainer-2">
            <div class="absolute top-1 right-1 text-emerald-800 hover:text-emerald-500 hover:cursor-pointer" onclick="encargosshowEditTwo()">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                        <path d="M9.533 11.15A1.823 1.823 0 0 0 9 12.438V15h2.578c.483 0 .947-.192 1.289-.534l7.6-7.604a1.822 1.822 0 0 0 0-2.577l-.751-.751a1.822 1.822 0 0 0-2.578 0z" />
                        <path d="M21 12c0 4.243 0 6.364-1.318 7.682C18.364 21 16.242 21 12 21c-4.243 0-6.364 0-7.682-1.318C3 18.364 3 16.242 3 12c0-4.243 0-6.364 1.318-7.682C5.636 3 7.758 3 12 3" />
                    </g>
                </svg>
            </div>
            <h3 class=" text-base text-gray-800 text-center absolute top-8 px-3 font-semibold">INFORMACIÓN DEL INMUEBLE</h3>
            <div id="encargos-categoriacontainer" class="flex flex-row items-center justify-start w-full gap-3 px-2 mt-14">
                <img src="assets/img/inquilino.svg" id="encargos-inquilino-photo" alt="Inquilino" class="flex h-auto w-[25px]">
                <img src="assets/img/propietario.svg" id="encargos-propietario-photo" alt="Propietario" class="hidden h-auto w-[25px]">
                <img src="assets/img/vacio.svg" id="encargos-vacio-photo" alt="Vacio" class="hidden h-auto w-[25px]">
                <p id="encargos-categoria" class="text-start text-sm text-gray-800 w-full">Inquilino</p>
            </div>
            <div id="encargos-potencialAdquisicion" class="flex flex-row items-center justify-start w-full gap-3 px-2">
                <svg class="text-rose-800 w-[25px]" xmlns="http://www.w3.org/2000/svg" width="25px" height="auto" viewBox="0 0 14 14">
                    <path fill="currentColor" fill-rule="evenodd" d="M11.485.379a.5.5 0 0 0-.839-.233l-2 2a.5.5 0 0 0-.131.475l.36 1.444a.725.725 0 0 0-.014.014L6.47 6.47a.75.75 0 0 0 1.06 1.06l2.393-2.39a.789.789 0 0 0 .014-.015l1.443.361a.5.5 0 0 0 .475-.131l2-2a.5.5 0 0 0-.233-.84l-1.709-.426zm-4.168.38a.75.75 0 0 1-.696.8a5.47 5.47 0 1 0 5.831 5.89a.75.75 0 1 1 1.496.119A6.97 6.97 0 1 1 6.517.062a.75.75 0 0 1 .8.696Zm-.672 3.299a.75.75 0 0 1-.425.972a2.12 2.12 0 1 0 2.75 2.742a.75.75 0 1 1 1.398.544a3.62 3.62 0 1 1-4.694-4.683a.75.75 0 0 1 .971.425" clip-rule="evenodd" />
                </svg>
                <p class="text-start text-sm text-gray-800 w-full">Potencial Adquisición</p>
            </div>
            <div id="encargos-noticiacontainer" class="flex flex-row items-center justify-start w-full gap-3 px-2">
                <svg class="text-red-700" xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 20 20">
                    <path fill="currentColor" d="M2.93 17.07A10 10 0 1 1 17.07 2.93A10 10 0 0 1 2.93 17.07M9 5v6h2V5zm0 8v2h2v-2z" />
                </svg>
                <p class="text-start text-sm text-gray-800 w-full">Noticia</p>
            </div>
            <div id="encargos-encargocontainer" class="hidden flex-row items-center justify-start w-full gap-3 px-2">
                <svg class="text-red-700" xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 20 20">
                    <path fill="currentColor" d="M2 3a1 1 0 0 1 2 0h13a1 1 0 1 1 0 2H4v12.5a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5v7a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 5 13.5zm3 7a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-2.55a1 1 0 0 0-.336-.748L11.332 8.13a.5.5 0 0 0-.664 0L8.336 10.2a1 1 0 0 0-.336.75z" />
                </svg>
                <p class="text-start text-sm text-gray-800 w-full">Encargo</p>
            </div>
            <div id="encargos-responsablecontainer" class="flex flex-col items-center justify-start w-full gap-3 px-2">
                <p class="text-center text-sm text-gray-800 w-full">Responsable:</p>
                <p class="text-center text-sm text-gray-800 w-full -mt-3" id="encargos-responsable-texto"></p>
            </div>
        </div>
        <div class="relative hidden flex-col justify-center items-center w-1/2 py-4 pt-10 px-2 gap-3 bg-blue-400 bg-opacity-15 rounded-lg h-full" id="encargos-extrainfocontainer-2-edit">
            <div class="absolute top-1 right-1 text-rose-800 hover:text-rose-500 hover:cursor-pointer" onclick="encargoshideEditTwo()">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m15.75 15l-6-6m0 6l6-6m7 3c0-5.523-4.477-10-10-10s-10 4.477-10 10s4.477 10 10 10s10-4.477 10-10" color="currentColor" />
                </svg>
            </div>
            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 hover:bg-slate-100" name="encargostipo" id="encargos-categoria-edit">
                <option value="Vacio">Vacío</option>
                <option value="Inquilino">Inquilino</option>
                <option value="Propietario">Propietario</option>
            </select>
            <div class="flex flex-row items-center justify-center w-full">
                <input type="checkbox" id="encargos-potencialAdquisicionEdit" class="h-7 w-7" name="encargospotencialAdquisicion">
                <label for="potencialAdquisicion">Potencial Adquisición</label>
            </div>
            <div class="flex flex-row items-center justify-center w-full">
                <select name="encargosresponsable" id="encargos-responsable-edit" class="w-[95%] h-[30px] bg-gray-50 rounded-lg border-2 border-gray-300">
                </select>
            </div>
            <button class="bg-emerald-500 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer" type="button" id="encargos-edit-button" onclick="encargosupdateEditTwo()">Editar</button>
            <input type="hidden" value="" id="encargos-edit-more-info">
        </div>
    </div>
    <div id="encargos-comentarios-container" class="flex flex-col justify-center items-center w-full text-center gap-4 mt-4 pt-2">
        <div class=" flex flex-row justify-center items-center w-full gap-4 py-2 bg-blue-500 rounded-xl hover:bg-blue-800 hover:cursor-pointer" onclick="encargostoggleDesplegarFunction()">
            <h1 class="text-base font-sans text-white">Comentarios</h1>
            <svg class="block text-white" id="encargos-arrow-down" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10l5 5m0 0l5-5" />
            </svg>
            <svg class="text-white hidden" id="encargos-arrow-up" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m17 14l-5-5m0 0l-5 5" />
            </svg>
        </div>

        <div id="encargos-comentarios-database-container" class="w-full hidden flex-col justify-center items-center gap-4"></div>
        <div class="hidden post flex-col items-center justify-center w-[100%] gap-3" id="encargos-form-insertar-comentario">
            <input type="hidden" name="encargosform_id" value="" id="encargos-form_id">
            <h1 class="text-sm text-gray-800">Añade un comentario:</h1>
            <textarea class="w-[100%] h-20 bg-gray-100 rounded-lg border-2 border-gray-300 p-3" name="encargoscomentario" placeholder="Comentario" id="encargos-comentarioTextarea"></textarea>
        </div>

    </div>
    <div id="encargos-noticias-container" class="flex flex-col justify-center items-center w-full text-center gap-4 mt-4 pt-2">
        <div class=" flex flex-row justify-center items-center w-full gap-4 py-2 bg-blue-500 rounded-xl hover:bg-blue-800 hover:cursor-pointer" onclick="encargostoggleDesplegarNoticias()">
            <h1 class="text-base font-sans text-white">Noticias</h1>
            <svg class="block text-white" id="encargos-arrow-down-noticias" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10l5 5m0 0l5-5" />
            </svg>
            <svg class="text-white hidden" id="encargos-arrow-up-noticias" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m17 14l-5-5m0 0l-5 5" />
            </svg>
        </div>

        <div id="encargos-agregar-noticia-container" class="w-full border border-green-600 bg-green-100 rounded-md hidden flex-col justify-center items-center h-auto" onclick="encargosagregarNoticiaButton()">
            <svg class="text-green-700 my-1" xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M7.007 12a.75.75 0 0 1 .75-.75h3.493V7.757a.75.75 0 0 1 1.5 0v3.493h3.493a.75.75 0 1 1 0 1.5H12.75v3.493a.75.75 0 0 1-1.5 0V12.75H7.757a.75.75 0 0 1-.75-.75" />
                <path fill="currentColor" fill-rule="evenodd" d="M7.317 3.769a42.502 42.502 0 0 1 9.366 0c1.827.204 3.302 1.643 3.516 3.48c.37 3.157.37 6.346 0 9.503c-.215 1.837-1.69 3.275-3.516 3.48a42.5 42.5 0 0 1-9.366 0c-1.827-.205-3.302-1.643-3.516-3.48a40.903 40.903 0 0 1 0-9.503c.214-1.837 1.69-3.276 3.516-3.48m9.2 1.49a41.001 41.001 0 0 0-9.034 0A2.486 2.486 0 0 0 5.29 7.424a39.402 39.402 0 0 0 0 9.154a2.486 2.486 0 0 0 2.193 2.164c2.977.332 6.057.332 9.034 0a2.486 2.486 0 0 0 2.192-2.164a39.401 39.401 0 0 0 0-9.154a2.486 2.486 0 0 0-2.192-2.163" clip-rule="evenodd" />
            </svg>
        </div>

        <div id="encargos-agregar-noticia-container-edit" class="hidden w-full border border-cyan-700 bg-cyan-50 bg-opacity-30 rounded-md flex-col justify-start items-center h-auto py-5 relative">
            <div id="encargoshideNoticiaModoEdicion" class="absolute top-1 right-1 text-rose-800 hover:text-rose-500 hover:cursor-pointer" onclick="encargoshideNoticiaModoEdicion()">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m15.75 15l-6-6m0 6l6-6m7 3c0-5.523-4.477-10-10-10s-10 4.477-10 10s4.477 10 10 10s10-4.477 10-10" color="currentColor" />
                </svg>
            </div>
            <h2 class=" text-xl font-bold text-slate-800" id="encargos-h2-agregar-noticia">Añadir noticia</h2>
            <div id="encargos-selectioncontainer-1" class="flex flex-col items-center justify-center w-full gap-3 px-2 pt-3">
                <p class="text-base text-slate-800">Tipo Piso en Venta</p>
                <div class="flex flex-row items-center justify-center w-full gap-3 px-2 ">
                    <label>
                        <input type="radio" name="encargospv-pva" value="PV" id="encargos-PV" required>
                        PV
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="encargospv-pva" value="PVA" id="encargos-PVA" required>
                        PVA
                    </label>
                </div>
            </div>
            <div class="border-[0.5px] border-slate-500 w-[80%] h-0 mt-2"></div>
            <div id="encargos-selectioncontainer-2" class="flex flex-col items-center justify-center w-full gap-3 px-2 pt-3">
                <p class="text-base text-slate-800">Valoración</p>
                <div class="flex flex-row items-center justify-center w-full gap-3 px-2 ">
                    <label>
                        <input type="radio" name="encargosvaloracion" value="1" id="encargos-radiosi" required>
                        SÍ
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="encargosvaloracion" value="0" id="encargos-radiono" required>
                        NO
                    </label>


                </div>
                <label class="flex flex-col items-center justify-center w-full gap-3 px-2 text-sm pb-2">
                    Valoración establecida
                    <input type="number" name="encargosvaloracion-text" id="encargos-valoracion-text" value="" placeholder="Introduzca valoración" required class="w-[60%] h-[25px] bg-gray-50 rounded-lg border-2 border-gray-300 p-3">
                </label>

            </div>
            <div class="border-[0.5px] border-slate-500 w-[80%] h-0 mt-2"></div>
            <div id="encargos-selectioncontainer-3" class="flex flex-col items-center justify-center w-full gap-3 px-2 pt-3 pb-3">
                <p class="text-base text-slate-800">Fecha</p>
                <div class="flex flex-row items-center justify-center w-full gap-3 px-2 ">
                    <input type="date" name="encargosfecha-text" value="" id="encargos-fecha-text" placeholder="Introduzca fecha" required class="w-[60%] h-[25px] bg-gray-50 rounded-lg border-2 border-gray-300 p-3">
                </div>
            </div>
            <div class="border-[0.5px] border-slate-500 w-[80%] h-0 mt-2"></div>
            <div id="encargos-selectioncontainer-4" class="flex flex-col items-center justify-center w-full gap-3 px-2 pt-3 pb-3">
                <p class="text-base text-slate-800">Prioridad</p>
                <div class="flex flex-row items-center justify-center w-full gap-3 px-2 ">
                    <label>
                        <input type="radio" name="encargosprioridad" value="Alta" id="encargos-alta" required>
                        Alta
                    </label>
                    <label>
                        <input type="radio" name="encargosprioridad" value="Media" id="encargos-media" required>
                        Media
                    </label>
                    <label>
                        <input type="radio" name="encargosprioridad" value="Baja" id="encargos-baja" required>
                        Baja
                    </label>
                </div>
            </div>
            <div class="border-[0.5px] border-slate-500 w-[80%] h-0 mt-2"></div>
            <div id="encargos-selectioncontainer-5" class="flex flex-col items-center justify-center w-full gap-3 px-2 pt-3 pb-4">
                <p class="text-base text-slate-800">Comercial</p>
                <select name="encargoscomercial" id="encargos-agregar-noticia-edit-comercial" class="w-[60%] h-[25px] bg-gray-50 rounded-lg border-2 border-gray-300">
                </select>
            </div>
            <button class="flex bg-emerald-700 hover:bg-emerald-300 text-white font-bold py-2 px-4 rounded hover:cursor-pointer" type="button" id="encargos-edit-button-noticia" onclick="encargosagregarNoticiaSQL()">Añadir</button>
            <button class="flex bg-emerald-700 hover:bg-emerald-300 text-white font-bold py-2 px-4 rounded hover:cursor-pointer" type="button" id="encargos-edit-button-noticia-editar" onclick="encargosupdateNoticia()">Editar</button>
            <button class="flex bg-red-700 hover:bg-red-300 text-white font-bold py-2 px-4 rounded hover:cursor-pointer mt-3" type="button" id="encargos-edit-button-noticia-eliminar" onclick="encargosdeleteNoticia()">Eliminar</button>
            <input type="hidden" value="" id="encargos-agregar-noticia-edit-more-info">
        </div>

        <div id="encargos-noticia-database-container" class="hidden w-full border border-cyan-700 bg-cyan-50 bg-opacity-30 rounded-md flex-col justify-start items-center h-auto py-5 relative">
            <div class="absolute top-1 right-1 text-emerald-800 hover:text-emerald-500 hover:cursor-pointer" onclick="encargosshowNoticiaModoEdicion()">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                        <path d="M9.533 11.15A1.823 1.823 0 0 0 9 12.438V15h2.578c.483 0 .947-.192 1.289-.534l7.6-7.604a1.822 1.822 0 0 0 0-2.577l-.751-.751a1.822 1.822 0 0 0-2.578 0z" />
                        <path d="M21 12c0 4.243 0 6.364-1.318 7.682C18.364 21 16.242 21 12 21c-4.243 0-6.364 0-7.682-1.318C3 18.364 3 16.242 3 12c0-4.243 0-6.364 1.318-7.682C5.636 3 7.758 3 12 3" />
                    </g>
                </svg>
            </div>
            <div id="encargos-container-noticia-data" class0="flex flex-col items-center justify-center w-full px-2 pt-3">
                <p class="py-2" id="encargos-noticia-fecha-texto" class="text-sm text-gray-800 absolute top-1.5 left-1.5 italic"></p>
                <p class="py-2" id="encargos-tipoPVA-texto"></p>
                <p class="py-2" id="encargos-valoracion-texto"></p>
                <p class="py-2 flex flex-row items-center justify-center" id="encargos-valoracionestablecida-texto"></p>
                <p class="py-2" id="encargos-prioridad-texto"></p>
                <p class="py-2" id="encargos-comercial-texto"></p>

            </div>

        </div>
    </div>

    <!-- ENCARGOS HTML -->
    <div id="encargos-encargos-container" class="hidden flex-col justify-center items-center w-full text-center gap-4 mt-4 pt-2">
        <div class="flex flex-row justify-center items-center w-full gap-4 py-2 bg-blue-500 rounded-xl hover:bg-blue-800 hover:cursor-pointer" onclick="encargostoggleDesplegarEncargos()">
            <h1 class="text-base font-sans text-white">Encargos</h1>
            <svg class="block text-white" id="encargos-arrow-down-encargos" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10l5 5m0 0l5-5" />
            </svg>
            <svg class="text-white hidden" id="encargos-arrow-up-encargos" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m17 14l-5-5m0 0l-5 5" />
            </svg>
        </div>
        <!-- AGREGAR ENCARGOS CONTAINER -->
        <div id="encargos-agregar-encargo-container" class="w-full border border-green-600 bg-green-100 rounded-md hidden flex-col justify-center items-center h-auto" onclick="encargosagregarEncargoButton()">
            <svg class="text-green-700 my-1" xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M7.007 12a.75.75 0 0 1 .75-.75h3.493V7.757a.75.75 0 0 1 1.5 0v3.493h3.493a.75.75 0 1 1 0 1.5H12.75v3.493a.75.75 0 0 1-1.5 0V12.75H7.757a.75.75 0 0 1-.75-.75" />
                <path fill="currentColor" fill-rule="evenodd" d="M7.317 3.769a42.502 42.502 0 0 1 9.366 0c1.827.204 3.302 1.643 3.516 3.48c.37 3.157.37 6.346 0 9.503c-.215 1.837-1.69 3.275-3.516 3.48a42.5 42.5 0 0 1-9.366 0c-1.827-.205-3.302-1.643-3.516-3.48a40.903 40.903 0 0 1 0-9.503c.214-1.837 1.69-3.276 3.516-3.48m9.2 1.49a41.001 41.001 0 0 0-9.034 0A2.486 2.486 0 0 0 5.29 7.424a39.402 39.402 0 0 0 0 9.154a2.486 2.486 0 0 0 2.193 2.164c2.977.332 6.057.332 9.034 0a2.486 2.486 0 0 0 2.192-2.164a39.401 39.401 0 0 0 0-9.154a2.486 2.486 0 0 0-2.192-2.163" clip-rule="evenodd" />
            </svg>
        </div>
        <!-- AGREGAR ENCARGOS CONTAINER EDIT -->
        <div id="encargos-agregar-encargo-container-edit" class="hidden w-full border border-cyan-700 bg-cyan-50 bg-opacity-30 rounded-md flex-col justify-start items-center h-auto py-5 relative">
            <div id="encargoshideEncargoModoEdicion" class="absolute top-1 right-1 text-rose-800 hover:text-rose-500 hover:cursor-pointer" onclick="encargoshideEncargoModoEdicion()">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m15.75 15l-6-6m0 6l6-6m7 3c0-5.523-4.477-10-10-10s-10 4.477-10 10s4.477 10 10 10s10-4.477 10-10" color="currentColor" />
                </svg>
            </div>
            <h2 class=" text-xl font-bold text-slate-800" id="encargos-h2-agregar-encargo">Añadir encargo</h2>

            <div id="encargos-selectioncontainer-1-encargo" class="flex flex-col items-center justify-center w-full gap-3 px-2 pt-3">
                <p class="text-base text-slate-800">Tipo de Encargo</p>
                <div class="flex flex-row items-center justify-center w-full gap-3 px-2 ">
                    <label>
                        <input type="radio" name="encargostipo-encargo" value="VENTA" id="encargos-VENTA-encargo" required>
                        VENTA
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="encargostipo-encargo" value="ALQUILER" id="encargos-ALQUILER-encargo" required>
                        ALQUILER
                    </label>
                </div>
            </div>
            <div class="border-[0.5px] border-slate-500 w-[80%] h-0 mt-2"></div>
            <div id="encargos-selectioncontainer-2-encargo" class="flex flex-col items-center justify-center w-full gap-3 px-2 pt-3 pb-4">
                <p class="text-base text-slate-800">Cliente</p>
                <select name="encargoscliente" id="encargos-agregar-encargo-edit-cliente" class="w-[60%] h-[25px] bg-gray-50 rounded-lg border-2 border-gray-300">
                </select>
            </div>
            <div class="border-[0.5px] border-slate-500 w-[80%] h-0 mt-2"></div>
            <div id="encargos-selectioncontainer-3-encargo" class="flex flex-col items-center justify-center w-full gap-3 px-2 pt-3">
                <p class="text-base text-slate-800">Precio</p>
                <div class="flex flex-row items-center justify-center w-full gap-3 px-2 ">
                    <input type="number" name="encargosprecio-encargo" id="encargos-precio-encargo" value="" placeholder="Introduzca precio" required class="w-[60%] h-[25px] bg-gray-50 rounded-lg border-2 border-gray-300 p-3">
                </div>
            </div>
            <div class="border-[0.5px] border-slate-500 w-[80%] h-0 mt-2"></div>
            <div id="encargos-selectioncontainer-4-encargo" class="flex flex-col items-center justify-center w-full gap-3 px-2 pt-3 pb-3">
                <p class="text-base text-slate-800">Tipo de Comisión</p>
                <div class="flex flex-row items-center justify-center w-full gap-3 px-2 ">
                    <label>
                        <input type="radio" name="encargostipo-comision" value="FIJO" id="encargos-FIJO-encargo" required>
                        FIJO
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="encargostipo-comision" value="PORCENTAJE" id="encargos-PORCENTAJE-encargo" required>
                        PORCENTAJE
                    </label>
                </div>
            </div>
            <div class="border-[0.5px] border-slate-500 w-[80%] h-0 mt-2"></div>
            <div id="encargos-selectioncontainer-5-encargo" class="flex flex-col items-center justify-center w-full gap-3 px-2 pt-3 pb-3">
                <p class="text-base text-slate-800">Comisión</p>
                <div class="flex flex-row items-center justify-center w-full gap-3 px-2 ">
                    <input type="number" name="encargoscomision-encargo" id="encargos-comision-encargo" value="" placeholder="Introduzca comisión" required class="w-[60%] h-[25px] bg-gray-50 rounded-lg border-2 border-gray-300 p-3">
                </div>
            </div>
            <div class="border-[0.5px] border-slate-500 w-[80%] h-0 mt-2"></div>
            <div id="encargos-selectioncontainer-6-encargo" class="flex flex-col items-center justify-center w-full gap-3 px-2 pt-3 pb-4">
                <p class="text-base text-slate-800">Comercial</p>
                <select name="encargoscomercial" id="encargos-agregar-encargo-edit-comercial" class="w-[60%] h-[25px] bg-gray-50 rounded-lg border-2 border-gray-300">
                </select>
            </div>
            <div id="encargos-selectioncontainer-7-encargo" class="flex flex-col items-center justify-center w-full gap-3 px-2 pt-3 pb-4">
                <p class="text-base text-slate-800">Fecha</p>
                <div class="flex flex-row items-center justify-center w-full gap-3 px-2 ">
                    <input type="date" name="encargosfecha-encargo" value="" id="encargos-fecha-encargo" placeholder="Fecha" required class="w-[60%] h-[25px] bg-gray-50 rounded-lg border-2 border-gray-300 p-3">
                </div>
            </div>


            <button class="flex bg-emerald-700 hover:bg-emerald-300 text-white font-bold py-2 px-4 rounded hover:cursor-pointer" type="button" id="encargos-edit-button-encargo" onclick="encargosagregarEncargoSQL()">Añadir</button>
            <button class="flex bg-emerald-700 hover:bg-emerald-300 text-white font-bold py-2 px-4 rounded hover:cursor-pointer" type="button" id="encargos-edit-button-encargo-editar" onclick="encargosupdateEncargo()">Editar</button>
            <button class="flex bg-red-700 hover:bg-red-300 text-white font-bold py-2 px-4 rounded hover:cursor-pointer mt-3" type="button" id="encargos-edit-button-encargo-eliminar" onclick="encargosdeleteEncargo()">Eliminar</button>
            <input type="hidden" value="" id="encargos-agregar-encargo-edit-more-info">
        </div>
        <!-- ENCARGOS DATABASE CONTAINER -->
        <div id="encargos-encargo-database-container" class="hidden w-full border border-cyan-700 bg-cyan-50 bg-opacity-30 rounded-md flex-col justify-start items-center h-auto py-5 relative">
            <div class="absolute top-1 right-1 text-emerald-800 hover:text-emerald-500 hover:cursor-pointer" onclick="encargosshowEncargoModoEdicion()">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                        <path d="M9.533 11.15A1.823 1.823 0 0 0 9 12.438V15h2.578c.483 0 .947-.192 1.289-.534l7.6-7.604a1.822 1.822 0 0 0 0-2.577l-.751-.751a1.822 1.822 0 0 0-2.578 0z" />
                        <path d="M21 12c0 4.243 0 6.364-1.318 7.682C18.364 21 16.242 21 12 21c-4.243 0-6.364 0-7.682-1.318C3 18.364 3 16.242 3 12c0-4.243 0-6.364 1.318-7.682C5.636 3 7.758 3 12 3" />
                    </g>
                </svg>
            </div>
            <div id="encargos-container-encargo-database" class0="flex flex-col items-center justify-center w-full px-2 pt-3">
                <p class="py-2" id="encargos-encargo-fecha-texto" class="text-sm text-gray-800 absolute top-1.5 left-1.5 italic"></p>
                <p class="py-2" id="encargos-encargo-tipo-texto"></p>
                <p class="py-2" id="encargos-encargo-cliente-texto"></p>
                <p class="py-2" id="encargos-encargo-precio1-texto"></p>
                <p class="py-2" id="encargos-encargo-precio2-texto"></p>
                <p class="py-2" id="encargos-encargo-comision-texto"></p>
                <p class="py-2" id="encargos-encargo-comercial-texto"></p>
            </div>

        </div>
    </div>


    <input type="hidden" value="" id="encargos-hidden-id">
    <input type="hidden" value="" id="encargos-responsable-edit-hidden">
    <input type="hidden" value="" id="encargos-hidden-noticiastate">
    <input type="hidden" value="" id="encargos-hidden-encargostate">
    <input type="hidden" value="" id="encargos-admin-power">
</body>
<script>
    var encargosisDesplegar = true // Variable to track the current function
    var encargosisDesplegarNoticias = true;
    var encargosisDesplegarEncargos = true;


    function encargosfetchMoreInfo() {
        encargosisDesplegar = true;
        encargosisDesplegarNoticias = true;
        encargosisDesplegarEncargos = true;
        const editMoreInfo = document.getElementById("encargos-edit-more-info");
        const id = editMoreInfo.value;
        const tipo = document.getElementById("encargos-tipo");
        const uso = document.getElementById("encargos-uso");
        const superficie = document.getElementById("encargos-superficie");
        const ano_construccion = document.getElementById("encargos-ano");
        const potencialAdquisicion = document.getElementById("encargos-potencialAdquisicion");
        const categoria = document.getElementById("encargos-categoria");
        const encargosContainer = document.getElementById("encargos-enargos-container");
        potencialAdquisicion.classList.remove("flex");
        potencialAdquisicion.classList.add("hidden");



        tipo.textContent = "";
        uso.textContent = "";
        superficie.textContent = "";
        ano_construccion.textContent = "";
        categoria.textContent = "";
        fetch(`inmueblemoreinfo.php?id=${id}`)
            .then(response => response.json())
            .then(databuscador => {
                const hiddennoticiastate = document.getElementById("encargos-hidden-noticiastate");
                hiddennoticiastate.value = databuscador.inmueble.noticiastate;
                const noticiastate = hiddennoticiastate.value;
                const hiddenencargostate = document.getElementById("encargos-hidden-encargostate");
                hiddenencargostate.value = databuscador.inmueble.encargoState;
                const encargostate = hiddenencargostate.value;
                const tipoPVAtexto = document.getElementById("encargos-tipoPVA-texto");
                const valoraciontexto = document.getElementById("encargos-valoracion-texto");
                const valoracionestablecidatexto = document.getElementById("encargos-valoracionestablecida-texto");
                const noticiafechatexto = document.getElementById("encargos-noticia-fecha-texto");
                const prioridadtexto = document.getElementById("encargos-prioridad-texto");
                const comercialtexto = document.getElementById("encargos-comercial-texto");
                const encargosContainer = document.getElementById("encargos-encargos-container");



                tipoPVAtexto.textContent = "";
                valoraciontexto.textContent = "";
                valoracionestablecidatexto.textContent = "";
                noticiafechatexto.textContent = "";
                prioridadtexto.textContent = "";
                comercialtexto.textContent = "";
                if (noticiastate === '1') {
                    console.log("Fetching noticias...", id);
                    fetch(`noticiasfetch.php?id=${id}`)
                        .then(response => response.json())
                        .then(data => {
                            console.log("Fetched data:", data);
                            if (data.tipo_PV === 'PV') {
                                tipoPVAtexto.innerHTML = data.tipo_PV + "</br>Piso en Venta";
                            } else if (data.tipo_PV === 'PVA') {
                                tipoPVAtexto.innerHTML = data.tipo_PV + "</br>Piso en Venta con Anterioridad";
                            }
                            console.log("data.valoracion:", data.valoracion);
                            if (data.valoracion == '1') {
                                valoraciontexto.innerHTML = "¿Valorado?<br>SÍ";
                                valoracionestablecidatexto.classList.remove("hidden");
                                valoracionestablecidatexto.classList.add("flex");
                                valoracionestablecidatexto.innerHTML = "Valoración establecida:<br>" + data.valoracion_establecida + "€";
                            } else if (data.valoracion == '0') {
                                valoraciontexto.innerHTML = "¿Valorado?<br>NO";
                                valoracionestablecidatexto.classList.remove("flex");
                                valoracionestablecidatexto.classList.add("hidden");
                            }
                            const fechaFormateada = formatDate(data.noticia_fecha);
                            noticiafechatexto.textContent = fechaFormateada
                            prioridadtexto.innerHTML = "Prioridad:<br>" + data.prioridad;
                            comercialtexto.innerHTML = "Comercial:<br>" + data.comercial_noticia;
                        })
                        .catch(error => {
                            console.error("Error fetching data:", error);
                        });
                    const noticiacontanier = document.getElementById("encargos-noticiacontainer");
                    const agregarnoticiacontainer = document.getElementById("encargos-agregar-noticia-container");
                    const agregarnoticiacontaineredit = document.getElementById("encargos-agregar-noticia-container-edit");
                    noticiacontanier.classList.remove("hidden");
                    noticiacontanier.classList.add("flex");
                    agregarnoticiacontaineredit.classList.remove("flex");
                    agregarnoticiacontaineredit.classList.add("hidden");

                    encargosContainer.classList.remove("hidden");
                    encargosContainer.classList.add("flex");
                } else if (noticiastate === '0') {
                    const noticiacontanier = document.getElementById("encargos-noticiacontainer");
                    noticiacontanier.classList.remove("flex");
                    noticiacontanier.classList.add("hidden");
                    encargosContainer.classList.remove("flex");
                    encargosContainer.classList.add("hidden");
                }

                if (encargostate === '1') {
                    const encargofecha = document.getElementById("encargos-encargo-fecha-texto");
                    encargofecha.textContent = "";
                    const encargotipotexto = document.getElementById("encargos-encargo-tipo-texto");
                    encargotipotexto.textContent = "";
                    const encargocliente = document.getElementById("encargos-encargo-cliente-texto");
                    encargocliente.textContent = "";
                    const encargoprecio = document.getElementById("encargos-encargo-precio1-texto");
                    encargoprecio.textContent = "";
                    const encargoprecio2 = document.getElementById("encargos-encargo-precio2-texto");
                    encargoprecio2.textContent = "";
                    const encargocomision = document.getElementById("encargos-encargo-comision-texto");
                    encargocomision.textContent = "";
                    const encargocomercial = document.getElementById("encargos-encargo-comercial-texto");
                    encargocomercial.textContent = "";
                    const encargocontainer = document.getElementById("encargos-encargocontainer");
                    encargocontainer.classList.remove("hidden");
                    encargocontainer.classList.add("flex");
                    axios.get(`encargosfetch.php?id=${id}`)
                        .then(function(response) {
                            console.log(response.data);
                            const encargoFechaFormateada = formatDate(response.data.encargo_fecha);
                            encargofecha.innerHTML = 'Fecha: ' + '<br>' + encargoFechaFormateada;
                            encargotipotexto.innerHTML = 'Tipo de Encargo: ' + '<br>' + response.data.tipo_encargo;
                            const clienteID = response.data.cliente_id;
                            console.log('clienteID', clienteID);
                            axios.get(`seleccionaClienteID.php?cliente_id=${clienteID}`)
                                .then(response => {
                                    const cliente = response.data;
                                    cliente.forEach(cliente => {
                                        console.log(cliente);
                                        encargocliente.innerHTML = 'Cliente: ' + '<br>' + cliente.nombrecompleto_cliente;
                                    });
                                })
                                .catch(error => {
                                    console.error('Error fetching data:', error);
                                });

                            encargoprecio.innerHTML = 'Precio: ' + '<br>' + response.data.precio_1 + '€';

                            if (response.data.tipo_comision_encargo === 'PORCENTAJE') {
                                encargocomision.innerHTML = 'Comisión: ' + '<br>' + response.data.comision_encargo + '%';
                            } else if (response.data.tipo_comision_encargo === 'FIJO') {
                                encargocomision.innerHTML = 'Comisión: ' + '<br>' + response.data.comision_encargo + '€';
                            }

                            if (response.data.precio_2 === null) {
                                encargoprecio2.classList.add("hidden");
                                encargoprecio2.innerHTML = "";

                            } else {
                                encargoprecio2.classList.remove("hidden");
                                encargoprecio2.innerHTML = 'Inmueble Rebajado: ' + '<br>' + response.data.precio_2 + '€';
                            }

                            encargocomercial.innerHTML = 'Comercial: ' + '<br>' + response.data.comercial_encargo;

                        })
                        .catch(function(error) {
                            console.error('Error:', error);
                        });

                    const agregarencargocontainer = document.getElementById("encargos-agregar-encargo-container");
                    agregarencargocontainer.classList.remove("flex");
                    agregarencargocontainer.classList.add("hidden");

                } else {
                    const encargodatabasecontainer = document.getElementById("encargos-encargo-database-container");
                    encargodatabasecontainer.classList.remove("flex");
                    encargodatabasecontainer.classList.add("hidden");
                    const encargocontainer = document.getElementById("encargos-encargocontainer");
                    encargocontainer.classList.remove("flex");
                    encargocontainer.classList.add("hidden");
                }
                const responsabletexto = document.getElementById("encargos-responsable-texto");
                if (databuscador.inmueble.responsable === null) {
                    responsabletexto.innerHTML = "No definido";
                } else {
                    responsabletexto.textContent = databuscador.inmueble.responsable;
                }



                const tipoEdit = document.getElementById("encargos-tipo-edit");
                const usoEdit = document.getElementById("encargos-uso-edit");
                const superficieEdit = document.getElementById("encargos-superficie-edit");
                const anoEdit = document.getElementById("encargos-ano-edit");
                const categoriaEdit = document.getElementById("encargos-categoria-edit");
                categoriaEdit.value = databuscador.inmueble.categoria;
                categoriaEdit.placeholder = databuscador.inmueble.categoria;




                // Potencial Adquisicion if statement
                const potencialAdquisicion = document.getElementById("encargos-potencialAdquisicion");
                const potencialAdquisicionEdit = document.getElementById("encargos-potencialAdquisicionEdit");

                if (databuscador.inmueble.potencialAdquisicion === 0) {
                    console.log("Value is 0");
                    if (potencialAdquisicion && potencialAdquisicionEdit) {
                        potencialAdquisicion.classList.remove("flex");
                        potencialAdquisicion.classList.add("hidden");
                        potencialAdquisicionEdit.checked = false;
                    }
                } else {
                    console.log("Value is not 0");
                    if (potencialAdquisicion && potencialAdquisicionEdit) {
                        potencialAdquisicion.classList.remove("hidden");
                        potencialAdquisicion.classList.add("flex");
                        potencialAdquisicionEdit.checked = true;
                    }
                }


                tipoEdit.value = databuscador.inmueble.tipo;
                tipoEdit.placeholder = databuscador.inmueble.tipo;
                usoEdit.value = databuscador.inmueble.uso;
                usoEdit.placeholder = databuscador.inmueble.uso;
                superficieEdit.value = databuscador.inmueble.superficie;
                superficieEdit.placeholder = databuscador.inmueble.superficie;
                anoEdit.value = databuscador.inmueble.ano_construccion;
                anoEdit.placeholder = databuscador.inmueble.ano_construccion;

                const tipo = document.getElementById("encargos-tipo");
                const uso = document.getElementById("encargos-uso");
                const superficie = document.getElementById("encargos-superficie");
                const ano_construccion = document.getElementById("encargos-ano");
                tipo.textContent = databuscador.inmueble.tipo;
                uso.textContent = databuscador.inmueble.uso;
                superficie.textContent = databuscador.inmueble.superficie;
                ano_construccion.textContent = databuscador.inmueble.ano_construccion;


                const categoria = document.getElementById("encargos-categoria");
                const categoriaContainer = document.getElementById("encargos-categoriacontainer");
                categoria.textContent = "";


                const inquilinoPhoto = document.getElementById("encargos-inquilino-photo");
                const propietarioPhoto = document.getElementById("encargos-propietario-photo");
                const vacioPhoto = document.getElementById("encargos-vacio-photo");
                if (databuscador.inmueble.categoria === "Inquilino") {
                    categoriaContainer.classList.remove("hidden");
                    categoriaContainer.classList.add("flex");
                    categoria.classList.remove("hidden");
                    categoria.classList.add("flex");
                    inquilinoPhoto.classList.remove("hidden");
                    inquilinoPhoto.classList.add("block");
                    propietarioPhoto.classList.add("hidden");
                    vacioPhoto.classList.add("hidden");
                    categoria.innerHTML = "Inquilino";

                } else if (databuscador.inmueble.categoria === "Propietario") {
                    categoriaContainer.classList.remove("hidden");
                    categoriaContainer.classList.add("flex");
                    categoria.classList.remove("hidden");
                    categoria.classList.add("flex");
                    inquilinoPhoto.classList.add("hidden");
                    propietarioPhoto.classList.remove("hidden");
                    propietarioPhoto.classList.add("block");
                    vacioPhoto.classList.add("hidden");
                    categoria.innerHTML = "Propietario";
                } else if (databuscador.inmueble.categoria === "Vacio") {
                    categoriaContainer.classList.remove("hidden");
                    categoriaContainer.classList.add("flex");
                    categoria.classList.remove("hidden");
                    categoria.classList.add("flex");
                    inquilinoPhoto.classList.add("hidden");
                    propietarioPhoto.classList.add("hidden");
                    vacioPhoto.classList.remove("hidden");
                    vacioPhoto.classList.add("block");
                    categoria.innerHTML = "Vacio";
                } else if (databuscador.inmueble.categoria === null) {
                    categoriaContainer.classList.remove("flex");
                    categoriaContainer.classList.add("hidden");
                    categoria.classList.remove("flex");
                    categoria.classList.add("hidden");
                    inquilinoPhoto.classList.add("hidden");
                    propietarioPhoto.classList.add("hidden");
                    vacioPhoto.classList.add("hidden");
                }

                const agregarnoticiacontaneredit = document.getElementById("encargos-agregar-noticia-container-edit");
                if (databuscador.inmueble.noticiastate === 1) {
                    encargosagregarNoticiaButton();
                    agregarnoticiacontaneredit.classList.remove("flex");
                    agregarnoticiacontaneredit.classList.add("hidden");
                }

                const responsableEditHidden = document.getElementById("encargos-responsable-edit-hidden");
                const responsablenombre = databuscador.inmueble.responsable;
                responsableEditHidden.value = responsablenombre;

                encargoshideLoadingScreenMoreInfo();
            });
    }

    function encargoscerrrar() {
        const moreInfoContainer = document.getElementById("encargos-more-info-container");
        moreInfoContainer.classList.remove("flex");
        moreInfoContainer.classList.add("hidden");
        encargosplegarNoticias();
        encargosplegar();
        encargosplegarEncargos();
        encargosshowLoadingScreenMoreInfo()
        encargosisDesplegar = true;
        encargosisDesplegarNoticias = true;
        encargosisDesplegarEncargos = true;
    }


    function encargostoggleDesplegarFunction() {
        if (encargosisDesplegar) {
            encargosdesplegar(); // Call desplegar() if it's currently active
        } else {
            encargosplegar(); // Call encargosplegar() if it's currently active
        }
        encargosisDesplegar = !encargosisDesplegar; // Toggle the variable for the next click
    }

    function encargosdesplegar() {
        const comentariosdatabasecontainer = document.getElementById("encargos-comentarios-database-container");
        comentariosdatabasecontainer.classList.remove("hidden");
        comentariosdatabasecontainer.classList.add("flex");

        const formInsertarComentario = document.getElementById("encargos-form-insertar-comentario");
        formInsertarComentario.classList.remove("hidden");
        formInsertarComentario.classList.add("flex");

        const arrowDown = document.getElementById("encargos-arrow-down");
        arrowDown.classList.remove("block");
        arrowDown.classList.add("hidden");

        const arrowUp = document.getElementById("encargos-arrow-up");
        arrowUp.classList.remove("hidden");
        arrowUp.classList.add("block");
    }

    function encargosplegar() {
        const comentariosdatabasecontainer = document.getElementById("encargos-comentarios-database-container");
        comentariosdatabasecontainer.classList.remove("flex");
        comentariosdatabasecontainer.classList.add("hidden");

        const formInsertarComentario = document.getElementById("encargos-form-insertar-comentario");
        formInsertarComentario.classList.remove("flex");
        formInsertarComentario.classList.add("hidden");

        const arrowDown = document.getElementById("encargos-arrow-down");
        arrowDown.classList.remove("hidden");
        arrowDown.classList.add("block");

        const arrowUp = document.getElementById("encargos-arrow-up");
        arrowUp.classList.remove("block");
        arrowUp.classList.add("hidden");
    }


    function encargostoggleDesplegarNoticias() {
        if (encargosisDesplegarNoticias) {
            encargosdesplegarNoticias(); // Call desplegar() if it's currently active
        } else {
            encargosplegarNoticias(); // Call encargosplegar() if it's currently active
        }
        encargosisDesplegarNoticias = !encargosisDesplegarNoticias; // Toggle the variable for the next click
    }


    function encargosdesplegarNoticias() {
        const arrowDown = document.getElementById("encargos-arrow-down-noticias");
        arrowDown.classList.remove("block");
        arrowDown.classList.add("hidden");

        const arrowUp = document.getElementById("encargos-arrow-up-noticias");
        arrowUp.classList.remove("hidden");
        arrowUp.classList.add("block");

        const id = document.getElementById('encargos-hidden-id').value;
        console.log("super mega id:", id);

        const hiddennoticiastate = document.getElementById("encargos-hidden-noticiastate");
        const noticiastate = hiddennoticiastate.value;
        console.log("hiddennoticiastate:", hiddennoticiastate.value);

        const agregarnoticiascontainer = document.getElementById("encargos-agregar-noticia-container");
        const noticiadatabasecontainer = document.getElementById("encargos-noticia-database-container");
        if (noticiastate === "1") {
            agregarnoticiascontainer.classList.remove("flex");
            agregarnoticiascontainer.classList.add("hidden");
            noticiadatabasecontainer.classList.remove("hidden");
            noticiadatabasecontainer.classList.add("flex");

        } else if (noticiastate === "0") {
            agregarnoticiascontainer.classList.remove("hidden");
            agregarnoticiascontainer.classList.add("flex");
        }

    }

    function encargosplegarNoticias() {
        const agregarnoticiascontainer = document.getElementById("encargos-agregar-noticia-container");
        agregarnoticiascontainer.classList.remove("flex");
        agregarnoticiascontainer.classList.add("hidden");

        const agregarnoticiacontaineredit = document.getElementById("encargos-agregar-noticia-container-edit");
        agregarnoticiacontaineredit.classList.remove("flex");
        agregarnoticiacontaineredit.classList.add("hidden");

        const noticiacontanier = document.getElementById("encargos-noticia-database-container");
        noticiacontanier.classList.remove("flex");
        noticiacontanier.classList.add("hidden");

        const arrowDown = document.getElementById("encargos-arrow-down-noticias");
        arrowDown.classList.remove("hidden");
        arrowDown.classList.add("block");

        const arrowUp = document.getElementById("encargos-arrow-up-noticias");
        arrowUp.classList.remove("block");
        arrowUp.classList.add("hidden");
    }

    // TOGGLE DESPLEGAR ENCARGOS
    function encargostoggleDesplegarEncargos() {
        if (encargosisDesplegarEncargos) {
            encargosdesplegarEncargos(); // Call desplegar() if it's currently active
        } else {
            encargosplegarEncargos(); // Call encargosplegar() if it's currently active
        }
        encargosisDesplegarEncargos = !encargosisDesplegarEncargos; // Toggle the variable for the next click
        console.log("Desplegar encargos:", encargosisDesplegarEncargos);
    }


    function encargosdesplegarEncargos() {
        const arrowDown = document.getElementById("encargos-arrow-down-encargos");
        arrowDown.classList.remove("block");
        arrowDown.classList.add("hidden");

        const arrowUp = document.getElementById("encargos-arrow-up-encargos");
        arrowUp.classList.remove("hidden");
        arrowUp.classList.add("block");

        const id = document.getElementById('encargos-hidden-id').value;
        console.log("super mega id:", id);

        const hiddenenecargostate = document.getElementById("encargos-hidden-encargostate");
        const encargostate = hiddenenecargostate.value;
        console.log("hiddenencargostate:", encargostate);

        const agregarencargoscontainer = document.getElementById("encargos-agregar-encargo-container");
        const encargodatabasecontainer = document.getElementById("encargos-encargo-database-container");

        if (encargostate === '1') {
            agregarencargoscontainer.classList.remove("flex");
            agregarencargoscontainer.classList.add("hidden");
            encargodatabasecontainer.classList.remove("hidden");
            encargodatabasecontainer.classList.add("flex");
        } else {
            agregarencargoscontainer.classList.remove("hidden");
            agregarencargoscontainer.classList.add("flex");
            encargodatabasecontainer.classList.remove("flex");
            encargodatabasecontainer.classList.add("hidden");
        }
    }

    function encargosplegarEncargos() {
        const agregarencargoscontainer = document.getElementById("encargos-agregar-encargo-container");
        agregarencargoscontainer.classList.remove("flex");
        agregarencargoscontainer.classList.add("hidden");

        const agregarencargocontaineredit = document.getElementById("encargos-agregar-encargo-container-edit");
        agregarencargocontaineredit.classList.remove("flex");
        agregarencargocontaineredit.classList.add("hidden");

        const encargocontanier = document.getElementById("encargos-encargo-database-container");
        encargocontanier.classList.remove("flex");
        encargocontanier.classList.add("hidden");

        const arrowDown = document.getElementById("encargos-arrow-down-encargos");
        arrowDown.classList.remove("hidden");
        arrowDown.classList.add("block");

        const arrowUp = document.getElementById("encargos-arrow-up-encargos");
        arrowUp.classList.remove("block");
        arrowUp.classList.add("hidden");
    }

    function encargosshowEditOne() {
        const extrainfocontainer = document.getElementById("encargos-extrainfocontainer-1");
        extrainfocontainer.classList.remove("flex");
        extrainfocontainer.classList.add("hidden");

        const extrainfocontaineredit = document.getElementById("encargos-extrainfocontainer-1-edit");
        extrainfocontaineredit.classList.remove("hidden");
        extrainfocontaineredit.classList.add("flex");
        const editMoreInfo = document.getElementById("encargos-edit-more-info");
        console.log("Edit More Info Value:", editMoreInfo.value);

    }

    function encargoshideEditOne() {
        const extrainfocontainer = document.getElementById("encargos-extrainfocontainer-1");
        extrainfocontainer.classList.remove("hidden");
        extrainfocontainer.classList.add("flex");

        const extrainfocontaineredit = document.getElementById("encargos-extrainfocontainer-1-edit");
        extrainfocontaineredit.classList.remove("flex");
        extrainfocontaineredit.classList.add("hidden");
    }

    function encargosshowEditTwo() {
        encargosfetchComercial();
        const extrainfocontainer = document.getElementById("encargos-extrainfocontainer-2");
        extrainfocontainer.classList.remove("flex");
        extrainfocontainer.classList.add("hidden");

        const extrainfocontaineredit = document.getElementById("encargos-extrainfocontainer-2-edit");
        extrainfocontaineredit.classList.remove("hidden");
        extrainfocontaineredit.classList.add("flex");
        const editMoreInfo = document.getElementById("encargos-edit-more-info");
        console.log("Edit More Info Value:", editMoreInfo.value);
    }

    function encargoshideEditTwo() {
        const extrainfocontainer = document.getElementById("encargos-extrainfocontainer-2");
        extrainfocontainer.classList.remove("hidden");
        extrainfocontainer.classList.add("flex");

        const extrainfocontaineredit = document.getElementById("encargos-extrainfocontainer-2-edit");
        extrainfocontaineredit.classList.remove("flex");
        extrainfocontaineredit.classList.add("hidden");
    }

    function encargosupdateEditOne() {
        const tipoEdit = document.getElementById("encargos-tipo-edit");
        const usoEdit = document.getElementById("encargos-uso-edit");
        const superficieEdit = document.getElementById("encargos-superficie-edit");
        const anoEdit = document.getElementById("encargos-ano-edit");
        const editMoreInfo = document.getElementById("encargos-edit-more-info");
        const tipo = tipoEdit.value;
        const uso = usoEdit.value;
        const superficie = superficieEdit.value;
        const ano_construccion = anoEdit.value;
        const id = editMoreInfo.value;
        const loadingScreen = document.getElementById('encargos-loading-screen-moreinfo');
        loadingScreen.classList.remove('hidden');
        loadingScreen.classList.add('flex');


        fetch(`editMoreInfoOne.php?id=${id}&tipo=${tipo}&uso=${uso}&superficie=${superficie}&ano_construccion=${ano_construccion}`)
            .then(response => response.json())
            .then(data => {
                Toastify({
                    text: "Información actualizada",
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
                encargosfetchMoreInfo();
                encargoshideEditOne();
                loadingScreen.classList.remove('flex');
                loadingScreen.classList.add('hidden');
            })
            .catch(error => console.error('Error fetching JSON data:', error));
    }

    function encargosupdateEditTwo() {
        const editMoreInfo = document.getElementById("encargos-edit-more-info");
        id = editMoreInfo.value;

        const categoriaEdit = document.getElementById("encargos-categoria-edit");
        const categoria = categoriaEdit.value;

        const potencialAdquisicionEdit = document.getElementById("encargos-potencialAdquisicionEdit");
        const potencialAdquisicion = potencialAdquisicionEdit.checked ? 1 : 0;
        console.log("Potencial Adquisicion Edit Value:", potencialAdquisicion);

        const responsableEdit = document.getElementById("encargos-responsable-edit");
        const responsable = responsableEdit.value;

        const loadingScreen = document.getElementById('encargos-loading-screen-moreinfo');
        loadingScreen.classList.remove('hidden');
        loadingScreen.classList.add('flex');

        fetch(`editMoreInfoTwo.php?id=${id}&categoria=${categoria}&potencialAdquisicion=${potencialAdquisicion}&responsable=${responsable}`)
            .then(response => response.json())
            .then(data => {
                Toastify({
                    text: "Información actualizada",
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
                encargoshideEditTwo();
                encargosfetchMoreInfo();
                loadingScreen.classList.remove('flex');
                loadingScreen.classList.add('hidden');
            })
            .catch(error => console.error('Error fetching JSON data:', error));

    }

    function encargosfetchComercial() {
        fetch(`seleccionacomercial.php`)
            .then(response => response.json())
            .then(data => {
                const comercialNoticia = document.getElementById('encargos-agregar-noticia-edit-comercial');
                comercialNoticia.innerHTML = "";

                for (let i = 0; i < data.length; i++) {
                    const option = document.createElement('option');
                    option.value = data[i].nombrecompleto;
                    option.text = data[i].nombrecompleto;
                    comercialNoticia.appendChild(option);
                }
            })
            .catch(error => console.error('Error fetching JSON data:', error));
        fetch(`seleccionacomercial.php`)
            .then(response => response.json())
            .then(data => {
                const responsableedit = document.getElementById("encargos-responsable-edit");
                responsableedit.innerHTML = "";

                for (let i = 0; i < data.length; i++) {
                    const option = document.createElement('option');
                    option.value = data[i].nombrecompleto;
                    option.text = data[i].nombrecompleto;
                    responsableedit.appendChild(option);
                }
                const responsableEdit = document.getElementById("encargos-responsable-edit");
                const responsableEditHidden = document.getElementById("encargos-responsable-edit-hidden");
                responsableEdit.value = responsableEditHidden.value;
                responsableEdit.placeholder = responsableEditHidden.value;
            })
            .catch(error => console.error('Error fetching JSON data:', error));
        fetch(`seleccionacomercial.php`)
            .then(response => response.json())
            .then(data => {
                const comercialEncargo = document.getElementById('encargos-agregar-encargo-edit-comercial');
                comercialEncargo.innerHTML = "";

                for (let i = 0; i < data.length; i++) {
                    const option = document.createElement('option');
                    option.value = data[i].nombrecompleto;
                    option.text = data[i].nombrecompleto;
                    comercialEncargo.appendChild(option);
                }
            })
            .catch(error => console.error('Error fetching JSON data:', error));
    }

    function encargosfetchCliente() {
        axios.get('seleccionaCliente.php')
            .then(response => {
                const cliente = response.data;
                const clienteSelect = document.getElementById('encargos-agregar-encargo-edit-cliente');
                clienteSelect.innerHTML = "";
                console.log(cliente);
                cliente.forEach(client => {
                    const option = document.createElement('option');
                    option.value = client.id;
                    option.text = client.nombrecompleto_cliente;
                    clienteSelect.appendChild(option);
                });

            })
            .catch(error => console.error('Error fetching JSON data:', error));
    }

    function encargosagregarNoticiaButton() {
        encargosfetchComercial();
        const agregarnoticiacontainer = document.getElementById("encargos-agregar-noticia-container");
        agregarnoticiacontainer.classList.remove("flex");
        agregarnoticiacontainer.classList.add("hidden");

        const agregarnoticiacontaineredit = document.getElementById("encargos-agregar-noticia-container-edit");
        agregarnoticiacontaineredit.classList.remove("hidden");
        agregarnoticiacontaineredit.classList.add("flex");

        const editbuttonnoticiaedit = document.getElementById("encargos-edit-button-noticia-editar");
        editbuttonnoticiaedit.classList.remove("flex");
        editbuttonnoticiaedit.classList.add("hidden");

        const editbuttonnoticiaeliminar = document.getElementById("encargos-edit-button-noticia-eliminar");
        editbuttonnoticiaeliminar.classList.remove("flex");
        editbuttonnoticiaeliminar.classList.add("hidden");

        const editbuttonnoticia = document.getElementById("encargos-edit-button-noticia");
        editbuttonnoticia.classList.remove("hidden");
        editbuttonnoticia.classList.add("flex");

        // Clear text inputs
        document.getElementById("encargos-valoracion-text").value = "";
        document.querySelector('input[name="encargosfecha-text"]').value = "";
        document.getElementById('encargos-agregar-noticia-edit-comercial').innerHTML = "";

        // Uncheck radio inputs
        const selectedPVA = document.querySelector('input[name="encargospv-pva"]:checked');
        if (selectedPVA) {
            selectedPVA.checked = false;
        }

        const selectedvaloracion = document.querySelector('input[name="encargosvaloracion"]:checked');
        if (selectedvaloracion) {
            selectedvaloracion.checked = false;
        }

        const selectedPrioridad = document.querySelector('input[name="encargosprioridad"]:checked');
        if (selectedPrioridad) {
            selectedPrioridad.checked = false;
        }

        const encargoshideNoticiaModoEdicion = document.getElementById('encargoshideNoticiaModoEdicion');
        encargoshideNoticiaModoEdicion.classList.remove("absolute");
        encargoshideNoticiaModoEdicion.classList.add("hidden");
    }

    // AGREGAR ENCARGOS BUTTON
    function encargosagregarEncargoButton() {
        encargosfetchComercial();
        encargoslimitEncargoNoticia();
        encargosfetchCliente();
        const agregarnoticiacontainer = document.getElementById("encargos-agregar-encargo-container");
        agregarnoticiacontainer.classList.remove("flex");
        agregarnoticiacontainer.classList.add("hidden");

        const agregarnoticiacontaineredit = document.getElementById("encargos-agregar-encargo-container-edit");
        agregarnoticiacontaineredit.classList.remove("hidden");
        agregarnoticiacontaineredit.classList.add("flex");

        const encargoshideEncargoModoEdicion = document.getElementById('encargoshideEncargoModoEdicion');
        encargoshideEncargoModoEdicion.classList.remove("absolute");
        encargoshideEncargoModoEdicion.classList.add("hidden");

        const editbuttonnoticiaedit = document.getElementById("encargos-edit-button-encargo-editar");
        editbuttonnoticiaedit.classList.remove("flex");
        editbuttonnoticiaedit.classList.add("hidden");

        const editbuttonnoticiaeliminar = document.getElementById("encargos-edit-button-encargo-eliminar");
        editbuttonnoticiaeliminar.classList.remove("flex");
        editbuttonnoticiaeliminar.classList.add("hidden");

        const editbuttonnoticia = document.getElementById("encargos-edit-button-encargo");
        editbuttonnoticia.classList.remove("hidden");
        editbuttonnoticia.classList.add("flex");

        // Clear text inputs
        document.getElementById("encargos-comision-encargo").value = "";
        document.querySelector('input[name="encargosfecha-encargo"]').value = "";
        document.getElementById('encargos-agregar-encargo-edit-comercial').value = "";
        document.getElementById('encargos-agregar-encargo-edit-cliente').value = "";
        document.getElementById('encargos-precio-encargo').value = "";

        // Uncheck radio inputs
        const selectedTipoEncargo = document.querySelector('input[name="encargostipo-encargo"]:checked');
        if (selectedTipoEncargo) {
            selectedTipoEncargo.checked = false;
        }

        const selectedTipoComision = document.querySelector('input[name="encargostipo-comision"]:checked');
        if (selectedTipoComision) {
            selectedTipoComision.checked = false;
        }


        const encargoshideNoticiaModoEdicion = document.getElementById('encargoshideNoticiaModoEdicion');
        encargoshideNoticiaModoEdicion.classList.remove("absolute");
        encargoshideNoticiaModoEdicion.classList.add("hidden");
    }

    function encargosagregarNoticiaSQL() {
        const loadingScreen = document.getElementById('encargos-loading-screen-moreinfo');
        loadingScreen.classList.remove('hidden');
        loadingScreen.classList.add('flex');

        const selectedPVA = document.querySelector('input[name="encargospv-pva"]:checked');
        const selectedvaloracion = document.querySelector('input[name="encargosvaloracion"]:checked');
        const valoracionText = document.getElementById("encargos-valoracion-text").value;
        const fecha = document.querySelector('input[name="encargosfecha-text"]').value;
        const selectedPrioridad = document.querySelector('input[name="encargosprioridad"]:checked');
        const comercial = document.getElementById('encargos-agregar-noticia-edit-comercial').value;
        const hiddenID = document.getElementById('encargos-hidden-id');
        const id = hiddenID.value;

        if (!selectedPVA || !selectedvaloracion || !fecha || !selectedPrioridad || !comercial) {
            Toastify({
                text: "No pueden haber campos vacíos",
                duration: 2500,
                destination: "https://github.com/apvarun/toastify-js",
                newWindow: true,
                close: false,
                gravity: "top", // `top` or `bottom`
                position: "center", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    borderRadius: "10px",
                    background: "rgb(162,6,10)",
                    background: "linear-gradient(153deg, rgba(162,6,10,1) 2%, rgba(85,3,3,1) 89%)"
                },
                onClick: function() {} // Callback after click
            }).showToast();
            encargoshideLoadingScreenMoreInfo();
            encargosagregarNoticiaButton();
            return false;

        } else {

            const tipoPVA = selectedPVA.value;
            const valoracion = selectedvaloracion.value;
            const prioridad = selectedPrioridad.value;

            if (valoracion === '1' && valoracionText === '') {
                Toastify({
                    text: "Intrduce valoración",
                    duration: 2500,
                    destination: "https://github.com/apvarun/toastify-js",
                    newWindow: true,
                    close: false,
                    gravity: "top", // `top` or `bottom`
                    position: "center", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        borderRadius: "10px",
                        background: "rgb(162,6,10)",
                        background: "linear-gradient(153deg, rgba(162,6,10,1) 2%, rgba(85,3,3,1) 89%)"
                    },
                    onClick: function() {} // Callback after click
                }).showToast();
                encargoshideLoadingScreenMoreInfo();
                encargosagregarNoticiaButton();
                return false;
            } else {


                fetch(`agregarnoticia.php?id=${id}&tipoPVA=${tipoPVA}&valoracion=${valoracion}&valoraciontext=${valoracionText}&fecha=${fecha}&prioridad=${prioridad}&comercial=${comercial}`)
                    .then(response => response.json())
                    .then(data => {
                        Toastify({
                            text: "Noticia creada",
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

                        encargosfetchMoreInfo();
                        encargosplegarNoticias();
                        console.log("Todo salio bien");

                    })
                    .catch(error => console.error('Error fetching JSON data:', error));
            }
        }
    }
    // AGREGAR ENCARGO SQL
    function encargosagregarEncargoSQL() {
        const loadingScreen = document.getElementById('encargos-loading-screen-moreinfo');
        loadingScreen.classList.remove('hidden');
        loadingScreen.classList.add('flex');

        const selectedTipoEncargo = document.querySelector('input[name="encargostipo-encargo"]:checked');
        const comercial = document.getElementById('encargos-agregar-encargo-edit-comercial').value;
        const cliente = document.getElementById('encargos-agregar-encargo-edit-cliente').value;
        const precio = document.querySelector('input[name="encargosprecio-encargo"]').value;
        const tipoComisionSelected = document.querySelector('input[name="encargostipo-comision"]:checked');
        const comision = document.querySelector('input[name="encargoscomision-encargo"]').value;
        const fecha = document.querySelector('input[name="encargosfecha-encargo"]').value;

        const hiddenID = document.getElementById('encargos-hidden-id');
        const id = hiddenID.value;

        if (!selectedTipoEncargo || !precio || !tipoComisionSelected || !comision || !fecha || !comercial || !cliente) {
            Toastify({
                text: "No pueden haber campos vacíos",
                duration: 2500,
                destination: "https://github.com/apvarun/toastify-js",
                newWindow: true,
                close: false,
                gravity: "top", // `top` or `bottom`
                position: "center", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    borderRadius: "10px",
                    background: "rgb(162,6,10)",
                    background: "linear-gradient(153deg, rgba(162,6,10,1) 2%, rgba(85,3,3,1) 89%)"
                },
                onClick: function() {} // Callback after click
            }).showToast();
            encargoshideLoadingScreenMoreInfo();
            encargosagregarNoticiaButton();
            return false;

        } else {
            const tipoEncargo = selectedTipoEncargo.value;
            const tipoComision = document.querySelector('input[name="encargostipo-comision"]:checked').value;

            fetch(`agregarencargo.php?encargo_id=${id}&tipoEncargo=${tipoEncargo}&comercial=${comercial}&cliente=${cliente}&precio=${precio}&tipoComision=${tipoComision}&comision=${comision}&fecha=${fecha}`)
                .then(response => response.json())
                .then(data => {
                    Toastify({
                        text: "Encargo creado",
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

                    encargostoggleDesplegarEncargos();
                    encargoshideLoadingScreenMoreInfo();
                    encargosfetchMoreInfo();
                    console.log("El encargo se ha añadido correctamente");

                })
                .catch(error => console.error('Error fetching JSON data:', error));
        }
    }

    function encargosshowNoticiaModoEdicion() {
        const editbuttonnoticia = document.getElementById('encargos-edit-button-noticia');
        editbuttonnoticia.classList.remove('flex');
        editbuttonnoticia.classList.add('hidden');
        const editbuttonnoticiaeditar = document.getElementById('encargos-edit-button-noticia-editar');
        editbuttonnoticiaeditar.classList.remove('hidden');
        editbuttonnoticiaeditar.classList.add('flex');
        const editbuttonnoticiadel = document.getElementById('encargos-edit-button-noticia-eliminar');
        editbuttonnoticiadel.classList.remove('hidden');
        editbuttonnoticiadel.classList.add('flex');

        const encargoshideNoticiaModoEdicion = document.getElementById('encargoshideNoticiaModoEdicion');
        encargoshideNoticiaModoEdicion.classList.remove("hidden");
        encargoshideNoticiaModoEdicion.classList.add("absolute");

        const h2agregarnoticia = document.getElementById('encargos-h2-agregar-noticia');
        h2agregarnoticia.textContent = "Editar noticia";

        encargosfetchComercial();

        const agregarnoticiacontaineredit = document.getElementById("encargos-agregar-noticia-container-edit");
        agregarnoticiacontaineredit.classList.remove("hidden");
        agregarnoticiacontaineredit.classList.add("flex");
        const noticiadatabasecontainer = document.getElementById("encargos-noticia-database-container");
        noticiadatabasecontainer.classList.remove("flex");
        noticiadatabasecontainer.classList.add("hidden");
        const hiddenid = document.getElementById('encargos-hidden-id');
        const id = hiddenid.value;
        const radioPV = document.getElementById('encargos-PV');
        const radioPVA = document.getElementById('encargos-PVA');
        const radioSi = document.getElementById('encargos-radiosi');
        const radioNo = document.getElementById('encargos-radiono');
        const valoraciontext = document.getElementById("encargos-valoracion-text");
        const radioalta = document.getElementById('encargos-alta');
        const radiomedia = document.getElementById('encargos-media');
        const radiobaja = document.getElementById('encargos-baja');
        const fechatext = document.getElementById("encargos-fecha-text");


        const valoracionprecio = valoraciontext.value;
        let checkedValue = null;

        const prioridad = document.querySelectorAll('input[name="encargosprioridad"]');
        // Iterate over each radio button
        prioridad.forEach(radio => {
            // Check if the radio button is checked
            if (radio.checked) {
                // Get the value of the checked radio button
                checkedValue = radio.value;
            }
        });

        // Select all radio buttons with name "valoracion"
        const valoracion = document.querySelectorAll('input[name="encargosvaloracion"]');

        let checkedValueValoracion = null;

        // Iterate over each radio button
        valoracion.forEach(radio => {
            // Check if the radio button is checked
            if (radio.checked) {
                // Get the value of the checked radio button
                checkedValueValoracion = radio.value;
            }
        });

        // Select all radio buttons with name "pv-pva"
        const pvPva = document.querySelectorAll('input[name="encargospv-pva"]');
        let checkedValuePvPva = null;

        // Iterate over each radio button
        pvPva.forEach(radio => {
            // Check if the radio button is checked
            if (radio.checked) {
                // Get the value of the checked radio button
                checkedValuePvPva = radio.value;
            }
        });


        fetch(`noticiasfetch.php?id=${id}`)
            .then(response => response.json())
            .then(data => {
                console.log("Fetched data:", data);
                const noticiacontanier = document.getElementById("encargos-noticiacontainer");
                if (data.tipo_PV === 'PV') {
                    radioPV.checked = true;
                } else if (data.tipo_PV === 'PVA') {
                    radioPVA.checked = true;
                }

                if (String(data.valoracion) === '1') {
                    radioSi.checked = true;
                } else if (String(data.valoracion) === '0') {
                    radioNo.checked = true;
                } else {
                    // Handle unexpected cases if necessary
                    radioSi.checked = false;
                    radioNo.checked = false;
                }

                fechatext.value = data.noticia_fecha;

                valoraciontext.value = data.valoracion_establecida;

                if (data.prioridad === 'Alta') {
                    radioalta.checked = true;
                } else if (data.prioridad === 'Media') {
                    radiomedia.checked = true;
                } else if (data.prioridad === 'Baja') {
                    radiobaja.checked = true;
                }

                const agregarnoticiaeditcomercial = document.getElementById("encargos-agregar-noticia-edit-comercial");
                const nombreCompleto = data.comercial_noticia;
                const options = agregarnoticiaeditcomercial.options;
                for (let i = 0; i < options.length; i++) {
                    if (options[i].text === nombreCompleto) {
                        options[i].selected = true;
                        break;
                    }
                }

            })
            .catch(error => console.error('Error fetching JSON data:', error));
    }

    function encargosshowEncargoModoEdicion() {
        const editbuttonencargo = document.getElementById('encargos-edit-button-encargo');
        editbuttonencargo.classList.remove('flex');
        editbuttonencargo.classList.add('hidden');

        const editbuttonencargoeditar = document.getElementById('encargos-edit-button-encargo-editar');
        editbuttonencargoeditar.classList.remove('hidden');
        editbuttonencargoeditar.classList.add('flex');
        const editbuttonencargodel = document.getElementById('encargos-edit-button-encargo-eliminar');
        editbuttonencargodel.classList.remove('hidden');
        editbuttonencargodel.classList.add('flex');
        const encargoshideEncargoModoEdicion = document.getElementById('encargoshideEncargoModoEdicion');
        encargoshideEncargoModoEdicion.classList.remove("hidden");
        encargoshideEncargoModoEdicion.classList.add("absolute");
        const h2agregarencargo = document.getElementById('encargos-h2-agregar-encargo');
        h2agregarencargo.textContent = "Editar encargo";


        encargosfetchComercial();
        encargosfetchCliente();

        const agregarencargocontaineredit = document.getElementById("encargos-agregar-encargo-container-edit");
        agregarencargocontaineredit.classList.remove("hidden");
        agregarencargocontaineredit.classList.add("flex");
        const encargodatabasecontainer = document.getElementById("encargos-encargo-database-container");
        encargodatabasecontainer.classList.remove("flex");
        encargodatabasecontainer.classList.add("hidden");


        const hiddenid = document.getElementById('encargos-hidden-id');
        const id = hiddenid.value;

        const radioVenta = document.getElementById('encargos-VENTA-encargo');
        const radioAlquiler = document.getElementById('encargos-ALQUILER-encargo');
        const clienteEncargo = document.getElementById('encargos-agregar-encargo-edit-cliente');
        const precio1Encargo = document.getElementById('encargos-precio-encargo');
        const radioComisionFijo = document.getElementById('encargos-FIJO-encargo');
        const radioComisionPorcentaje = document.getElementById('encargos-PORCENTAJE-encargo');
        const comisionEncargo = document.getElementById('encargos-comision-encargo');
        const fechaEncargo = document.getElementById('encargos-fecha-encargo');
        const comercialEncargo = document.getElementById('encargos-agregar-encargo-edit-comercial');

        axios.get(`encargosfetch.php?id=${id}`)
            .then(function(response) {

                fechaEncargo.value = response.data.encargo_fecha

                axios.get(`seleccionaClienteID.php?cliente_id=${response.data.cliente_id}`)
                    .then(function(response) {
                        const nombreCompleto = response.data[0].nombrecompleto_cliente;
                        const options = clienteEncargo.options;
                        for (let i = 0; i < options.length; i++) {
                            if (options[i].text === nombreCompleto) {
                                options[i].selected = true;
                                break;
                            }
                        }
                    })
                    .catch(function(error) {
                        console.error('Error:', error);
                    });

                const nombreCompletoComercial = response.data.comercial_encargo;
                const options = comercialEncargo.options;
                for (let i = 0; i < options.length; i++) {
                    if (options[i].text === nombreCompletoComercial) {
                        options[i].selected = true;
                        break;
                    }
                }

                precio1Encargo.value = response.data.precio_1;
                if (response.data.tipo_comision_encargo === 'PORCENTAJE') {
                    radioComisionPorcentaje.checked = true;
                    comisionEncargo.value = response.data.comision_encargo;
                } else if (response.data.tipo_comision_encargo === 'FIJO') {
                    radioComisionFijo.checked = true;
                    comisionEncargo.value = response.data.comision_encargo;
                }

                if (response.data.tipo_encargo === 'VENTA') {
                    radioVenta.checked = true;
                } else if (response.data.tipo_encargo === 'ALQUILER') {
                    radioAlquiler.checked = true;
                }

            })
            .catch(function(error) {
                console.error('Error:', error);
            });
    }

    function encargosupdateNoticia() {
        encargosplegarNoticias();
        const loadingScreen = document.getElementById('encargos-loading-screen-moreinfo');
        loadingScreen.classList.remove('hidden');
        loadingScreen.classList.add('flex');
        const selectedPVA = document.querySelector('input[name="encargospv-pva"]:checked');
        const tipoPV = selectedPVA.value;
        const selectedvaloracion = document.querySelector('input[name="encargosvaloracion"]:checked');
        const valoracion = selectedvaloracion.value;
        const valoracionText = document.getElementById("encargos-valoracion-text");
        const valoracion_establecida = valoracionText.value;
        const fecha = document.querySelector('input[name="encargosfecha-text"]');
        const noticia_fecha = fecha.value;
        const prioridadradio = document.querySelector('input[name="encargosprioridad"]:checked');
        const prioridad = prioridadradio.value;
        console.log("prioridad:", prioridad);
        const comercialtext = document.getElementById('encargos-agregar-noticia-edit-comercial');
        const comercial = comercialtext.value;
        const hiddenID = document.getElementById('encargos-hidden-id');
        const id = hiddenID.value;
        console.log(id);
        fetch(`updatenoticia.php?id=${id}&noticia_fecha=${noticia_fecha}&prioridad=${prioridad}&tipo_PV=${tipoPV}&valoracion=${valoracion}&valoracion_establecida=${valoracion_establecida}&comercial=${comercial}`)
            .then(response => response.json())
            .then(data => {
                Toastify({
                    text: "Noticia editada correctamente",
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
                console.log("updateo correcto");
                encargosfetchMoreInfo();
            })
            .catch(error => console.error('Error fetching JSON data:', error));
    }

    function encargosupdateEncargo() {
        encargosplegarEncargos();
        const loadingScreen = document.getElementById('encargos-loading-screen-moreinfo');
        loadingScreen.classList.remove('hidden');
        loadingScreen.classList.add('flex');
        const selectedTipoEncargo = document.querySelector('input[name="encargostipo-encargo"]:checked');
        const tipoEncargo = selectedTipoEncargo.value;
        const comercial = document.getElementById('encargos-agregar-encargo-edit-comercial').value;
        const cliente = document.getElementById('encargos-agregar-encargo-edit-cliente').value;
        const precio1 = document.querySelector('input[name="encargosprecio-encargo"]').value;
        const tipoComisionSelected = document.querySelector('input[name="encargostipo-comision"]:checked');
        const comision = document.querySelector('input[name="encargoscomision-encargo"]').value;
        const fecha = document.querySelector('input[name="encargosfecha-encargo"]').value;

        const hiddenID = document.getElementById('encargos-hidden-id');
        const id = hiddenID.value;

        axios.get(`updateEncargo.php?id=${id}&encargo_fecha=${fecha}&comercial_encargo=${comercial}&tipo_encargo=${tipoEncargo}&comision_encargo=${comision}&cliente_id=${cliente}&precio_1=${precio1}&tipo_comision_encargo=${tipoComisionSelected.value}`)
            .then(function(response) {
                Toastify({
                    text: "Encargo editado correctamente",
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
                console.log("Encargo editado correctamente");
                encargosfetchMoreInfo();
            })
            .catch(function(error) {
                console.error('Error:', error);
            });
    }

    function encargosdeleteNoticia() {
        encargosplegarNoticias();
        const loadingScreen = document.getElementById('encargos-loading-screen-moreinfo');
        loadingScreen.classList.remove('hidden');
        loadingScreen.classList.add('flex');
        const hiddenID = document.getElementById('encargos-hidden-id');
        const id = hiddenID.value;
        fetch(`deletenoticia.php?id=${id}`)
            .then(response => response.json())
            .then(data => {
                Toastify({
                    text: "Noticia eliminada",
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
                encargosplegarNoticias();
                encargosfetchMoreInfo();
                loadingScreen.classList.remove('flex');
                loadingScreen.classList.add('hidden');
            })
            .catch(error => console.error('Error fetching JSON data:', error));
    }

    function encargosdeleteEncargo() {
        encargosplegarEncargos();
        const loadingScreen = document.getElementById('encargos-loading-screen-moreinfo');
        loadingScreen.classList.remove('hidden');
        loadingScreen.classList.add('flex');
        const hiddenID = document.getElementById('encargos-hidden-id');
        const id = hiddenID.value;

        axios.get(`deleteEncargo.php?id=${id}`)
            .then(function(response) {
                Toastify({
                    text: "Encargo eliminado correctamente",
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
                console.log("Encargo eliminado correctamente");
                encargosfetchMoreInfo();
                loadingScreen.classList.remove('flex');
                loadingScreen.classList.add('hidden');
            })
            .catch(function(error) {
                console.error('Error:', error);
            });
    }

    function encargoshideNoticiaModoEdicion() {
        const agregarnoticiacontaineredit = document.getElementById("encargos-agregar-noticia-container-edit");
        agregarnoticiacontaineredit.classList.remove("flex");
        agregarnoticiacontaineredit.classList.add("hidden");
        const noticiadatabasecontainer = document.getElementById("encargos-noticia-database-container");
        noticiadatabasecontainer.classList.remove("hidden");
        noticiadatabasecontainer.classList.add("flex");
    }

    function encargoshideEncargoModoEdicion() {
        const agregarencargocontaineredit = document.getElementById("encargos-agregar-encargo-container-edit");
        agregarencargocontaineredit.classList.remove("flex");
        agregarencargocontaineredit.classList.add("hidden");
        const encargodatabasecontainer = document.getElementById("encargos-encargo-database-container");
        encargodatabasecontainer.classList.remove("flex");
        encargodatabasecontainer.classList.add("hidden");
    }

    function encargoshideLoadingScreenMoreInfo() {
        console.log("Hiding loading screen...");
        const loadingScreen = document.getElementById('encargos-loading-screen-moreinfo');
        loadingScreen.classList.remove('flex');
        loadingScreen.classList.add('hidden');
    }

    function encargoslimitEncargoNoticia() {
        const fechaNoticiaElement = document.getElementById('encargos-noticia-fecha-texto');
        const fechaEncargoInput = document.getElementById('encargosfecha-encargo');

        if (fechaNoticiaElement && fechaEncargoInput) {
            const fechaNoticia = fechaNoticiaElement.textContent.trim();
            const parts = fechaNoticia.split('-');

            if (parts.length === 3) {
                const day = parseInt(parts[0], 10);
                const month = parseInt(parts[1], 10) - 1; // Months in JavaScript are 0-indexed
                const year = parseInt(parts[2], 10);

                // Create a Date object for noticia-fecha-texto
                const noticiaDate = new Date(year, month, day);

                // Add one day to noticiaDate
                noticiaDate.setDate(noticiaDate.getDate() + 1);

                // Format noticiaDate to 'YYYY-MM-DD' for input type="date"
                const formattedNoticiaDate = noticiaDate.toISOString().split('T')[0];

                // Set min attribute of fecha-encargo input
                fechaEncargoInput.setAttribute('min', formattedNoticiaDate);
            } else {
                console.error('Invalid date format in fechaNoticia:', fechaNoticia);
            }
        } else {
            console.error('Element with id "noticia-fecha-texto" or "fecha-encargo" not found.');
        }
    }

    function encargosshowLoadingScreenMoreInfo() {
        console.log("Showing loading screen...");
        const loadingScreen = document.getElementById('encargos-loading-screen-moreinfo');
        loadingScreen.classList.remove('hidden');
        loadingScreen.classList.add('flex');
    }
</script>


</html>