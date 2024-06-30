<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LucmarCloud</title>
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="h-auto w-full flex flex-col justify-center items-center pt-8 mb-12 pb-8">
        <div class="bg-slate-50 flex flex-col justify-start items-center h-auto py-5 lg:py-10 px-3 lg:px-12 gap-4 rounded-2xl shadow-2xl w-[90%]">
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


            <h1 class="font-sans text-xl font-bold text-slate-900">Encargos</h1>
            <form id="search-form" class="mb-4 flex flex-row justify-center gap-5 items-center flex-wrap w-full px-4">
                <label class="text-slate-900 text-base font-semibold" for="direccion">Introduce la dirección:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 hover:bg-slate-100" type="text" placeholder="Dirección" name="direccion">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Buscar</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="button" id="clear-form">Limpiar</button>
            </form>

            <table class="text-center w-[100%] table-fixed">
                <thead>
                    <tr class="bg-slate-500 text-white">
                        <th class="inherit overflow-hidden w-[60%]">Direccion</th>
                        <th class="hidden xl:table-cell overflow-hidden">Tipo</th>
                        <th class="hidden xl:table-cell overflow-hidden">Uso</th>
                        <th class="hidden xl:table-cell overflow-hidden">Superficie</th>
                        <th class="hidden xl:table-cell overflow-hidden">Año</th>
                        <th class="inherit overflow-hidden w-[30%] h-[100%]"></th>
                        <th class="inherit overflow-hidden"></th>

                    </tr>
                </thead>
                <tbody id="search-data"></tbody>
            </table>

            <div class="flex flex-row justify-center gap-5 items-center">
                <button id="prev-button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer">Anterior</button>
                <span id="page-info"></span>
                <button id="next-button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded hover:cursor-pointer">Siguiente</button>

            </div>

        </div>
    </div>
    <div id="more-info-container" class="hidden fixed top-0 left-1/2 -translate-x-1/2 items-center justify-start bg-gray-100 overflow-y-auto opacity-100 z-20 w-[100%] h-[calc(100%-2rem)] shadow-xl overflow-auto px-4 pt-14 mb-3 pb-8">
        <?php
        include 'moreinfo.php';
        ?>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showLoadingScreenMoreInfo();
            showLoadingScreen();

            const searchForm = document.getElementById('search-form');
            const tableBody = document.getElementById('search-data');
            let direccion = '';

            const prevButton = document.getElementById('prev-button');
            const nextButton = document.getElementById('next-button');
            const pageInfo = document.getElementById('page-info');

            const clearForm = document.getElementById('clear-form');

            let currentPage = 1;
            let totalPages = 1;
            const itemsPerPage = 20;

            // Automatically fetch data when the document is loaded
            fetchData(direccion, currentPage);

            function hideLoadingScreen() {
                const loadingScreen = document.getElementById('loading-screen');
                loadingScreen.classList.add('hidden');
            }

            searchForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(this);
                direccion = formData.get('direccion');
                currentPage = 1;
                if (direccion === '') {
                    Toastify({
                        text: "Introduce una dirección",
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
                }
                fetchData(direccion, currentPage);
            });

            prevButton.addEventListener('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    fetchData(direccion, currentPage);
                }
            });

            nextButton.addEventListener('click', function() {
                if (currentPage < totalPages) {
                    currentPage++;
                    fetchData(direccion, currentPage);
                }
            });

            clearForm.addEventListener('click', function() {
                document.getElementById("search-form").reset();
                direccion = '';
                fetchData(direccion, currentPage);
            });



            function fetchData(direccion, page) {
                fetch(`tablaEncargos.php?itemsPerPage=${itemsPerPage}&direccion=${direccion}&page=${page}`)
                    .then(response => response.json())
                    .then(data => {
                        totalPages = Math.ceil(data.totalItems / itemsPerPage);
                        displayData(data.data);
                        updatePaginationInfo();
                    })
                    .catch(error => console.error('Error fetching JSON data:', error));
            }

            function displayData(data) {
                // Clear existing rows
                tableBody.innerHTML = '';

                // Populate table with data
                data.forEach(item => {
                    const row = document.createElement('tr');
                    row.classList.add('border-b', 'border-zinc-300');
                    row.id = 'row-' + item.id;
                    // Create a new row element

                    // Function to create a td element with given classes and inner HTML
                    function createCell(classes, innerHTML) {
                        const cell = document.createElement('td');
                        cell.className = classes;
                        cell.innerHTML = innerHTML;
                        return cell;
                    }

                    // Append cells to the row
                    row.appendChild(createCell('text-center xl:text-start py-5 text-sm overflow-hidden w-[100%]', item.direccion));
                    row.appendChild(createCell('hidden xl:table-cell', item.tipo));
                    row.appendChild(createCell('hidden xl:table-cell', item.uso));
                    row.appendChild(createCell('hidden xl:table-cell', item.superficie));
                    row.appendChild(createCell('hidden xl:table-cell', item.ano_construccion));

                    // Create the cell with SVG icons
                    const svgCell = document.createElement('td');
                    svgCell.className = 'xl:table-cell';
                    const svgDiv = document.createElement('div');
                    svgDiv.className = 'flex flex-row px-1 w-full h-full gap-2 justify-start items-center';

                    const noticiaSvg = `<svg id="noticia-table-cell${item.id}" class="text-red-700 hidden" xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 20 20"><path fill="currentColor" d="M2.93 17.07A10 10 0 1 1 17.07 2.93A10 10 0 0 1 2.93 17.07M9 5v6h2V5zm0 8v2h2v-2z" /></svg>`;
                    const encargoSvg = `<svg id="encargo-table-cell${item.id}" class="text-red-700 hidden" xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 20 20"><path fill="currentColor" d="M2 3a1 1 0 0 1 2 0h13a1 1 0 1 1 0 2H4v12.5a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5v7a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 5 13.5zm3 7a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-2.55a1 1 0 0 0-.336-.748L11.332 8.13a.5.5 0 0 0-.664 0L8.336 10.2a1 1 0 0 0-.336.75z" /></svg>`;

                    svgDiv.innerHTML = noticiaSvg + encargoSvg;
                    svgCell.appendChild(svgDiv);
                    row.appendChild(svgCell);

                    // Create the cell with the button
                    const buttonCell = document.createElement('td');
                    buttonCell.className = 'relative';
                    const containerButtonDiv = document.createElement('div');
                    containerButtonDiv.classList = "w-auto absolute top-1/2 -translate-y-1/2 right-3 xl:table-cell";
                    const buttonDiv = document.createElement('div');
                    buttonDiv.id = item.id;
                    buttonDiv.className = 'bg-slate-500 hover:bg-slate-900 w-[2em] h-[2em] rounded-lg flex flex-col items-center justify-center hover:rounded-3xl transition-all duration-[0.5s] ease-in-out hover:w-11 hover:h-11 overflow-hidden hover:cursor-pointer';
                    buttonDiv.onclick = function() {
                        verMasInfo(this);
                    };
                    const buttonSvg = `<svg class="p-2" id="more-info-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#63E6BE" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>`;
                    buttonDiv.innerHTML = buttonSvg;
                    containerButtonDiv.appendChild(buttonDiv);
                    buttonCell.appendChild(containerButtonDiv);
                    row.appendChild(buttonCell);



                    tableBody.appendChild(row);



                    axios.get(`inmueblemoreinfo.php?id=${item.id}`)
                        .then(response => {
                            console.log(response.data.dataUpdateTime);
                            const row = document.getElementById('row-' + item.id);

                            if (response.data.inmueble.encargoState === 1) {
                                const noticiatablecell = document.getElementById('encargo-table-cell' + item.id);
                                noticiatablecell.classList.remove('hidden');
                            } else if (response.data.inmueble.encargoState === 0 || response.data.inmueble.encargoState === null) {
                                const noticiatablecell = document.getElementById('encargo-table-cell' + item.id);
                                noticiatablecell.classList.add('hidden');
                            }
                            
                            if (response.data.inmueble.noticiastate === 1) {
                                const encargotablecell = document.getElementById('noticia-table-cell' + item.id);
                                encargotablecell.classList.remove('hidden');
                            } else if (response.data.inmueble.noticiastate === 0 || response.data.inmueble.noticiastate === null) {
                                const encargotablecell = document.getElementById('noticia-table-cell' + item.id);
                                encargotablecell.classList.add('hidden');
                            }

                            if (response.data.dataUpdateTime === 'red') {
                                row.classList.add('bg-red-100');
                            } else if (response.data.dataUpdateTime === 'yellow') {
                                row.classList.add('bg-yellow-100');
                            } else if (response.data.dataUpdateTime === 'green') {
                                row.classList.add('bg-green-100');
                            }
                            hideLoadingScreen();
                        })
                        .catch(error => {
                            console.error('Error fetching data:', error);
                        });

                });
            }





            function updatePaginationInfo() {
                pageInfo.textContent = `${currentPage} de ${totalPages}`;
                prevButton.disabled = currentPage === 1;
                nextButton.disabled = currentPage === totalPages;
            }

            const forminsertarcomentario = document.getElementById('form-insertar-comentario');
            const enviarComentario = document.createElement("button");
            enviarComentario.id = "enviar-comentario";
            enviarComentario.classList.add("p-3", "text-sm", "text-white", "bg-green-800", "hover:bg-green-600", "rounded-md", "transition-all", "duration-[0.5s]", "ease-in-out", "hover:cursor-pointer", "mb-4");
            enviarComentario.textContent = "Enviar";
            forminsertarcomentario.appendChild(enviarComentario);


        });

        function verMasInfo(clickedDiv) {
            const adminpower = document.getElementById('admin-power');
            fetch('fetchusers.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Parse JSON response
                })
                .then(data => {
                    if (data[0].admin === 1) {
                        adminpower.value = 1;
                    } else {
                        adminpower.value = 0;
                    }
                })
                .catch(error => {
                    console.error('Error fetching user data:', error);
                });



            let id = "";
            console.log('ID:', clickedDiv.id);
            id = clickedDiv.id;
            const hiddenid = document.getElementById("hidden-id");
            hiddenid.value = id;
            fetchComments();


            const moreInfoContainer = document.getElementById("more-info-container");
            moreInfoContainer.classList.remove("hidden");
            moreInfoContainer.classList.add("flex");
            moreInfoContainer.classList.add("flex-col");
            const moreinfotipo = document.getElementById("tipo");
            const moreinfouso = document.getElementById("uso");
            const moreinfosuperficie = document.getElementById("superficie");
            const moreinfoano = document.getElementById("ano");
            const moreinfodireccion = document.getElementById("direccion");
            const formID = document.getElementById('form_id');
            const comentariosdatabasecontainer = document.getElementById("comentarios-database-container");
            const comentarioTextarea = document.getElementById("comentarioTextarea");
            const hiddenagregarnoticia = document.getElementById("agregar-noticia-edit-more-info");
            const encargocontainer = document.getElementById("encargos-container");



            const potencalAdquisicion = document.getElementById("potencialAdquisicion");
            potencalAdquisicion.classList.remove("flex");
            potencalAdquisicion.classList.add("hidden");

            const categoria = document.getElementById("categoria");
            categoria.textContent = "";



            const editMoreInfo = document.getElementById("edit-more-info");
            editMoreInfo.value = id;


            formID.value = clickedDiv.id;
            const valueOculto = formID.value;

            console.log('el id oculto del input', valueOculto);
            comentariosdatabasecontainer.innerHTML = "";
            comentarioTextarea.value = "";
            moreinfotipo.textContent = "";
            moreinfouso.textContent = "";
            moreinfosuperficie.textContent = "";
            moreinfoano.textContent = "";
            moreinfodireccion.textContent = "";
            const comentarioscontainer = document.getElementById("comentarios-container");

            const tipoPVAtexto = document.getElementById("tipoPVA-texto");
            const valoraciontexto = document.getElementById("valoracion-texto");
            const valoracionestablecidatexto = document.getElementById("valoracionestablecida-texto");
            const noticiafechatexto = document.getElementById("noticia-fecha-texto");
            const prioridadtexto = document.getElementById("prioridad-texto");
            const comercialtexto = document.getElementById("comercial-texto");

            const encargofecha = document.getElementById("encargo-fecha-texto");
            encargofecha.textContent = "";
            const encargotipotexto = document.getElementById("encargo-tipo-texto");
            encargotipotexto.textContent = "";
            const encargocliente = document.getElementById("encargo-cliente-texto");
            encargocliente.textContent = "";
            const encargoprecio = document.getElementById("encargo-precio1-texto");
            encargoprecio.textContent = "";
            const encargoprecio2 = document.getElementById("encargo-precio2-texto");
            encargoprecio2.textContent = "";
            const encargocomision = document.getElementById("encargo-comision-texto");
            encargocomision.textContent = "";
            const encargocomercial = document.getElementById("encargo-comercial-texto");
            encargocomercial.textContent = "";

            tipoPVAtexto.textContent = "";
            valoraciontexto.textContent = "";
            valoracionestablecidatexto.textContent = "";
            noticiafechatexto.textContent = "";
            prioridadtexto.textContent = "";
            comercialtexto.textContent = "";


            // Function to fetch comments
            function fetchComments() {
                fetch(`inmueblemoreinfo.php?id=${id}`)
                    .then(response => response.json())
                    .then(databuscador => {

                        //Fetch RESPONSABLE
                        console.log("Responsable:", databuscador.inmueble.responsable);
                        const responsabletexto = document.getElementById("responsable-texto");
                        if (databuscador.inmueble.responsable === null) {
                            responsabletexto.innerHTML = "No definido";
                        } else {
                            responsabletexto.textContent = databuscador.inmueble.responsable;
                        }
                        const responsableEditHidden = document.getElementById("responsable-edit-hidden");
                        const responsablenombre = databuscador.inmueble.responsable;
                        responsableEditHidden.value = responsablenombre;
                        // FETCH NOTICIAS
                        const hiddenid = document.getElementById("hidden-id");
                        const id = hiddenid.value;
                        const hiddennoticiastate = document.getElementById("hidden-noticiastate");
                        hiddennoticiastate.value = databuscador.inmueble.noticiastate;
                        const noticiastate = hiddennoticiastate.value;
                        const hiddenencargostate = document.getElementById("hidden-encargostate");
                        hiddenencargostate.value = databuscador.inmueble.encargoState;
                        const encargostate = hiddenencargostate.value;
                        if (noticiastate === '1') {
                            console.log("Fetching noticias...", id);
                            encargocontainer.classList.remove("hidden");
                            encargocontainer.classList.add("flex");

                            fetch(`noticiasfetch.php?id=${id}`)
                                .then(response => response.json())
                                .then(data => {
                                    console.log("Fetched data:", data);
                                    if (data.tipo_PV === 'PV') {
                                        tipoPVAtexto.innerHTML = data.tipo_PV + "</br>Piso en Venta";
                                    } else if (data.tipo_PV === 'PVA') {
                                        tipoPVAtexto.innerHTML = data.tipo_PV + "</br>Piso en Venta con Anterioridad";
                                    }
                                    console.log("data valoracion:", data.valoracion);
                                    if (data.valoracion == '1') {
                                        valoraciontexto.innerHTML = "Valoración<br>SÍ";
                                        valoracionestablecidatexto.classList.remove("hidden");
                                        valoracionestablecidatexto.classList.add("flex");
                                        valoracionestablecidatexto.innerHTML = "Valoración establecida:<br>" + data.valoracion_establecida + "€";
                                    } else if (data.valoracion == '0') {
                                        valoraciontexto.innerHTML = "Valoración<br>NO";
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
                        } else if (noticiastate === '0') {
                            encargocontainer.classList.remove("flex");
                            encargocontainer.classList.add("hidden");
                        }


                        if (encargostate === '1') {
                            const encargocontainer = document.getElementById("encargocontainer");
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
                        } else {
                            const encargocontainer = document.getElementById("encargocontainer");
                            encargocontainer.classList.remove("flex");
                            encargocontainer.classList.add("hidden");
                        }

                        const comentariosdatabasecontainer = document.getElementById("comentarios-database-container");
                        const comentarioTextarea = document.getElementById("comentarioTextarea");
                        const comentariosData = databuscador.comentarios; // Correct property name
                        const direccion = databuscador.inmueble.direccion;
                        const tipo = databuscador.inmueble.tipo;
                        const uso = databuscador.inmueble.uso;
                        const superficie = databuscador.inmueble.superficie;
                        const ano_construccion = databuscador.inmueble.ano_construccion;




                        comentariosdatabasecontainer.innerHTML = "";
                        comentarioTextarea.value = "";
                        moreinfotipo.textContent = tipo;
                        moreinfouso.textContent = uso;
                        moreinfosuperficie.textContent = superficie;
                        moreinfoano.textContent = ano_construccion;
                        moreinfodireccion.textContent = direccion;

                        const tipoEdit = document.getElementById("tipo-edit");
                        const usoEdit = document.getElementById("uso-edit");
                        const superficieEdit = document.getElementById("superficie-edit");
                        const anoEdit = document.getElementById("ano-edit");
                        tipoEdit.value = databuscador.inmueble.tipo;
                        tipoEdit.placeholder = databuscador.inmueble.tipo;
                        usoEdit.value = databuscador.inmueble.uso;
                        usoEdit.placeholder = databuscador.inmueble.uso;
                        superficieEdit.value = databuscador.inmueble.superficie;
                        superficieEdit.placeholder = databuscador.inmueble.superficie;
                        anoEdit.value = databuscador.inmueble.ano_construccion;
                        anoEdit.placeholder = databuscador.inmueble.ano_construccion;

                        const categoriaEdit = document.getElementById("categoria-edit");
                        categoriaEdit.value = databuscador.inmueble.categoria;
                        categoriaEdit.placeholder = databuscador.inmueble.categoria;


                        const categoria = document.getElementById("categoria");
                        const categoriaContainer = document.getElementById("categoriacontainer");
                        categoria.textContent = "";
                        if (databuscador.inmueble.categoria === null) {
                            categoriaContainer.classList.add("hidden");
                            categoria.classList.add("hidden");
                        } else {
                            categoria.classList.remove("hidden");
                            categoria.textContent = databuscador.inmueble.categoria;
                        }

                        const inquilinoPhoto = document.getElementById("inquilino-photo");
                        const propietarioPhoto = document.getElementById("propietario-photo");
                        const vacioPhoto = document.getElementById("vacio-photo");
                        if (databuscador.inmueble.categoria === "Inquilino") {
                            inquilinoPhoto.classList.remove("hidden");
                            propietarioPhoto.classList.add("hidden");
                            vacioPhoto.classList.add("hidden");
                        } else if (databuscador.inmueble.categoria === "Propietario") {
                            inquilinoPhoto.classList.add("hidden");
                            propietarioPhoto.classList.remove("hidden");
                            vacioPhoto.classList.add("hidden");
                        } else {
                            inquilinoPhoto.classList.add("hidden");
                            propietarioPhoto.classList.add("hidden");
                            vacioPhoto.classList.remove("hidden");
                        }


                        // Potencial Adquisicion if statement
                        const potencialAdquisicion = document.getElementById("potencialAdquisicion");
                        const potencialAdquisicionEdit = document.getElementById("potencialAdquisicionEdit");

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



                        const noticiacontanier = document.getElementById("noticiacontainer");
                        const agregarnoticiacontainer = document.getElementById("agregar-noticia-container");
                        if (noticiastate === '0') {
                            noticiacontanier.classList.remove("flex");
                            noticiacontanier.classList.add("hidden");
                        } else {
                            noticiacontanier.classList.remove("hidden");
                            noticiacontanier.classList.add("flex");
                        }



                        const formID = document.getElementById('form_id');
                        const enviarComentario = document.getElementById("enviar-comentario");

                        enviarComentario.onclick = function() {
                            const insertarID = formID.value;

                            const comentarioValue = comentarioTextarea.value;
                            if (comentarioValue === "") {
                                Toastify({
                                    text: "Introduce un comentario",
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
                                
                                fetchComments();
                            } else {
                                fetch(`insertarcomentario.php?id=${insertarID}&comentario=${comentarioValue}`)

                                    .then(response => response.json())
                                    .then(data => {
                                        console.log(data);
                                        // Reload comments after deletion
                                        Toastify({
                                            text: "Comentario añadido",
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
                                        fetchData(direccion, currentPage);
                                        fetchComments();
                                    })
                                    .catch(error => console.error('Error deleting comment:', error));

                                axios.get(`inmueblemoreinfo.php?id=${insertarID}`)
                                    .then(response => {
                                        console.log(response.data.dataUpdateTime);
                                        const row = document.getElementById('row-' + insertarID);
                                        console.log('el row elegiddo' + row.id);

                                        if (response.data.dataUpdateTime === 'red') {
                                            row.classList.remove('bg-green-100');
                                            row.classList.remove('bg-yellow-100');
                                            row.classList.add('bg-red-100');
                                        } else if (response.data.dataUpdateTime === 'yellow') {
                                            row.classList.remove('bg-green-100');
                                            row.classList.remove('bg-red-100');
                                            row.classList.add('bg-yellow-100');
                                        } else if (response.data.dataUpdateTime === 'green') {
                                            row.classList.remove('bg-red-100');
                                            row.classList.remove('bg-yellow-100');
                                            row.classList.add('bg-green-100');

                                        }
                                        hideLoadingScreen();
                                    })
                                    .catch(error => {
                                        console.error('Error fetching data:', error);
                                    });
                            }
                        }



                        comentariosData.forEach(comentario => {
                            // Select the columns to display
                            const comentarioId = comentario.id;
                            const comentarioTexto = comentario.texto;
                            const comentarioFechaOriginal = comentario.date_time;
                            const comentarioFecha = formatDateTime(comentarioFechaOriginal)

                            // Create a new div element to hold the comment
                            const comentariobox = document.createElement("div");
                            comentariobox.classList.add("border-b", "border-zinc-200", "w-[100%]", "relative", "py-4", "bg-zinc-200", "rounded-md", "px-5");
                            comentariobox.id = comentarioId;
                            comentariosdatabasecontainer.appendChild(comentariobox);
                            const adminpower = document.getElementById('admin-power');
                            const adminPower = adminpower.value;
                            if (adminPower == 1) {

                                const deletecomentario = document.createElement("button");
                                deletecomentario.classList.add("absolute", "right-0", "-top-1", "py-1.5", "px-0", "text-gray-800", "transition-all", "duration-[0.5s]", "ease-in-out", "hover:cursor-pointer", "text-xs");
                                deletecomentario.id = comentarioId;
                                const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
                                svg.classList.add("text-2xl", "text-red-800");
                                svg.setAttribute("xmlns", "http://www.w3.org/2000/svg");
                                svg.setAttribute("width", "30px");
                                svg.setAttribute("height", "30px");
                                svg.setAttribute("viewBox", "0 0 20 20");

                                // Create SVG path
                                const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
                                path.setAttribute("fill", "currentColor");
                                path.setAttribute("d", "M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15l-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152l2.758 3.15a1.2 1.2 0 0 1 0 1.698");

                                // Append path to SVG
                                svg.appendChild(path);

                                // Append SVG to button
                                deletecomentario.appendChild(svg);
                                comentariobox.appendChild(deletecomentario);
                                deletecomentario.onclick = function() {
                                    fetch(`deletecomment.php?id=${comentarioId}`)
                                        .then(response => response.json())
                                        .then(data => {
                                            console.log(data);
                                            Toastify({
                                                text: "Comentario eliminado",
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
                                            // Reload comments after deletion
                                            fetchComments();
                                        })
                                        .catch(error => console.error('Error deleting comment:', error));
                                }
                            }



                            const comentariofecha = document.createElement("p");
                            comentariofecha.classList.add("text-sm", "text-gray-800", "absolute", "left-1.5", "top-1.5");
                            comentariofecha.textContent = comentarioFecha;
                            comentariobox.appendChild(comentariofecha);
                            const comentariotexto = document.createElement("p");
                            comentariotexto.classList.add("text-sm", "text-gray-800", "mt-4", "overflow-hidden", "whitespace-normal", "text-justify");
                            comentariotexto.textContent = comentarioTexto;
                            comentariobox.appendChild(comentariotexto);
                        });
                        console.log(comentariosData);
                        console.log(databuscador);
                        console.log("Inmueble:", databuscador.inmueble);
                        console.log("Comentarios:", databuscador.comentarios);
                        console.log("Comentarios Data:", comentariosData);
                        hideLoadingScreenMoreInfo();
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }


        }

        function formatDateTime(dateTime) {
            const date = new Date(dateTime);
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are 0-based in JavaScript
            const year = date.getFullYear();
            const hours = String(date.getHours()).padStart(2, '0');
            const minutes = String(date.getMinutes()).padStart(2, '0');

            return `${day} / ${month} / ${year} ${hours}:${minutes}`;
        }

        function formatDate(dateTime) {
            const date = new Date(dateTime);
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are 0-based in JavaScript
            const year = date.getFullYear();

            return `${day}-${month}-${year}`;
        }


        function hideLoadingScreenMoreInfo() {
            console.log("Hiding loading screen...");
            const loadingScreen = document.getElementById('loading-screen-moreinfo');
            loadingScreen.classList.add('hidden');
        }

        function showLoadingScreenMoreInfo() {
            const loadingScreen = document.getElementById('loading-screen-moreinfo');
            loadingScreen.classList.remove('hidden');
        }

        function hideLoadingScreen() {
            console.log("Hiding loading screen...");
            const loadingScreen = document.getElementById('loading-screen');
            loadingScreen.classList.add('hidden');
        }

        function showLoadingScreen() {
            const loadingScreen = document.getElementById('loading-screen');
            loadingScreen.classList.remove('hidden');
        }
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</body>

</html>