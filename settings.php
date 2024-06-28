<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>LucmarCloud</title>
    <link href="./output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="overflow-x-hidden h-auto">
    <main class="h-full w-full flex flex-col justify-start items-center bg-slate-200 relative mt-14 mb-16 overflow-visible">
        <div id="toast-reload" class="hidden absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[300px] h-auto flex-col justify-center items-center bg-white bg-opacity-100 z-50 rounded-lg p-4 shadow-lg gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 512 512">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M463.1 112.37C373.68 96.33 336.71 84.45 256 48c-80.71 36.45-117.68 48.33-207.1 64.37C32.7 369.13 240.58 457.79 256 464c15.42-6.21 223.3-94.87 207.1-351.63" />
            </svg>
            <p class="text-center font-sans text-sm leading-6 w-[90%]">Actualizar la información tu usuario requiere volver a iniciar sesión.</p>
            <p class="text-center font-sans text-sm leading-6 w-full">¿Estás seguro?</p>
            <div class="flex flex-row w-full h-auto gap-2 mt-1 justify-center items-center">
                <button class="rounded-lg py-1.5 px-2.5 bg-emerald-500 hover:cursor-pointer hover:bg-emerald-700 text-center text-sm font-sans text-white" onclick="updateUserInformation()">Aceptar</button>
                <button class="rounded-lg py-1.5 px-2.5 bg-red-400 hover:cursor-pointer hover:bg-red-600 text-center text-sm font-sans text-white" onclick="hideToastReload()">Cancelar</button>
            </div>
        </div>
        <div id="toast-reload-edicion" class="hidden absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[300px] h-auto flex-col justify-center items-center bg-white bg-opacity-100 z-50 rounded-lg p-4 shadow-lg gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 512 512">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M463.1 112.37C373.68 96.33 336.71 84.45 256 48c-80.71 36.45-117.68 48.33-207.1 64.37C32.7 369.13 240.58 457.79 256 464c15.42-6.21 223.3-94.87 207.1-351.63" />
            </svg>
            <p class="text-center font-sans text-sm leading-6 w-[90%]">Actualizar la información tu usuario requiere volver a iniciar sesión.</p>

        </div>
        <div id="titulo_header" class="w-[100%] h-auto flex flex-col justify-center items-center pb-6 mb-6">
            <div id="clock-settings" class="text-lg font-sans font-medium text-zinc-800 z-10 pb-4"></div>
            <h1 class=" font-sans text-lg font-bold text-slate-800">Área de Usuario</h1>
            <div class="flex flex-row justify-center items-center pt-3">
                <p id="nombre-header-settings"></p>
            </div>
        </div>
        <div id="bloques-setting-container" class="w-full h-auto py-3 flex flex-col justify-center items-center gap-3">
            <div id="bloques-informacion-usuario" class="w-full h-full flex flex-col justify-start items-center">
                <div id="banner-informacion-usuario" class="w-[92%] h-auto flex flex-row justify-center items-center bg-slate-50 rounded-lg py-2 shadow-lg hover:bg-slate-100 hover:cursor-pointer" onclick="toggleDesplegarInformacionUsuario()">
                    <p>Información de Usuario</p>
                    <svg class="block text-black" id="arrow-down-settings-infousuario" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10l5 5m0 0l5-5" />
                    </svg>
                    <svg class="text-black hidden" id="arrow-up-settings-infousuario" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m17 14l-5-5m0 0l-5 5" />
                    </svg>
                </div>
                <div id="container-informacion-usuario" class="w-[92%] h-auto flex-col justify-center items-center bg-slate-50 rounded-lg py-2 px-2 shadow-lg mt-2 pb-11 relative hidden">
                    <div class="absolute top-1 right-1 text-emerald-800 hover:text-emerald-500 hover:cursor-pointer" onclick="showInformacionUsuarioModoEdicion()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                <path d="M9.533 11.15A1.823 1.823 0 0 0 9 12.438V15h2.578c.483 0 .947-.192 1.289-.534l7.6-7.604a1.822 1.822 0 0 0 0-2.577l-.751-.751a1.822 1.822 0 0 0-2.578 0z" />
                                <path d="M21 12c0 4.243 0 6.364-1.318 7.682C18.364 21 16.242 21 12 21c-4.243 0-6.364 0-7.682-1.318C3 18.364 3 16.242 3 12c0-4.243 0-6.364 1.318-7.682C5.636 3 7.758 3 12 3" />
                            </g>
                        </svg>
                    </div>
                    <div id="containerImagenInformacionUsuario" class="w-[100%] h-auto flex flex-row justify-center items-center">
                        <div id="profile-photo-informacion-usuario" class=" w-[40%] h-auto flex flex-col justify-center items-center  bg-cover bg-no-repeat bg-center">
                            <div class="flex flex-row justify-center items-center w-[130px] h-[130px] pl-2 rounded-full">
                                <img id="img-profile-photo-informacion-usuario" class="w-full h-full rounded-xl object-cover object-center" src="" alt="">
                            </div>
                        </div>

                        <div id="datos-informacion-usuario" class="w-[60%] h-auto flex flex-col justify-center py-2">
                            <p class="text-center py-1.5 font-sans text-sm leading-6" id="nombre-informacion-usuario"></p>
                            <p class="text-center py-1.5 font-sans text-sm leading-6" id="email-informacion-usuario"></p>
                            <p class="text-center py-1.5 font-sans text-sm leading-6" id="password-informacion-usuario"></p>
                            <p class="text-center py-1.5 font-sans text-sm leading-6" id="admin-informacion-usuario"></p>
                        </div>
                    </div>
                    <div id="informacionusuarioindividualbloque2UsuarioIniciado" class="w-[100%] h-auto flex flex-col justify-center items-center mt-4">
                        <div id="totalinmueblesasignadosUsuarioIniciado" class="w-[100%] h-auto flex flex-col justify-center items-center mb-3 rounded-lg shadow-lg bg-blue-50 pb-2">
                            <h2 class="text-center font-sans weight-bold text-lg w-full mt-4">Total de inmuebles asignados</h2>
                            <p id="totalinmueblesasignadostextUsuarioIniciado" class="text-center font-sans text-lg leading-6 w-full">0</p>
                            <div id="leyendaDeColoresinmueblesUsuarioIniciado" class="w-[100%] h-auto flex flex-col justify-center items-center">
                                <p>Última actualización:</p>
                                <div class="text-center py-1 font-sans text-sm leading-6 gap-3 flex flex-row items-center justify-center">
                                    <p class="text-red-600">> 90 días </p>
                                    <p class="text-yellow-600">> 30 días </p>
                                    <p class="text-green-600">
                                        < 30 días</p>
                                </div>
                            </div>
                            <div id="tablainmueblesasignadosUsuarioIniciado" class="w-[100%] h-auto flex flex-col justify-center items-center">
                            </div>
                        </div>
                        <div id="totalnoticiasasignadascontainerUsuarioIniciado" class="w-[100%] h-auto flex flex-col justify-center items-center mb-3 mt-4 rounded-lg bg-blue-50 shadow-lg">
                            <div id="porcentajenoticiasUsuarioIniciado" class="w-[100%] h-auto flex flex-col justify-center items-center mb-3 mt-4">
                                <h2 class="text-center font-sans weight-bold text-lg w-full">Noticias</h2>
                                <p id="totalnoticiasasignadasUsuarioIniciado" class="text-center font-sans text-lg leading-6 w-full">0</p>
                            </div>
                            <div id="leyendaDeColoresnoticiasUsuarioIniciado" class="w-[100%] h-auto flex flex-col justify-center items-center">
                                <p>Última actualización:</p>
                                <div class="text-center py-1 font-sans text-sm leading-6 gap-3 flex flex-row items-center justify-center">
                                    <p class="text-red-600">> 90 días </p>
                                    <p class="text-yellow-600">> 30 días </p>
                                    <p class="text-green-600">
                                        < 30 días</p>
                                </div>
                            </div>
                            <div id="tablanoticiasasignadasUsuarioIniciado" class="w-[100%] h-auto flex flex-col justify-center items-center">
                            </div>

                        </div>
                        <div id="totalencargosasignadoscontainerUsuarioIniciado" class="w-[100%] h-auto flex flex-col justify-center items-center mb-3 mt-4 rounded-lg bg-blue-50 shadow-lg">
                            <div id="porcentajeencargosUsuarioIniciado" class="w-[100%] h-auto flex flex-col justify-center items-center mb-3 mt-4">
                                <h2 class="text-center font-sans weight-bold text-lg w-full">Encargos</h2>
                                <p id="totalencargosasignadosUsuarioIniciado" class="text-center font-sans text-lg leading-6 w-full">0</p>
                            </div>
                            <div id="leyendaDeColoresencargos" class="w-[100%] h-auto flex flex-col justify-center items-center">
                                <p>Última actualización:</p>
                                <div class="text-center py-1 font-sans text-sm leading-6 gap-3 flex flex-row items-center justify-center">
                                    <p class="text-red-600">> 90 días </p>
                                    <p class="text-yellow-600">> 30 días </p>
                                    <p class="text-green-600">
                                        < 30 días</p>
                                </div>
                            </div>
                            <div id="tablaencargosasignadosUsuarioIniciado" class="w-[100%] h-auto flex flex-col justify-center items-center">
                            </div>

                            <button class="flex bg-red-700 hover:bg-red-900 text-white bottom-0 absolute font-bold py-2 px-4 mt-2 mb-2 rounded hover:cursor-pointer" type="button" id="cerrar-info-UsuarioIniciado" onclick="toggleDesplegarInformacionUsuario()">Cerrar</button>
                        </div>
                    </div>
                </div>
                <div id="container-informacion-usuario-edicion" class="w-[92%] h-auto flex-col justify-center items-center bg-slate-50 rounded-lg py-2 px-2 shadow-lg mt-2 relative hidden">
                    <div class="h-full w-full flex flex-row justify-center items-center">
                        <div class="absolute top-1 right-1 text-rose-800 hover:text-rose-500 hover:cursor-pointer" onclick="hideInformacionUsuarioModoEdicion()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m15.75 15l-6-6m0 6l6-6m7 3c0-5.523-4.477-10-10-10s-10 4.477-10 10s4.477 10 10 10s10-4.477 10-10" color="currentColor" />
                            </svg>
                        </div>
                        <div id="profile-photo-informacion-usuario-edicion" class=" w-[40%] h-full flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center rounded-lg">
                            <div class="flex flex-row justify-center items-center w-[130px] h-[130px] pl-2 rounded-lg">
                                <img id="img-profile-photo-informacion-usuario-edicion" class="w-full h-full rounded-xl object-cover object-center" src="" alt="">
                            </div>

                            <input type="file" name="sample_image" style="display: none;" id="sample_image">
                            <label for=sample_image class="text-center p-1.5 font-sans text-xs w-auto h-auto bg-gray-200 border border-gray-400 rounded-lg mt-2">Seleccionar</label>
                            <button onclick="updateProfilePhoto()" type="button" class="flex bg-blue-700 hover:bg-blu-300 text-white font-bold text-xs py-2 px-4 mt-2 rounded hover:cursor-pointer">Subir</button>

                        </div>

                        <div id=" datos-informacion-usuario" class="w-[60%] h-auto flex flex-col justify-center items-center pl-4 pb-2 pt-2">
                            <label for="nombre-informacion-usuario-edicion" class="text-center py-1.5 font-sans text-sm leading-6">Nombre:</label>
                            <input type="text" id="nombre-informacion-usuario-edicion" class="w-full h-auto text-center py-1.5 font-sans text-sm leading-6 bg-gray-50 border rounded-md text-black  border-gray-400" placeholder="Nombre">

                            <label for="apellido-informacion-usuario-edicion" class="text-center py-1.5 font-sans text-sm leading-6">Apellido:</label>
                            <input type="text" id="apellido-informacion-usuario-edicion" class="w-full h-auto text-center py-1.5 font-sans text-sm leading-6 bg-gray-50 border rounded-md text-black border-gray-400" placeholder="Apellido">
                            <label for="email-informacion-usuario-edicion" class="text-center py-1.5 font-sans text-sm leading-6">Email:</label>
                            <input type="text" id="email-informacion-usuario-edicion" class="w-full h-auto text-center py-1.5 font-sans text-sm leading-6 bg-gray-50 border rounded-md text-black border-gray-400" placeholder="Email">

                            <label for="password-informacion-usuario-edicion" class="text-center py-1.5 font-sans text-sm leading-6">Contraseña:</label>
                            <input type="text" id="password-informacion-usuario-edicion" class="w-full h-auto text-center py-1.5 font-sans text-sm leading-6 bg-gray-50 border rounded-md text-black border-gray-400" placeholder="Contraseña">

                            <div id="rol-edicion" class="w-full h-auto flex flex-col justify-center">
                                <label for="radio-admin-informacion-usuario" class="text-center py-1.5 font-sans text-sm leading-6">Rol:</label>
                                <div class="flex flex-row justify-start items-center gap-2 pl-6">
                                    <input type="radio" id="admin-informacion-usuario-edicion-admin" class=" h-auto text-center py-1.5 font-sans text-sm leading-3" name="radio-admin-informacion-usuario" value="1">
                                    <label for="admin-informacion-usuario-edicion-admin" class="text-center py-1.5 font-sans text-sm leading-3">Administrador</label>
                                </div>
                                <div class="flex flex-row justify-start items-center gap-2 pl-6">
                                    <input type="radio" id="admin-informacion-usuario-edicion-comercial" class="h-auto text-center py-1.5 font-sans text-sm leading-6" name="radio-admin-informacion-usuario" value="0">
                                    <label for="admin-informacion-usuario-edicion-comercial" class="text-center py-1.5 font-sans text-sm leading-3">Comercial</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="flex bg-emerald-700 hover:bg-emerald-300 text-white font-bold py-2 px-4 mt-2 rounded hover:cursor-pointer" type="button" id="edit-button-noticia-editar" onclick="displayToastReload()">Editar</button>
                </div>
            </div>
            <div id="bloques-informacion-usuario-allusers" class="w-[100%] h-fit flex flex-col justify-start items-center relative z-10">
                <div id="banner-informacion-usuario-allusers" class="w-[92%] h-auto flex flex-row justify-center items-center bg-slate-50 rounded-lg py-2 shadow-lg hover:bg-slate-100 hover:cursor-pointer" onclick="toggleDesplegarInformacionUsuarioAllUsers()">
                    <p>Administrar Usuarios</p>
                    <svg class="block text-black" id="arrow-down-settings-infousuario-allusers" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10l5 5m0 0l5-5" />
                    </svg>
                    <svg class="text-black hidden" id="arrow-up-settings-infousuario-allusers" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m17 14l-5-5m0 0l-5 5" />
                    </svg>
                </div>
                <div id="container-informacion-usuario-allusers" class="w-[92%] h-auto flex-col justify-center items-center bg-slate-50 rounded-lg py-2 px-2 shadow-lg mt-2 relative hidden">
                    <div id="loading-screen-settings" class="absolute top-0 left-0 w-full h-full justify-center items-center bg-white bg-opacity-100 z-999 rounded-lg">
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
                    <div id="tablaallusers" class="w-full"></div>
                    <div id="agregar-user-container" class="w-1/2 border border-green-600 bg-green-100 rounded-md flex flex-row justify-center items-center mt-2 hover:cursor-pointe hover:cursor-pointer" onclick="agregarUsuario()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                <path fill="currentColor" d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2M8.5 9.5a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0m9.758 7.484A7.985 7.985 0 0 1 12 20a7.985 7.985 0 0 1-6.258-3.016C7.363 15.821 9.575 15 12 15s4.637.821 6.258 1.984" />
                            </g>
                        </svg>
                        <svg class="text-green-700 my-0" xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7.007 12a.75.75 0 0 1 .75-.75h3.493V7.757a.75.75 0 0 1 1.5 0v3.493h3.493a.75.75 0 1 1 0 1.5H12.75v3.493a.75.75 0 0 1-1.5 0V12.75H7.757a.75.75 0 0 1-.75-.75" />
                        </svg>

                    </div>
                    <div id="agregar-usuario-form" class="w-full h-auto px-3 mt-3 flex-col items-center justify-center hidden relative">
                        <div class="absolute top-0 -right-0 text-red-500" onclick="cerrarFormularioAgregarUsuario()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 16 16" class="hover:text-red-700 text-red-500 hover:cursor-pointer">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m11.25 4.75l-6.5 6.5m0-6.5l6.5 6.5" />
                            </svg>
                        </div>

                        <h2 class="font-sans text-lg py-2 w-[60%] mb-2 text-center text-white bg-blue-300 rounded-lg shadow-md">Añadir usuario</h2>

                        <label for="nombre-informacion-usuario-agregar" class="text-center py-1.5 font-sans text-sm leading-6">Nombre:</label>
                        <input required="text" id="nombre-informacion-usuario-agregar" class="w-full h-auto text-center py-1.5 font-sans text-sm leading-6 bg-gray-50 border rounded-md text-black  border-gray-400" placeholder="Nombre">

                        <label for="apellido-informacion-usuario-agregar" class="text-center py-1.5 font-sans text-sm leading-6">Apellido:</label>
                        <input required type="text" id="apellido-informacion-usuario-agregar" class="w-full h-auto text-center py-1.5 font-sans text-sm leading-6 bg-gray-50 border rounded-md text-black border-gray-400" placeholder="Apellido">
                        <label for="email-informacion-usuario-agregar" class="text-center py-1.5 font-sans text-sm leading-6">Email:</label>
                        <input required type="text" id="email-informacion-usuario-agregar" class="w-full h-auto text-center py-1.5 font-sans text-sm leading-6 bg-gray-50 border rounded-md text-black border-gray-400" placeholder="Email">

                        <label for="password-informacion-usuario-agregar" class="text-center py-1.5 font-sans text-sm leading-6">Contraseña:</label>
                        <input required type="text" id="password-informacion-usuario-agregar" class="w-full h-auto text-center py-1.5 font-sans text-sm leading-6 bg-gray-50 border rounded-md text-black border-gray-400" placeholder="Contraseña">

                        <div id="rol-agregar" class="w-1/2 h-auto flex flex-col justify-center">
                            <label for="radio-admin-informacion-usuario-agregar" class="text-center py-1.5 font-sans text-sm leading-6">Rol:</label>
                            <div class="flex flex-row justify-start items-center gap-2 pl-6">
                                <input type="radio" id="admin-informacion-usuario-edicion-admin-agregar" class=" h-auto text-center py-1.5 font-sans text-sm leading-3" name="radio-admin-informacion-usuario-agregar" value="1">
                                <label for="admin-informacion-usuario-edicion-admin-agreagar" class="text-center py-1.5 font-sans text-sm leading-3">Administrador</label>
                            </div>
                            <div class="flex flex-row justify-start items-center gap-2 pl-6">
                                <input checked type="radio" id="admin-informacion-usuario-edicion-comercial-agregar" class="h-auto text-center py-1.5 font-sans text-sm leading-6" name="radio-admin-informacion-usuario-agregar" value="0">
                                <label for="admin-informacion-usuario-edicion-comercial-agregar" class="text-center py-1.5 font-sans text-sm leading-3">Comercial</label>
                            </div>
                        </div>
                        <button class="flex bg-emerald-700 hover:bg-emerald-300 text-white font-bold py-2 px-4 mt-2 rounded hover:cursor-pointer" type="button" id="edit-button-noticia-editar" onclick="validateForm()">Añadir</button>

                    </div>

                </div>
                <div id="informacion-usuario-individual" class="w-[92%] px-3 h-auto flex-col justify-start items-center z-99 bg-slate-50 rounded-lg py-2 shadow-lg hidden mt-2 relative">
                    <div id="loading-screen-settings-informacion-usuario-individual" class="absolute top-0 left-0 w-full h-full flex justify-center items-center bg-slate-50 bg-opacity-100 z-10 rounded-lg">
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
                    <div id="container-informacion-usuario-individual" class="relative w-full h-auto flex flex-col items-center justify-start pb-20">
                        <div id="informacionusuarioindividualbloque1" class="w-[100%] h-auto flex flex-row justify-center items-center py-1 mt-3 relative">
                            <div class="absolute top-0 right-1 text-emerald-800 hover:text-emerald-500 hover:cursor-pointer" onclick="showInformacionUsuarioIndividualModoEdicion()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                        <path d="M9.533 11.15A1.823 1.823 0 0 0 9 12.438V15h2.578c.483 0 .947-.192 1.289-.534l7.6-7.604a1.822 1.822 0 0 0 0-2.577l-.751-.751a1.822 1.822 0 0 0-2.578 0z" />
                                        <path d="M21 12c0 4.243 0 6.364-1.318 7.682C18.364 21 16.242 21 12 21c-4.243 0-6.364 0-7.682-1.318C3 18.364 3 16.242 3 12c0-4.243 0-6.364 1.318-7.682C5.636 3 7.758 3 12 3" />
                                    </g>
                                </svg>
                            </div>
                            <div id="profile-photo-informacion-usuari-individual" class=" w-[40%] h-auto flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
                                <p id="noimagetext" class="text-black hidden">Sin imagen</p>
                                <div id="profile-photo-container" class="flex flex-row justify-center items-center w-[120px] h-[120px] pl-2 rounded-full">
                                    <img id="img-profile-photo-informacion-usuario-individual" class="w-full h-full rounded-xl object-cover object-center" src="" alt="">
                                </div>
                            </div>

                            <div id="datos-informacion-usuario" class="w-[60%] h-auto flex flex-col justify-center items- py-2">
                                <p class="text-center py-1.5 font-sans text-sm leading-6" id="nombre-informacion-usuario-individual"></p>
                                <p class="text-center py-1.5 font-sans text-sm leading-6" id="email-informacion-usuario-individual"></p>
                                <p class="text-center py-1.5 font-sans text-sm leading-6" id="password-informacion-usuario-individual"></p>
                                <p class="text-center py-1.5 font-sans text-sm leading-6" id="admin-informacion-usuario-individual"></p>
                            </div>
                        </div>

                        <!-- Información de usuario individual edición -->
                        <div id="informacionusuarioindividualbloque1-edicion" class="w-[100%] h-auto flex-col justify-center items-center py-1 mt-3 pb-3 relative hidden bg-slate-200 p-2 rounded-lg shadow-lg">
                            <div id="loading-screen-settings-informacion-usuario-individual-modo-edicion" class="absolute top-0 left-0 w-full h-full flex justify-center items-center bg-slate-50 bg-opacity-100 z-10 rounded-lg">
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
                            <div class="h-full w-full flex flex-row justify-center items-center">
                                <div class="absolute top-1 right-1 text-rose-800 hover:text-rose-500 hover:cursor-pointer" onclick="hideInformacionUsuarioIndividualModoEdicion()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m15.75 15l-6-6m0 6l6-6m7 3c0-5.523-4.477-10-10-10s-10 4.477-10 10s4.477 10 10 10s10-4.477 10-10" color="currentColor" />
                                    </svg>
                                </div>
                                <div id="profile-photo-informacion-usuario-individual-edicion" class=" w-[40%] h-full flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
                                    <div class="flex flex-row justify-center items-center w-[130px] h-[130px] pl-2 rounded-full">
                                        <img id="img-profile-photo-informacion-usuario-individual-edicion" class="w-full h-full rounded-xl object-cover object-center" src="" alt="">
                                    </div>

                                    <input type="file" name="sample_image_individual" style="display: none;" id="sample_image_individual">
                                    <label for=sample_image_individual class="text-center p-1.5 font-sans text-xs w-auto h-auto bg-gray-200 border border-gray-400 rounded-lg mt-2">Seleccionar</label>
                                    <button onclick="updateProfilePhotoUsuarioIndividual()" type="button" class="flex bg-blue-700 hover:bg-blu-300 text-white font-bold text-xs py-2 px-4 mt-2 rounded hover:cursor-pointer">Subir</button>

                                </div>

                                <div id=" datos-informacion-usuario" class="w-[60%] h-auto flex flex-col justify-center items-center pl-4 pb-2 pt-2">
                                    <label for="nombre-informacion-usuario-edicion-individual" class="text-center py-1.5 font-sans text-sm leading-6">Nombre:</label>
                                    <input type="text" id="nombre-informacion-usuario-edicion-individual" class="w-full h-auto text-center py-1.5 font-sans text-sm leading-6 bg-gray-50 border rounded-md text-black  border-gray-400" placeholder="Nombre">

                                    <label for="apellido-informacion-usuario-edicion-individual" class="text-center py-1.5 font-sans text-sm leading-6">Apellido:</label>
                                    <input type="text" id="apellido-informacion-usuario-edicion-individual" class="w-full h-auto text-center py-1.5 font-sans text-sm leading-6 bg-gray-50 border rounded-md text-black border-gray-400" placeholder="Apellido">
                                    <label for="email-informacion-usuario-edicion-individual" class="text-center py-1.5 font-sans text-sm leading-6">Email:</label>
                                    <input type="text" id="email-informacion-usuario-edicion-individual" class="w-full h-auto text-center py-1.5 font-sans text-sm leading-6 bg-gray-50 border rounded-md text-black border-gray-400" placeholder="Email">

                                    <label for="password-informacion-usuario-edicion-individual" class="text-center py-1.5 font-sans text-sm leading-6">Contraseña:</label>
                                    <input type="text" id="password-informacion-usuario-edicion-individual" class="w-full h-auto text-center py-1.5 font-sans text-sm leading-6 bg-gray-50 border rounded-md text-black border-gray-400" placeholder="Contraseña">

                                    <div id="rol-edicion-individual" class="w-full h-auto flex flex-col justify-center">
                                        <label for="radio-admin-informacion-usuario-individual" class="text-center py-1.5 font-sans text-sm leading-6">Rol:</label>
                                        <div class="flex flex-row justify-start items-center gap-2 pl-6">
                                            <input type="radio" id="admin-informacion-usuario-edicion-admin-individual" class=" h-auto text-center py-1.5 font-sans text-sm leading-3" name="radio-admin-informacion-usuario-individual" value="1">
                                            <label for="admin-informacion-usuario-edicion-admin-individual" class="text-center py-1.5 font-sans text-sm leading-3">Administrador</label>
                                        </div>
                                        <div class="flex flex-row justify-start items-center gap-2 pl-6">
                                            <input type="radio" id="admin-informacion-usuario-edicion-comercial-individual" class="h-auto text-center py-1.5 font-sans text-sm leading-6" name="radio-admin-informacion-usuario-individual" value="0">
                                            <label for="admin-informacion-usuario-edicion-comercial-individual" class="text-center py-1.5 font-sans text-sm leading-3">Comercial</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="flex bg-emerald-700 hover:bg-emerald-300 text-white font-bold py-2 px-4 mt-2 rounded hover:cursor-pointer" type="button" id="edit-button-noticia-editar" onclick="actualizarInformacionUsuarioIndividual()">Editar</button>
                            <button class="flex bg-rose-700 hover:bg-rose-300 text-white font-bold py-2 px-4 mt-2 rounded hover:cursor-pointer" type="button" id="delete-usuario-inidividual" onclick="deleteUsuarioIndividual()">Eliminar Usuario</button>

                        </div>
                        <div id="informacionusuarioindividualbloque2" class="w-[100%] h-auto flex flex-col justify-center items-center mt-4">
                            <div id="totalinmueblesasignados" class="w-[100%] h-auto flex flex-col justify-center items-center mb-3 rounded-lg shadow-lg bg-blue-50 pb-2">
                                <h2 class="text-center font-sans weight-bold text-lg w-full mt-4">Total de inmuebles asignados</h2>
                                <p id="totalinmueblesasignadostext" class="text-center font-sans text-lg leading-6 w-full">0</p>
                                <div id="leyendaDeColoresinmuebles" class="w-[100%] h-auto flex flex-col justify-center items-center">
                                    <p>Última actualización:</p>
                                    <div class="text-center py-1 font-sans text-sm leading-6 gap-3 flex flex-row items-center justify-center">
                                        <p class="text-red-600">> 90 días </p>
                                        <p class="text-yellow-600">> 30 días </p>
                                        <p class="text-green-600">
                                            < 30 días</p>
                                    </div>
                                </div>
                                <div id="tablainmueblesasignados" class="w-[100%] h-auto flex flex-col justify-center items-center">
                                </div>
                            </div>
                            <div id="totalnoticiasasignadascontainer" class="w-[100%] h-auto flex flex-col justify-center items-center mb-3 mt-4 rounded-lg bg-blue-50 shadow-lg">
                                <div id="porcentajenoticias" class="w-[100%] h-auto flex flex-col justify-center items-center mb-3 mt-4">
                                    <h2 class="text-center font-sans weight-bold text-lg w-full">Noticias</h2>
                                    <p id="totalnoticiasasignadas" class="text-center font-sans text-lg leading-6 w-full">0</p>
                                </div>
                                <div id="leyendaDeColoresnoticias" class="w-[100%] h-auto flex flex-col justify-center items-center">
                                    <p>Última actualización:</p>
                                    <div class="text-center py-1 font-sans text-sm leading-6 gap-3 flex flex-row items-center justify-center">
                                        <p class="text-red-600">> 90 días </p>
                                        <p class="text-yellow-600">> 30 días </p>
                                        <p class="text-green-600">
                                            < 30 días</p>
                                    </div>
                                </div>
                                <div id="tablanoticiasasignadas" class="w-[100%] h-auto flex flex-col justify-center items-center">
                                </div>

                            </div>
                            <div id="totalencargosasignadoscontainer" class="w-[100%] h-auto flex flex-col justify-center items-center mb-3 mt-4 rounded-lg bg-blue-50 shadow-lg">
                                <div id="porcentajeencargos" class="w-[100%] h-auto flex flex-col justify-center items-center mb-3 mt-4">
                                    <h2 class="text-center font-sans weight-bold text-lg w-full">Encargos</h2>
                                    <p id="totalencargosasignados" class="text-center font-sans text-lg leading-6 w-full">0</p>
                                </div>
                                <div id="leyendaDeColoresencargosindividual" class="w-[100%] h-auto flex flex-col justify-center items-center">
                                    <p>Última actualización:</p>
                                    <div class="text-center py-1 font-sans text-sm leading-6 gap-3 flex flex-row items-center justify-center">
                                        <p class="text-red-600">> 90 días </p>
                                        <p class="text-yellow-600">> 30 días </p>
                                        <p class="text-green-600">
                                            < 30 días</p>
                                    </div>
                                </div>
                                <div id="tablaencargosasignados" class="w-[100%] h-auto flex flex-col justify-center items-center">
                                </div>

                                <button class="flex bg-red-700 hover:bg-red-900 text-white bottom-0 absolute font-bold py-2 px-4 mt-2 rounded hover:cursor-pointer" type="button" id="cerrar-info-individual" onclick="cerrarInformacionUsuarioIndividual()">Cerrar</button>
                            </div>
                        </div>


                    </div>
                </div>



                <input type="hidden" id="hidden-id-user" value="">
                <input type="hidden" id="hidden-id-user-administar" value="">
    </main>




    <script>
        var isDesplegarInformacionUsuario = true; // Variable to track the current function
        var isDesplegarInformacionUsuarioAllUsers = true;
        getUserData();


        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        function updateTime() {
            const clockElement = document.getElementById('clock-settings');
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
            const imgprofilephoto = document.getElementById('img-profile-photo-informacion-usuario');
            const imgprofilephotoedit = document.getElementById('img-profile-photo-informacion-usuario-edicion');
            const nombreinformacionusuario = document.getElementById('nombre-informacion-usuario');
            const emailinformacionusuario = document.getElementById('email-informacion-usuario');
            const passwordinformacionusuario = document.getElementById('password-informacion-usuario');
            const admininformacionusuario = document.getElementById('admin-informacion-usuario');
            const admininformacionusuarioedicionadmin = document.getElementById('admin-informacion-usuario-edicion-admin');
            const admininformacionusuarioedicioncomercial = document.getElementById('admin-informacion-usuario-edicion-comercial');
            const nombreinformacionusuarioedicion = document.getElementById('nombre-informacion-usuario-edicion');
            const apellidoinformacionusuarioedicion = document.getElementById('apellido-informacion-usuario-edicion');
            const emailinformacionusuarioedicion = document.getElementById('email-informacion-usuario-edicion');
            const passwordinformacionusuarioedicion = document.getElementById('password-informacion-usuario-edicion');
            const rolinformacionusuarioedicion = document.getElementById('rol-informacion-usuario-edicion');
            const roledicion = document.getElementById('rol-edicion');
            const containerinformacionusuarioallusers = document.getElementById('container-informacion-usuario-allusers');
            const bloquesinformacionusuarioallusers = document.getElementById('bloques-informacion-usuario-allusers');
            const tablaallusers = document.getElementById('tablaallusers');
            tablaallusers.innerHTML = '';


            fetch('fetchusersdatabase.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Parse JSON response
                })
                .then(data => {
                    // Handle the data here
                    data.forEach(user => {
                        const userrow = document.createElement('div');
                        userrow.classList.add('flex', 'flex-row', 'justify-between', 'items-center', 'gap-2', 'w-full', 'h-auto', 'py-2', 'border-b', 'border-gray-400', 'mt-2', 'px-8');
                        tablaallusers.appendChild(userrow);
                        const nombreusuario = document.createElement('p');
                        nombreusuario.classList.add('text-md', 'font-bold', 'text-slate-800');
                        nombreusuario.innerText = user.name + ' ' + user.apellido;
                        userrow.appendChild(nombreusuario);
                        const edituser = document.createElement('div');
                        userrow.appendChild(edituser);

                        // Create the SVG element
                        const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
                        svg.setAttribute("xmlns", "http://www.w3.org/2000/svg");
                        svg.setAttribute("width", "1.75em");
                        svg.setAttribute("height", "1.75em");
                        svg.setAttribute("viewBox", "0 0 1024 1024");


                        // Create the path element
                        const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
                        path.setAttribute("fill", "currentColor");
                        path.setAttribute("d", "M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512c282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0m0 961.008c-247.024 0-448-201.984-448-449.01c0-247.024 200.976-448 448-448s448 200.977 448 448s-200.976 449.01-448 449.01M736 480H544V288c0-17.664-14.336-32-32-32s-32 14.336-32 32v192H288c-17.664 0-32 14.336-32 32s14.336 32 32 32h192v192c0 17.664 14.336 32 32 32s32-14.336 32-32V544h192c17.664 0 32-14.336 32-32s-14.336-32-32-32");

                        // Append the path to the SVG
                        svg.appendChild(path);

                        // Append SVG to button
                        edituser.appendChild(svg);
                        edituser.classList.add('hover:cursor-pointer', 'hover:bg-zinc-800', 'rounded-full', 'hover:font-extrabold', 'hover:text-white');
                        edituser.id = user.id;
                        edituser.setAttribute("onclick", "verMasInfoUserIndividual(this)");

                    })
                    hideLoadingScreenSettings();

                })


            fetch('fetchusers.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Parse JSON response
                })
                .then(data => {
                    // Handle the data here
                    console.log("User data:", data); // Print the data to the console
                    // Display the profile photos
                    data.forEach(user => {
                        if (user.profile_photo) {
                            imgprofilephoto.src = "data:image/jpeg;base64," + user.profile_photo;
                            imgprofilephotoedit.src = "data:image/jpeg;base64," + user.profile_photo;
                        } else if (user.profile_photo == null) {
                            const textonprofilephoto = document.createElement('p');
                            textonprofilephoto.textContent = "No hay foto";
                            const profilephotocontainer = document.getElementById('profile-photo-informacion-usuario');
                            profilephotocontainer.appendChild(textonprofilephoto);
                            const imgprofilephoto = document.getElementById('img-profile-photo-informacion-usuario');
                            imgprofilephoto.classList.add('hidden');
                        }

                        nombreinformacionusuario.innerHTML = "Nombre:" + "</br>" + user.name + " " + user.apellido;
                        emailinformacionusuario.innerHTML = "Email: " + "</br>" + user.email;
                        passwordinformacionusuario.innerHTML = "Contraseña: " + "</br>" + user.password;
                        if (user.admin === 1) {
                            admininformacionusuario.innerHTML = "Rol:" + "</br>" + "Administrador";
                        } else {
                            admininformacionusuario.innerHTML = "Rol:" + "</br>" + "Comercial";
                        }
                    })

                    // Fetch user information about inmuebles assigned
                    const nombreCompletoAntiguo = document.getElementById('nombre-informacion-usuario').textContent;
                    const nombreSinPrefijo = nombreCompletoAntiguo.replace('Nombre:', '').trim();
                    const responsable = nombreSinPrefijo;
                    const totalinmueblesasigndosUsuarioIniciado = document.getElementById('totalinmueblesasignadosUsuarioIniciado');
                    const totalinmueblesasigndosUsuarioIniciadotext = document.getElementById('totalinmueblesasignadostextUsuarioIniciado');
                    totalinmueblesasigndosUsuarioIniciadotext.innerHTML = "";
                    const tablainmueblesasignadosUsuarioIniciado = document.getElementById('tablainmueblesasignadosUsuarioIniciado');
                    tablainmueblesasignadosUsuarioIniciado.innerHTML = "";
                    const tablanoticiasasignadasUsuarioIniciado = document.getElementById('tablanoticiasasignadasUsuarioIniciado');
                    tablanoticiasasignadasUsuarioIniciado.innerHTML = "";
                    const tablaencargosasignadosUsuarioIniciado = document.getElementById('tablaencargosasignadosUsuarioIniciado');
                    tablaencargosasignadosUsuarioIniciado.innerHTML = "";

                    fetch(`fetchinmueblesusuarios.php?responsable=${responsable}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json(); // Parse JSON response
                        })
                        .then(data => {
                            if (data.success) {
                                // Handle success case
                                console.log('User data retrieved successfully:', data);

                                totalinmueblesasignadostextUsuarioIniciado.innerHTML = data.totalInmuebles;
                                const leyendaDeColoresinmueblesUsuarioIniciado = document.getElementById('leyendaDeColoresinmueblesUsuarioIniciado');
                                console.log(data.totalInmuebles, 'putaaas');
                                if (data.totalInmuebles === 0) {
                                    leyendaDeColoresinmueblesUsuarioIniciado.classList.add('hidden');
                                } else {
                                    leyendaDeColoresinmueblesUsuarioIniciado.classList.remove('hidden');
                                }
                                data.data.forEach((element, index) => {
                                    const divinmueblesasignados = document.createElement('div');
                                    divinmueblesasignados.classList.add('rounded-lg', 'flex', 'flex-row', 'justify-center', 'items-center', 'gap-0', 'w-full', 'h-auto', 'py-1', 'border-b', 'border-gray-400', 'mt-0', 'px-8');
                                    tablainmueblesasignadosUsuarioIniciado.appendChild(divinmueblesasignados);
                                    if (element.commentupdatetime === 'red') {
                                        divinmueblesasignados.classList.add('bg-red-100');
                                    } else if (element.commentupdatetime === 'yellow') {
                                        divinmueblesasignados.classList.add('bg-yellow-100');
                                    } else if (element.commentupdatetime === 'green') {
                                        divinmueblesasignados.classList.add('bg-green-100');
                                    }
                                    const direccioninmuebleasignado = document.createElement('p');
                                    direccioninmuebleasignado.classList.add('text-center', 'py-1.5', 'font-sans', 'text-sm', 'leading-6');
                                    direccioninmuebleasignado.innerHTML = element.direccion;
                                    divinmueblesasignados.appendChild(direccioninmuebleasignado);
                                });

                                //NOTICIAS ASIGNADAS
                                //fetch del total de noticias asignadas
                                const totalnoticiasasignadasUsuarioIniciado = document.getElementById('totalnoticiasasignadasUsuarioIniciado');
                                const tablanoticiasasignadasUsuarioIniciado = document.getElementById('tablanoticiasasignadasUsuarioIniciado');
                                const leyendaDeColoresnoticiasUsuarioIniciado = document.getElementById('leyendaDeColoresnoticiasUsuarioIniciado');
                                console.log(data.inmueblesconnoticia.length);
                                totalnoticiasasignadasUsuarioIniciado.innerHTML = data.inmueblesconnoticia.length + " " + "(" + data.percentageNoticiastate.toFixed(0) + "%)";
                                if (data.inmueblesconnoticia.length === 0) {
                                    leyendaDeColoresnoticiasUsuarioIniciado.classList.add('hidden');
                                } else {
                                    leyendaDeColoresnoticiasUsuarioIniciado.classList.remove('hidden');
                                }
                                data.inmueblesconnoticia.forEach((element, index) => {
                                    const divnoticiasasignada = document.createElement('div');
                                    divnoticiasasignada.classList.add('rounded-lg', 'flex', 'flex-row', 'justify-center', 'items-center', 'gap-0', 'w-full', 'h-auto', 'py-1', 'border-b', 'border-gray-400', 'mt-0', 'px-8');
                                    tablanoticiasasignadasUsuarioIniciado.appendChild(divnoticiasasignada);
                                    if (element.noticiaupdatetime === 'red') {
                                        divnoticiasasignada.classList.add('bg-red-100');
                                    } else if (element.noticiaupdatetime === 'yellow') {
                                        divnoticiasasignada.classList.add('bg-yellow-100');
                                    } else if (element.noticiaupdatetime === 'green') {
                                        divnoticiasasignada.classList.add('bg-green-100');
                                    }

                                    const direccionnoticiaasignada = document.createElement('p');
                                    direccionnoticiaasignada.classList.add('text-center', 'py-1.5', 'font-sans', 'text-sm', 'leading-6');
                                    direccionnoticiaasignada.innerHTML = element.direccion;
                                    divnoticiasasignada.appendChild(direccionnoticiaasignada);
                                });

                                //ENCARGOS ASIGNADAS
                                //fetch del total de encargos asignados
                                const totalencargosasignados = document.getElementById('totalencargosasignadosUsuarioIniciado');
                                const tablaencargosasignados = document.getElementById('tablaencargosasignadosUsuarioIniciado');
                                const leyendaDeColoresencargos = document.getElementById('leyendaDeColoresencargos');

                                console.log('inmueblesconencargos', data.inmueblesconencargos.length);
                                totalencargosasignados.innerHTML = data.inmueblesconencargos.length + " " + "(" + data.percentageEncargostate.toFixed(0) + "%)";

                                if (data.inmueblesconencargos.length === 0) {
                                    leyendaDeColoresencargos.classList.add('hidden');
                                } else {
                                    leyendaDeColoresencargos.classList.remove('hidden');
                                }

                                data.inmueblesconencargos.forEach((element, index) => {
                                    const divencargosasignado = document.createElement('div');
                                    divencargosasignado.classList.add('rounded-lg', 'flex', 'flex-row', 'justify-center', 'items-center', 'gap-0', 'w-full', 'h-auto', 'py-1', 'border-b', 'border-gray-400', 'mt-0', 'px-8');
                                    tablaencargosasignados.appendChild(divencargosasignado);
                                    if (element.encargoupdatetime === 'red') {
                                        divencargosasignado.classList.add('bg-red-100');
                                    } else if (element.encargoupdatetime === 'yellow') {
                                        divencargosasignado.classList.add('bg-yellow-100');
                                    } else if (element.encargoupdatetime === 'green') {
                                        divencargosasignado.classList.add('bg-green-100');
                                    }

                                    const direccionencargoasignado = document.createElement('p');
                                    direccionencargoasignado.classList.add('text-center', 'py-1.5', 'font-sans', 'text-sm', 'leading-6');
                                    direccionencargoasignado.innerHTML = element.direccion;
                                    divencargosasignado.appendChild(direccionencargoasignado);
                                });

                            } else {
                                // Handle error case
                                console.log('Error:', data);
                                totalinmueblesasignadostextUsuarioIniciado.innerHTML = "0";
                            }
                        })
                        .catch(error => {
                            console.log('Error:', error);
                        });




                    //Display the name of the user in the header
                    document.getElementById('nombre-header-settings').innerHTML = "¿Qué quieres hacer " + data[0].name + "?";

                    //Display data on edit mode
                    nombreinformacionusuarioedicion.value = data[0].name;
                    apellidoinformacionusuarioedicion.value = data[0].apellido;
                    emailinformacionusuarioedicion.value = data[0].email;
                    passwordinformacionusuarioedicion.value = data[0].password;

                    const roledicion = document.getElementById('rol-edicion');
                    // Display or not display the admin editing mode
                    if (data[0].admin === 0) {
                        roledicion.classList.add('hidden');
                        bloquesinformacionusuarioallusers.classList.add('hidden');
                    } else if (data[0].admin === 1) {
                        roledicion.classList.remove('hidden');
                        bloquesinformacionusuarioallusers.classList.remove('hidden');
                    }
                    // Check or not check the admin button radio
                    if (data[0].admin === 1) {
                        admininformacionusuarioedicionadmin.checked = true;
                    } else if (data[0].admin === 0) {
                        admininformacionusuarioedicioncomercial.checked = true;
                    }

                    const hiddenuserid = document.getElementById('hidden-id-user');
                    hiddenuserid.value = data[0].id;
                    console.log(hiddenuserid.value);
                })


            isDesplegarInformacionUsuarioAllUsers = true;
            hideLoadingScreenSettings();
        }



        // Variable to track the current function

        function toggleDesplegarInformacionUsuario() {
            if (isDesplegarInformacionUsuario) {
                desplegarInformacionUsuario(); // Call desplegarInformacionUsuario() if it's currently active
            } else {
                plegarInformacionUsuario(); // Call plegarInformacionUsuario() if it's currently active
            }
            isDesplegarInformacionUsuario = !isDesplegarInformacionUsuario; // Toggle the variable for the next click
            console.log(isDesplegarInformacionUsuario);
        }


        function desplegarInformacionUsuario() {
            console.log('clicked');
            const arrowDown = document.getElementById('arrow-down-settings-infousuario');
            const arrowUp = document.getElementById('arrow-up-settings-infousuario');
            const containerinformacionusuario = document.getElementById('container-informacion-usuario');
            arrowUp.classList.add('block');
            arrowUp.classList.remove('hidden');
            arrowDown.classList.add('hidden');
            arrowDown.classList.remove('block');
            containerinformacionusuario.classList.add('flex');
            containerinformacionusuario.classList.remove('hidden');
        }

        function plegarInformacionUsuario() {
            const arrowDown = document.getElementById('arrow-down-settings-infousuario');
            const arrowUp = document.getElementById('arrow-up-settings-infousuario');
            const containerinformacionusuario = document.getElementById('container-informacion-usuario');
            arrowDown.classList.remove('hidden');
            arrowDown.classList.add('block');
            arrowUp.classList.remove('block');
            arrowUp.classList.add('hidden');
            containerinformacionusuario.classList.remove('flex');
            containerinformacionusuario.classList.add('hidden');
            const containerinformacionusuarioedicion = document.getElementById('container-informacion-usuario-edicion');
            containerinformacionusuarioedicion.classList.remove('flex');
            containerinformacionusuarioedicion.classList.add('hidden');
        }

        function toggleDesplegarInformacionUsuarioAllUsers() {
            if (isDesplegarInformacionUsuarioAllUsers) {
                desplegarInformacionUsuarioAllUsers(); // Call desplegarInformacionUsuario() if it's currently active
            } else {
                plegarInformacionUsuarioAllUsers(); // Call plegarInformacionUsuario() if it's currently active
            }
            isDesplegarInformacionUsuarioAllUsers = !isDesplegarInformacionUsuarioAllUsers; // Toggle the variable for the next click
            console.log(isDesplegarInformacionUsuarioAllUsers);
        }

        function desplegarInformacionUsuarioAllUsers() {
            const arrowDown = document.getElementById('arrow-down-settings-infousuario-allusers');
            const arrowUp = document.getElementById('arrow-up-settings-infousuario-allusers');
            const containerinformacionusuarioallusers = document.getElementById('container-informacion-usuario-allusers');
            arrowUp.classList.add('block');
            arrowUp.classList.remove('hidden');
            arrowDown.classList.add('hidden');
            arrowDown.classList.remove('block');
            containerinformacionusuarioallusers.classList.add('flex');
            containerinformacionusuarioallusers.classList.remove('hidden');
        }

        function plegarInformacionUsuarioAllUsers() {
            const arrowDown = document.getElementById('arrow-down-settings-infousuario-allusers');
            const arrowUp = document.getElementById('arrow-up-settings-infousuario-allusers');
            const containerinformacionusuarioallusers = document.getElementById('container-informacion-usuario-allusers');
            arrowDown.classList.remove('hidden');
            arrowDown.classList.add('block');
            arrowUp.classList.remove('block');
            arrowUp.classList.add('hidden');
            containerinformacionusuarioallusers.classList.remove('flex');
            containerinformacionusuarioallusers.classList.add('hidden');
            const containerinformacionusuarioindividual = document.getElementById('informacion-usuario-individual');
            containerinformacionusuarioindividual.classList.remove('flex');
            containerinformacionusuarioindividual.classList.add('hidden');
            hideInformacionUsuarioIndividualModoEdicion();
            hideLoadingScreenInformacionUsuarioIndividual();
        }

        function showInformacionUsuarioModoEdicion() {
            const containerinformacionusuario = document.getElementById('container-informacion-usuario');
            containerinformacionusuario.classList.remove('flex');
            containerinformacionusuario.classList.add('hidden');
            const containerinformacionusuarioedicion = document.getElementById('container-informacion-usuario-edicion');
            containerinformacionusuarioedicion.classList.remove('hidden');
            containerinformacionusuarioedicion.classList.add('flex');
        }

        function hideInformacionUsuarioModoEdicion() {
            const containerinformacionusuario = document.getElementById('container-informacion-usuario');
            containerinformacionusuario.classList.remove('hidden');
            containerinformacionusuario.classList.add('flex');
            const containerinformacionusuarioedicion = document.getElementById('container-informacion-usuario-edicion');
            containerinformacionusuarioedicion.classList.remove('flex');
            containerinformacionusuarioedicion.classList.add('hidden');
        }

        // Show & Hide información usuario individual MODO EDICION
        function showInformacionUsuarioIndividualModoEdicion() {
            showLoadingScreenInformacionUsuarioIndividualModoEdicion();
            const containerinformacionusuarioindividual = document.getElementById('informacionusuarioindividualbloque1');
            containerinformacionusuarioindividual.classList.remove('flex');
            containerinformacionusuarioindividual.classList.add('hidden');
            const containerinformacionusuarioindividualedicion = document.getElementById('informacionusuarioindividualbloque1-edicion');
            containerinformacionusuarioindividualedicion.classList.remove('hidden');
            containerinformacionusuarioindividualedicion.classList.add('flex');
            fetchInformacionUsuarioIndividual();
        }

        function hideInformacionUsuarioIndividualModoEdicion() {
            const containerinformacionusuarioindividual = document.getElementById('informacionusuarioindividualbloque1');
            containerinformacionusuarioindividual.classList.remove('hidden');
            containerinformacionusuarioindividual.classList.add('flex');
            const containerinformacionusuarioindividualedicion = document.getElementById('informacionusuarioindividualbloque1-edicion');
            containerinformacionusuarioindividualedicion.classList.remove('flex');
            containerinformacionusuarioindividualedicion.classList.add('hidden');
        }

        function updateUserInformation() {
            const nombreinformacionusuarioedicion = document.getElementById('nombre-informacion-usuario-edicion');
            const apellidoinformacionusuarioedicion = document.getElementById('apellido-informacion-usuario-edicion');
            const emailinformacionusuarioedicion = document.getElementById('email-informacion-usuario-edicion');
            const passwordinformacionusuarioedicion = document.getElementById('password-informacion-usuario-edicion');
            const radioadmininformacionusuarioedicionadmin = document.querySelector('input[name="radio-admin-informacion-usuario"]:checked');
            const fileuploadavatar = document.getElementById('file-upload-avatar');

            const nombre = nombreinformacionusuarioedicion.value;
            const apellido = apellidoinformacionusuarioedicion.value;
            const email = emailinformacionusuarioedicion.value;
            const password = passwordinformacionusuarioedicion.value;
            const admin = radioadmininformacionusuarioedicionadmin.value;
            console.log(admin);

            const nombreCompletoAntiguo = document.getElementById('nombre-informacion-usuario').textContent;
            const nombreSinPrefijo = nombreCompletoAntiguo.replace('Nombre:', '').trim();
            console.log('nombreSinPrefijo', nombreSinPrefijo);

            const nombreCompletoNuevo = nombre + " " + apellido;
            console.log('nombreCompletoNuevo', nombreCompletoNuevo);


            fetch(`updateuserinformation.php?nombre=${nombre}&apellido=${apellido}&email=${email}&password=${password}&admin=${admin}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        // Handle success case
                        console.log('User data updated successfully:', data);
                        fetch(`updateNombreResponsable.php?nombreCompletoAntiguo=${nombreSinPrefijo}&nombreCompletoNuevo=${nombreCompletoNuevo}`)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json();
                            })
                            .then(data => {
                                if (data.success) {
                                    // Handle success case
                                    console.log('Responsables actualizados correctamente:', data);
                                } else {
                                    // Handle failure case
                                    console.error('Error updating responsables:', data.message);
                                }
                            })
                            .catch(error => {
                                console.error('Error fetching responsables:', error);
                            });
                        hideToastReload();
                        window.location.href = "index.php";
                    } else {
                        // Handle failure case
                        console.error('Error updating user data:', data.message);
                        Toastify({
                            text: "No se ha modificado ningún dato.",
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
                        hideToastReload();
                    }
                }).catch(error => {
                    console.error('Error fetching user data:', error);
                });
        }

        function updateProfilePhoto() {
            const sample_image = document.getElementsByName('sample_image')[0];
            const imgprofilephoto = document.getElementById('img-profile-photo-informacion-usuario');
            const imgprofilephotoedit = document.getElementById('img-profile-photo-informacion-usuario-edicion');

            const MAX_FILE_SIZE_BYTES = 100 * 1024; // 100 KB

            const compressAndUpload = (file) => {
                const reader = new FileReader();

                reader.onload = function(event) {
                    const img = new Image();
                    img.onload = function() {
                        const canvas = document.createElement('canvas');
                        let width = img.width;
                        let height = img.height;

                        // Calculate new dimensions if necessary to reduce file size
                        const aspectRatio = width / height;
                        const maxDimension = Math.sqrt(MAX_FILE_SIZE_BYTES / 0.75); // Approximate size reduction for WebP compression

                        if (width > maxDimension || height > maxDimension) {
                            if (aspectRatio > 1) {
                                width = maxDimension;
                                height = width / aspectRatio;
                            } else {
                                height = maxDimension;
                                width = height * aspectRatio;
                            }
                        }

                        canvas.width = width;
                        canvas.height = height;

                        const ctx = canvas.getContext('2d');
                        ctx.drawImage(img, 0, 0, width, height);

                        canvas.toBlob((blob) => {
                            const formData = new FormData();
                            formData.append('sample_image', blob, 'image.webp');

                            fetch('updateprofilephoto.php', {
                                    method: 'POST',
                                    body: formData
                                })
                                .then(response => response.json())
                                .then(data => {
                                    imgprofilephoto.src = "";
                                    imgprofilephotoedit.src = "";
                                    imgprofilephoto.src = "data:image/jpeg;base64," + data.profile_photo;
                                    imgprofilephotoedit.src = "data:image/jpeg;base64," + data.profile_photo;
                                })
                                .catch(error => {
                                    console.error('Error uploading image:', error);
                                });
                        }, 'image/webp', 0.8); // Adjust quality (0.8 is a reasonable starting point)
                    };

                    img.src = event.target.result;
                };

                reader.readAsDataURL(file);
            };

            if (sample_image.files.length > 0) {
                const file = sample_image.files[0];
                if (file.type.match(/image.*/)) {
                    compressAndUpload(file);
                } else {
                    console.error('Invalid file type. Please upload an image file.');
                }
            } else {
                console.error('No file selected.');
            }
        }


        // UPDATE INDIVIDUAL PROFILE PHOTO
        function updateProfilePhotoUsuarioIndividual() {
            const sample_image_individual = document.getElementsByName('sample_image_individual')[0];
            const imgprofilephoto = document.getElementById('img-profile-photo-informacion-usuario-individual');
            const imgprofilephotoedit = document.getElementById('img-profile-photo-informacion-usuario-individual-edicion');
            const hiideniduseradministar = document.getElementById('hidden-id-user-administar');
            const id = hiideniduseradministar.value;

            const MAX_FILE_SIZE_BYTES = 100 * 1024; // 100 KB

            const compressAndUpload = (file) => {
                const reader = new FileReader();

                reader.onload = function(event) {
                    const img = new Image();
                    img.onload = function() {
                        const canvas = document.createElement('canvas');
                        let width = img.width;
                        let height = img.height;

                        // Calculate new dimensions if necessary to reduce file size
                        const aspectRatio = width / height;
                        const maxDimension = Math.sqrt(MAX_FILE_SIZE_BYTES / 0.75); // Approximate size reduction for WebP compression

                        if (width > maxDimension || height > maxDimension) {
                            if (aspectRatio > 1) {
                                width = maxDimension;
                                height = width / aspectRatio;
                            } else {
                                height = maxDimension;
                                width = height * aspectRatio;
                            }
                        }

                        canvas.width = width;
                        canvas.height = height;

                        const ctx = canvas.getContext('2d');
                        ctx.drawImage(img, 0, 0, width, height);

                        canvas.toBlob((blob) => {
                            const formData = new FormData();
                            formData.append('sample_image_individual', blob, 'image.webp');
                            formData.append('id', id);

                            fetch('updateprofilephotoIndividual.php', {
                                    method: 'POST',
                                    body: formData
                                })
                                .then(response => response.json())
                                .then(data => {
                                    imgprofilephoto.src = "";
                                    imgprofilephotoedit.src = "";
                                    imgprofilephoto.src = "data:image/jpeg;base64," + data.profile_photo;
                                    imgprofilephotoedit.src = "data:image/jpeg;base64," + data.profile_photo;
                                })
                                .catch(error => {
                                    console.error('Error uploading image:', error);
                                });
                        }, 'image/webp', 0.8); // Adjust quality (0.8 is a reasonable starting point)
                    };

                    img.src = event.target.result;
                };

                reader.readAsDataURL(file);
            };

            if (sample_image_individual.files.length > 0) {
                const file = sample_image_individual.files[0];
                if (file.type.match(/image.*/)) {
                    compressAndUpload(file);
                } else {
                    console.error('Invalid file type. Please upload an image file.');
                }
            } else {
                console.error('No file selected.');
            }
        }


        // UPDATE INDIVIDUAL PROFILE INFORMATION
        function actualizarInformacionUsuarioIndividual() {
            showLoadingScreenInformacionUsuarioIndividual();
            const nombreinformacionusuarioedicion = document.getElementById('nombre-informacion-usuario-edicion-individual');
            const apellidoinformacionusuarioedicion = document.getElementById('apellido-informacion-usuario-edicion-individual');
            const emailinformacionusuarioedicion = document.getElementById('email-informacion-usuario-edicion-individual');
            const passwordinformacionusuarioedicion = document.getElementById('password-informacion-usuario-edicion-individual');
            const radioadmininformacionusuarioedicionadmin = document.querySelector('input[name="radio-admin-informacion-usuario-individual"]:checked');
            const hiddeniduseradministar = document.getElementById('hidden-id-user-administar');
            const id = hiddeniduseradministar.value;

            const nombre = nombreinformacionusuarioedicion.value;
            const apellido = apellidoinformacionusuarioedicion.value;
            const email = emailinformacionusuarioedicion.value;
            const password = passwordinformacionusuarioedicion.value;
            const admin = radioadmininformacionusuarioedicionadmin.value;

            const nombreCompletoAntiguo = document.getElementById('nombre-informacion-usuario-individual').textContent;
            const nombreSinPrefijo = nombreCompletoAntiguo.replace('Nombre:', '').trim();
            console.log('nombreSinPrefijo', nombreSinPrefijo);

            const nombreCompletoNuevo = nombre + " " + apellido;
            console.log('nombreCompletoNuevo', nombreCompletoNuevo);

            fetch(`checkDeleteUser.php?id=${id}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Parse JSON response
                })
                .then(data => {
                    if (data.success) {
                        fetch(`updateuserinformationindividual.php?nombre=${nombre}&apellido=${apellido}&email=${email}&password=${password}&admin=${admin}&id=${id}`)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json();
                            })
                            .then(data => {
                                if (data.success) {
                                    // Handle success case
                                    console.log('User data updated successfully:', data);
                                    fetch(`updateNombreResponsable.php?nombreCompletoAntiguo=${nombreSinPrefijo}&nombreCompletoNuevo=${nombreCompletoNuevo}`)
                                        .then(response => {
                                            if (!response.ok) {
                                                throw new Error('Network response was not ok');
                                            }
                                            return response.json();
                                        })
                                        .then(data => {
                                            if (data.success) {
                                                // Handle success case
                                                console.log('Responsables actualizados correctamente:', data);
                                            } else {
                                                // Handle failure case
                                                console.error('Error updating responsables:', data.message);
                                            }
                                        })
                                        .catch(error => {
                                            console.error('Error fetching responsables:', error);
                                        });

                                    hideInformacionUsuarioIndividualModoEdicion();
                                    fetchInformacionUsuarioIndividual();
                                    getUserData();
                                    hideLoadingScreenInformacionUsuarioIndividual();
                                    isDesplegarInformacionUsuarioAllUsers = false;

                                } else {
                                    // Handle failure case
                                    hideInformacionUsuarioIndividualModoEdicion();
                                    hideLoadingScreenInformacionUsuarioIndividual();
                                    isDesplegarInformacionUsuarioAllUsers = false;
                                }
                            }).catch(error => {
                                console.error('Error fetching user data:', error);
                            });
                    } else {
                        hideLoadingScreenInformacionUsuarioIndividual();
                        fetch(`updateuserinformationindividual.php?nombre=${nombre}&apellido=${apellido}&email=${email}&password=${password}&admin=${admin}&id=${id}`)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json();
                            })
                            .then(data => {
                                if (data.success) {
                                    // Handle success case
                                    console.log('User data updated successfully:', data);
                                    fetch(`updateNombreResponsable.php?nombreCompletoAntiguo=${nombreSinPrefijo}&nombreCompletoNuevo=${nombreCompletoNuevo}`)
                                        .then(response => {
                                            if (!response.ok) {
                                                throw new Error('Network response was not ok');
                                            }
                                            return response.json();
                                        })
                                        .then(data => {
                                            if (data.success) {
                                                // Handle success case
                                                console.log('Responsables actualizados correctamente:', data);
                                            } else {
                                                // Handle failure case
                                                console.error('Error updating responsables:', data.message);
                                            }
                                        })
                                        .catch(error => {
                                            console.error('Error fetching responsables:', error);
                                        });

                                    hideInformacionUsuarioIndividualModoEdicion();
                                    fetchInformacionUsuarioIndividual();
                                    getUserData();

                                    isDesplegarInformacionUsuarioAllUsers = false;

                                } else {
                                    // Handle failure case
                                    hideInformacionUsuarioIndividualModoEdicion();
                                    hideLoadingScreenInformacionUsuarioIndividual();
                                    isDesplegarInformacionUsuarioAllUsers = false;
                                }
                            }).catch(error => {
                                console.error('Error fetching user data:', error);
                            });

                        function redirectWithDelay() {
                            displayToastReloadEdicion();

                            setTimeout(function() {
                                hideToastReloadEdicion();
                                window.location.href = "index.php";
                            }, 4000); // 3000 milisegundos = 3 segundos
                        }
                        redirectWithDelay();
                    }
                }).catch(error => {
                    console.error('Error fetching user data:', error);
                });
        }


        // DELETE Información de usuario idividual
        function deleteUsuarioIndividual() {
            showLoadingScreenInformacionUsuarioIndividual();
            const id = document.getElementById('hidden-id-user-administar').value;
            const nombreCompletoAntiguo = document.getElementById('nombre-informacion-usuario-individual').textContent;
            const nombreSinPrefijo = nombreCompletoAntiguo.replace('Nombre:', '').trim();
            console.log('nombreSinPrefijo', nombreSinPrefijo);

            fetch(`checkDeleteUser.php?id=${id}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        // Handle success case
                        console.log('User data deleted successfully:', data);
                        fetch(`deleteUser.php?id=${id}&nombreCompletoAntiguo=${nombreSinPrefijo}`)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json();
                            })
                            .then(data => {
                                if (data.success) {
                                    // Handle success case
                                    console.log('User deleted successfully:', data);
                                    Toastify({
                                        text: "Usuario Eliminado",
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
                                    cerrarInformacionUsuarioIndividual();
                                    hideLoadingScreenInformacionUsuarioIndividual();
                                } else {
                                    // Handle failure case
                                    console.error('Error deleting user:', data.message);
                                }
                            })
                            .catch(error => {
                                console.error('Error fetching user:', error);
                            });
                    } else {
                        // Handle failure case
                        Toastify({
                            text: "No puedes borrar tu propia cuenta.",
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
                        hideLoadingScreenInformacionUsuarioIndividual();
                    }
                }).catch(error => {
                    console.error('Error fetching user data:', error);
                });

        }

        function displayToastReload() {
            const toastReload = document.getElementById('toast-reload');
            toastReload.classList.remove('hidden');
            toastReload.classList.add('flex');
        }

        function hideToastReload() {
            const toastReload = document.getElementById('toast-reload');
            toastReload.classList.remove('flex');
            toastReload.classList.add('hidden');
        }

        function displayToastReloadEdicion() {
            const toastReload = document.getElementById('toast-reload-edicion');
            toastReload.classList.remove('hidden');
            toastReload.classList.add('flex');
        }

        function hideToastReloadEdicion() {
            const toastReload = document.getElementById('toast-reload-edicion');
            toastReload.classList.remove('flex');
            toastReload.classList.add('hidden');
        }

        function hideLoadingScreenSettings() {
            console.log("Hiding loading screen...");
            const loadingScreen = document.getElementById('loading-screen-settings');
            loadingScreen.classList.remove('flex');
            loadingScreen.classList.add('hidden');
        }

        function showLoadingScreenSettings() {
            console.log("Hiding loading screen...");
            const loadingScreen = document.getElementById('loading-screen-settings');
            loadingScreen.classList.add('flex');
            loadingScreen.classList.remove('hidden');
        }

        function agregarUsuario() {
            const agregarusuariocontainer = document.getElementById('agregar-user-container');
            agregarusuariocontainer.classList.remove('flex');
            agregarusuariocontainer.classList.add('hidden');
            const agregarusuarioform = document.getElementById('agregar-usuario-form');
            agregarusuarioform.classList.remove('hidden');
            agregarusuarioform.classList.add('flex');
        }

        function cerrarFormularioAgregarUsuario() {
            const agregarusuarioform = document.getElementById('agregar-usuario-form');
            agregarusuarioform.classList.remove('flex');
            agregarusuarioform.classList.add('hidden');
            const agregarusuariocontainer = document.getElementById('agregar-user-container');
            agregarusuariocontainer.classList.remove('hidden');
            agregarusuariocontainer.classList.add('flex');
        }

        function insertUsuarioSQL() {
            const nombreinformacionusuarioagregar = document.getElementById('nombre-informacion-usuario-agregar');
            const apellidoinformacionusuarioagregar = document.getElementById('apellido-informacion-usuario-agregar');
            const emailinformacionusuarioagregar = document.getElementById('email-informacion-usuario-agregar');
            const passwordinformacionusuarioagregar = document.getElementById('password-informacion-usuario-agregar');
            const rolusuarioagregar = document.querySelector('input[name="radio-admin-informacion-usuario-agregar"]:checked');

            const nombre = nombreinformacionusuarioagregar.value;
            const apellido = apellidoinformacionusuarioagregar.value;
            const email = emailinformacionusuarioagregar.value;
            const password = passwordinformacionusuarioagregar.value;
            const admin = rolusuarioagregar.value;

            console.log(admin);

            fetch(`insertuserinformation.php?nombre=${nombre}&apellido=${apellido}&email=${email}&password=${password}&admin=${admin}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        // Handle success case
                        console.log('User data inserted successfully:', data);
                        Toastify({
                            text: "Usuario agregado",
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
                        getUserData();
                        cerrarFormularioAgregarUsuario();
                    } else {
                        // Handle failure case
                        console.error('Error inserting user data:', data.message);
                    }
                }).catch(error => {
                    console.error('Error fetching user data:', error);
                });
        }

        // Function to validate the form so no empty fields are submitted
        function validateForm() {
            // Get form inputs
            var nombre = document.getElementById('nombre-informacion-usuario-agregar').value;
            var apellido = document.getElementById('apellido-informacion-usuario-agregar').value;
            var email = document.getElementById('email-informacion-usuario-agregar').value;
            var password = document.getElementById('password-informacion-usuario-agregar').value;

            // Check if any input is empty
            if (!nombre || !apellido || !email || !password) {
                Toastify({
                    text: "Todos los campos son obligatorios.",
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
                return false;
            }

            // Check if email already exists
            return fetch(`fetchusersdatabase.php`)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    let emails = data.map(user => user.email);
                    console.log(emails);

                    if (emails.includes(email)) {
                        Toastify({
                            text: "Un usuario con ese email ya existe.",
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
                        return false;
                    } else {
                        // If all validations pass, proceed with form submission
                        insertUsuarioSQL();
                        return true;
                    }
                })
                .catch(error => {
                    console.error('Error fetching user data:', error);
                    return false;
                });
        }


        function verMasInfoUserIndividual(clickedDiv) {
            cerrarFormularioAgregarUsuario();
            showLoadingScreenInformacionUsuarioIndividual();
            const id = clickedDiv.id;
            console.log('ID:', id);

            const hiddenIdUserAdministar = document.getElementById('hidden-id-user-administar');
            hiddenIdUserAdministar.value = id;

            const informacionUsuarioIndividual = document.getElementById('informacion-usuario-individual');
            informacionUsuarioIndividual.classList.remove('hidden');
            informacionUsuarioIndividual.classList.add('flex');

            const containerinformacionusuarioallusers = document.getElementById('container-informacion-usuario-allusers');
            containerinformacionusuarioallusers.classList.remove('flex');
            containerinformacionusuarioallusers.classList.add('hidden');

            const imgProfilePhoto = document.getElementById('img-profile-photo-informacion-usuario-individual');
            const containerPhoto = document.getElementById('profile-photo-container');
            const nombreInformacionUsuarioIndividual = document.getElementById('nombre-informacion-usuario-individual');
            const emailInformacionUsuarioIndividual = document.getElementById('email-informacion-usuario-individual');
            const passwordInformacionUsuarioIndividual = document.getElementById('password-informacion-usuario-individual');
            const adminInformacionUsuarioIndividual = document.getElementById('admin-informacion-usuario-individual');
            const noImageText = document.getElementById('noimagetext');

            const totalinmueblesasignados = document.getElementById('totalinmueblesasignados');
            const totalinmueblesasignadostext = document.getElementById('totalinmueblesasignadostext');
            totalinmueblesasignadostext.innerHTML = "";
            const tablainmueblesasignados = document.getElementById('tablainmueblesasignados');
            tablainmueblesasignados.innerHTML = "";
            const tablanoticiasasignadas = document.getElementById('tablanoticiasasignadas');
            tablanoticiasasignadas.innerHTML = "";
            const tablaencargosasignados = document.getElementById('tablaencargosasignados');
            tablaencargosasignados.innerHTML = "";



            imgProfilePhoto.src = "";
            nombreInformacionUsuarioIndividual.innerHTML = "";
            emailInformacionUsuarioIndividual.innerHTML = "";
            passwordInformacionUsuarioIndividual.innerHTML = "";
            adminInformacionUsuarioIndividual.innerHTML = "";

            fetch(`fetchusersdatabaseID.php?id=${id}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Parse JSON response
                })
                .then(data => {
                    if (data.success) {
                        // Handle success case
                        console.log('User data inserted successfully:', data);
                        const nombreCompleto = data.data.name + " " + data.data.apellido;
                        if (data.data.profile_photo === null) {
                            containerPhoto.classList.add('hidden');
                            noImageText.classList.remove('hidden');
                        } else {
                            noImageText.classList.add('hidden');
                            containerPhoto.classList.remove('hidden');
                            imgProfilePhoto.src = "data:image/jpeg;base64," + data.data.profile_photo;
                        }
                        nombreInformacionUsuarioIndividual.innerHTML = "Nombre:</br>" + data.data.name + " " + data.data.apellido;
                        emailInformacionUsuarioIndividual.innerHTML = "Email:</br>" + data.data.email;
                        passwordInformacionUsuarioIndividual.innerHTML = "Contraseña:</br>" + data.data.password;
                        adminInformacionUsuarioIndividual.innerHTML = "Rol:</br>" + (data.data.admin === 1 ? "Administrador" : "Comercial");

                        const responsable = nombreCompleto;

                        fetch(`fetchinmueblesusuarios.php?responsable=${responsable}`)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json(); // Parse JSON response
                            })
                            .then(data => {
                                if (data.success) {
                                    // Handle success case
                                    console.log('User data retrieved successfully:', data);

                                    totalinmueblesasignadostext.innerHTML = data.totalInmuebles;
                                    const leyendaDeColoresinmuebles = document.getElementById('leyendaDeColoresinmuebles');
                                    console.log(data.totalInmuebles, 'putaaas');
                                    if (data.totalInmuebles === 0) {
                                        leyendaDeColoresinmuebles.classList.add('hidden');
                                    } else {
                                        leyendaDeColoresinmuebles.classList.remove('hidden');
                                    }
                                    data.data.forEach((element, index) => {
                                        const divinmueblesasignados = document.createElement('div');
                                        divinmueblesasignados.classList.add('rounded-lg', 'flex', 'flex-row', 'justify-center', 'items-center', 'gap-0', 'w-full', 'h-auto', 'py-1', 'border-b', 'border-gray-400', 'mt-0', 'px-8');
                                        tablainmueblesasignados.appendChild(divinmueblesasignados);
                                        if (element.commentupdatetime === 'red') {
                                            divinmueblesasignados.classList.add('bg-red-100');
                                        } else if (element.commentupdatetime === 'yellow') {
                                            divinmueblesasignados.classList.add('bg-yellow-100');
                                        } else if (element.commentupdatetime === 'green') {
                                            divinmueblesasignados.classList.add('bg-green-100');
                                        }

                                        const direccioninmuebleasignado = document.createElement('p');
                                        direccioninmuebleasignado.classList.add('text-center', 'py-1.5', 'font-sans', 'text-sm', 'leading-6');
                                        direccioninmuebleasignado.innerHTML = element.direccion;
                                        divinmueblesasignados.appendChild(direccioninmuebleasignado);
                                    });

                                    //NOTICIAS ASIGNADAS
                                    //fetch del total de noticias asignadas
                                    const totalnoticiasasignadas = document.getElementById('totalnoticiasasignadas');
                                    const tablanoticiasasignadas = document.getElementById('tablanoticiasasignadas');
                                    const leyendaDeColoresnoticias = document.getElementById('leyendaDeColoresnoticias');
                                    console.log(data.inmueblesconnoticia.length);
                                    totalnoticiasasignadas.innerHTML = data.inmueblesconnoticia.length + " " + "(" + data.percentageNoticiastate.toFixed(0) + "%)";
                                    if (data.inmueblesconnoticia.length === 0) {
                                        leyendaDeColoresnoticias.classList.add('hidden');
                                    } else {
                                        leyendaDeColoresnoticias.classList.remove('hidden');
                                    }
                                    data.inmueblesconnoticia.forEach((element, index) => {
                                        const divnoticiasasignada = document.createElement('div');
                                        divnoticiasasignada.classList.add('rounded-lg', 'flex', 'flex-row', 'justify-center', 'items-center', 'gap-0', 'w-full', 'h-auto', 'py-1', 'border-b', 'border-gray-400', 'mt-0', 'px-8');
                                        tablanoticiasasignadas.appendChild(divnoticiasasignada);
                                        if (element.noticiaupdatetime === 'red') {
                                            divnoticiasasignada.classList.add('bg-red-100');
                                        } else if (element.noticiaupdatetime === 'yellow') {
                                            divnoticiasasignada.classList.add('bg-yellow-100');
                                        } else if (element.noticiaupdatetime === 'green') {
                                            divnoticiasasignada.classList.add('bg-green-100');
                                        }

                                        const direccionnoticiaasignada = document.createElement('p');
                                        direccionnoticiaasignada.classList.add('text-center', 'py-1.5', 'font-sans', 'text-sm', 'leading-6');
                                        direccionnoticiaasignada.innerHTML = element.direccion;
                                        divnoticiasasignada.appendChild(direccionnoticiaasignada);
                                    });

                                    //ENCARGOS ASIGNADAS
                                    //fetch del total de encargos asignados
                                    const totalencargosasignados = document.getElementById('totalencargosasignados');
                                    const tablaencargosasignados = document.getElementById('tablaencargosasignados');
                                    const leyendaDeColoresencargos = document.getElementById('leyendaDeColoresencargosindividual');

                                    console.log('inmueblesconencargos', data.inmueblesconencargos.length);
                                    totalencargosasignados.innerHTML = data.inmueblesconencargos.length + " " + "(" + data.percentageEncargostate.toFixed(0) + "%)";

                                    if (data.inmueblesconencargos.length === 0) {
                                        leyendaDeColoresencargos.classList.add('hidden');
                                    } else {
                                        leyendaDeColoresencargos.classList.remove('hidden');
                                    }

                                    data.inmueblesconencargos.forEach((element, index) => {
                                        const divencargosasignado = document.createElement('div');
                                        divencargosasignado.classList.add('rounded-lg', 'flex', 'flex-row', 'justify-center', 'items-center', 'gap-0', 'w-full', 'h-auto', 'py-1', 'border-b', 'border-gray-400', 'mt-0', 'px-8');
                                        tablaencargosasignados.appendChild(divencargosasignado);
                                        if (element.encargoupdatetime === 'red') {
                                            divencargosasignado.classList.add('bg-red-100');
                                        } else if (element.encargoupdatetime === 'yellow') {
                                            divencargosasignado.classList.add('bg-yellow-100');
                                        } else if (element.encargoupdatetime === 'green') {
                                            divencargosasignado.classList.add('bg-green-100');
                                        }

                                        const direccionencargoasignado = document.createElement('p');
                                        direccionencargoasignado.classList.add('text-center', 'py-1.5', 'font-sans', 'text-sm', 'leading-6');
                                        direccionencargoasignado.innerHTML = element.direccion;
                                        divencargosasignado.appendChild(direccionencargoasignado);
                                    });


                                } else {
                                    // Handle error case
                                    console.log('Error:', data);
                                    totalinmueblesasignadostext.innerHTML = "0";
                                }
                                hideLoadingScreenInformacionUsuarioIndividual();
                            })
                            .catch(error => {
                                console.log('Error:', error);
                            });
                    } else {
                        // Handle failure case
                        console.error('Error inserting user data:', data.message);
                    }
                })
                .catch(error => {
                    console.error('Error fetching user data:', error);
                });
        }

        function fetchInformacionUsuarioIndividual() {
            const id = document.getElementById('hidden-id-user-administar').value;

            // Selecciona los div de la información usuario individual
            const noImageText = document.getElementById('noimagetext');
            const containerPhoto = document.getElementById('profile-photo-container');
            const nombreInformacionUsuarioIndividual = document.getElementById('nombre-informacion-usuario-individual');
            const emailInformacionUsuarioIndividual = document.getElementById('email-informacion-usuario-individual');
            const passwordInformacionUsuarioIndividual = document.getElementById('password-informacion-usuario-individual');
            const adminInformacionUsuarioIndividual = document.getElementById('admin-informacion-usuario-individual');
            const imgProfilePhoto = document.getElementById('img-profile-photo-informacion-usuario-individual');

            nombreInformacionUsuarioIndividual.innerHTML = '';
            emailInformacionUsuarioIndividual.innerHTML = '';
            passwordInformacionUsuarioIndividual.innerHTML = '';
            adminInformacionUsuarioIndividual.innerHTML = '';
            imgProfilePhoto.src = '';

            // Se eliminan los divs de la información usuario individual
            noImageText.innerHTML = '';

            // Selecciona el div de la información usuario individual edición
            const imgprofilephotoinformacionusuarioindividualedicion = document.getElementById('img-profile-photo-informacion-usuario-individual-edicion');
            const nombreinformacionusuarioedicion = document.getElementById('nombre-informacion-usuario-edicion-individual');
            const apellidoinformacionusuarioedicion = document.getElementById('apellido-informacion-usuario-edicion-individual');
            const emailinformacionusuarioedicion = document.getElementById('email-informacion-usuario-edicion-individual');
            const passwordinformacionusuarioedicion = document.getElementById('password-informacion-usuario-edicion-individual');
            const admininformacionusuarioedicionadmin = document.getElementById('admin-informacion-usuario-edicion-admin-individual');
            const admininformacionusuarioedicioncomercial = document.getElementById('admin-informacion-usuario-edicion-comercial-individual');

            // Empty photo edit mode
            imgprofilephotoinformacionusuarioindividualedicion.src = '';


            fetch(`fetchusersdatabaseID.php?id=${id}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Parse JSON response
                })
                .then(data => {
                    if (data.success) {
                        // Handle success case
                        console.log('Informacion usuario individual actualizada correctamente:', data);
                        if (data.data.profile_photo === null) {
                            containerPhoto.classList.add('hidden');
                            noImageText.classList.remove('hidden');
                        } else {
                            noImageText.classList.add('hidden');
                            containerPhoto.classList.remove('hidden');
                            imgProfilePhoto.src = "data:image/jpeg;base64," + data.data.profile_photo;
                            imgprofilephotoinformacionusuarioindividualedicion.src = "data:image/jpeg;base64," + data.data.profile_photo;
                        }

                        nombreInformacionUsuarioIndividual.innerHTML = "Nombre:</br>" + data.data.name + " " + data.data.apellido;
                        emailInformacionUsuarioIndividual.innerHTML = "Email:</br>" + data.data.email;
                        passwordInformacionUsuarioIndividual.innerHTML = "Contraseña:</br>" + data.data.password;
                        adminInformacionUsuarioIndividual.innerHTML = "Rol:</br>" + (data.data.admin === 1 ? "Administrador" : "Comercial");
                        adminInformacionUsuarioIndividual.innerHTML = "Rol:</br>" + (data.data.admin === 0 ? "Comercial" : "Administrador");

                        nombreinformacionusuarioedicion.value = data.data.name;
                        apellidoinformacionusuarioedicion.value = data.data.apellido;
                        emailinformacionusuarioedicion.value = data.data.email;
                        passwordinformacionusuarioedicion.value = data.data.password;
                        // Check or not check the admin button radio
                        console.log('data admin gato lucas: ' + data.data.admin);
                        if (data.data.admin === 1) {
                            admininformacionusuarioedicionadmin.checked = true;
                        } else if (data.data.admin === 0) {
                            admininformacionusuarioedicioncomercial.checked = true;
                        }



                    } else {
                        // Handle failure case
                        console.error('Error inserting user data:', data.message);
                    }
                    hideLoadingScreenInformacionUsuarioIndividualModoEdicion();
                })
                .catch(error => {
                    console.error('Error fetching user data:', error);
                });


        }

        function cerrarInformacionUsuarioIndividual() {
            const containerinformacionusuarioindividual = document.getElementById('informacion-usuario-individual');
            containerinformacionusuarioindividual.classList.remove('flex');
            containerinformacionusuarioindividual.classList.add('hidden');
            noimagetext.classList.add('hidden');
            const containerinformacionusuarioallusers = document.getElementById('container-informacion-usuario-allusers');
            containerinformacionusuarioallusers.classList.remove('hidden');
            containerinformacionusuarioallusers.classList.add('flex');
            getUserData();
            hideInformacionUsuarioIndividualModoEdicion()
            showLoadingScreenInformacionUsuarioIndividual();

            isDesplegarInformacionUsuarioAllUsers = false;
        }

        function hideLoadingScreenInformacionUsuarioIndividual() {
            const loadingScreen = document.getElementById('loading-screen-settings-informacion-usuario-individual');
            loadingScreen.classList.remove('flex');
            loadingScreen.classList.add('hidden');
        }

        function showLoadingScreenInformacionUsuarioIndividual() {
            const loadingScreen = document.getElementById('loading-screen-settings-informacion-usuario-individual');
            loadingScreen.classList.add('flex');
            loadingScreen.classList.remove('hidden');
        }

        function hideLoadingScreenInformacionUsuarioIndividualModoEdicion() {
            const loadingScreen = document.getElementById('loading-screen-settings-informacion-usuario-individual-modo-edicion');
            loadingScreen.classList.remove('flex');
            loadingScreen.classList.add('hidden');
        }

        function showLoadingScreenInformacionUsuarioIndividualModoEdicion() {
            const loadingScreen = document.getElementById('loading-screen-settings-informacion-usuario-individual-modo-edicion');
            loadingScreen.classList.remove('hidden');
            loadingScreen.classList.add('flex');
        }
    </script>



</body>


</html>