<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_form</title>
    <link href="./output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <aside id="completesidenavbar" class="relative">

        <!-- Navigation bar -->
        <nav class="h-9 w-full flex flex-row justify-between bg-white border-t shadow-xl fixed bottom-0 left-0 z-30 overflow-visible ">
            <ul class="w-full h-full flex flex-row justify-around items-end transition-all ml-3 pb-2 overflow-y-visible shadow-xl">
                <li id="mobile-itemHome" onclick="changeState('mobile-itemHome')" class="h-[55px] bg-blue-400 p-2.5 px-3.5 rounded-3xl shadow-lg text-white flex items-center justify-center hover:cursor-pointer hover:bg-blue-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" viewBox="0 0 1024 1024">
                        <path fill="currentColor" d="M946.5 505L534.6 93.4a31.93 31.93 0 0 0-45.2 0L77.5 505c-12 12-18.8 28.3-18.8 45.3c0 35.3 28.7 64 64 64h43.4V908c0 17.7 14.3 32 32 32H448V716h112v224h265.9c17.7 0 32-14.3 32-32V614.3h43.4c17 0 33.3-6.7 45.3-18.8c24.9-25 24.9-65.5-.1-90.5" />
                    </svg>
                </li>
                <li id="mobile-itemBuscador" onclick="changeState('mobile-itemBuscador')" class="h-[45px] bg-white p-2 px-3.5 rounded-3xl shadow-lg flex items-center justify-center hover:cursor-pointer hover:bg-blue-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" viewBox="0 0 14 14">
                        <path fill="currentColor" fill-rule="evenodd" d="M2 6a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-6a6 6 0 1 0 3.476 10.89l2.817 2.817a1 1 0 0 0 1.414-1.414l-2.816-2.816A6 6 0 0 0 6 0" clip-rule="evenodd" />
                    </svg>
                </li>


                <div id="moreMobileMenu" class="h-auto pt-3.5 px-3.5 rounded-3xl flex flex-col items-center justify-center">
                    <ul class="w-auto h-full flex flex-col justify-between gap-6">
                        <li id="mobile-itemBuscador" onclick="changeState('mobile-itemBuscador')" class="hidden h-[45px] bg-white p-2 px-3.5 rounded-3xl shadow-lg items-center justify-center hover:cursor-pointer hover:bg-blue-400 hover:text-white inset-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" viewBox="0 0 14 14">
                                <path fill="currentColor" fill-rule="evenodd" d="M2 6a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-6a6 6 0 1 0 3.476 10.89l2.817 2.817a1 1 0 0 0 1.414-1.414l-2.816-2.816A6 6 0 0 0 6 0" clip-rule="evenodd" />
                            </svg>
                        </li>
                        <li id="mobile-itemNoticias" onclick="changeState('mobile-itemNoticias')" class="h-[45px] bg-white p-2 px-3.5 rounded-3xl shadow-lg hidden items-center justify-center hover:cursor-pointer hover:bg-blue-400 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" viewBox="0 0 20 20">
                                <path fill="currentColor" d="M2 3a1 1 0 0 1 2 0h13a1 1 0 1 1 0 2H4v12.5a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5v7a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 5 13.5zm3 7a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-2.55a1 1 0 0 0-.336-.748L11.332 8.13a.5.5 0 0 0-.664 0L8.336 10.2a1 1 0 0 0-.336.75z" />
                            </svg>
                        </li>
                       
                        <li id="mobile-itemEncargos" onclick="changeState('mobile-itemEncargos')" class="hidden h-[45px] bg-white p-2 px-3.5 rounded-3xl shadow-lg items-center justify-center hover:cursor-pointer hover:bg-blue-400 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M10 6h4V4h-4zm8 17q-2.075 0-3.537-1.463T13 18t1.463-3.537T18 13t3.538 1.463T23 18t-1.463 3.538T18 23M4 21q-.825 0-1.412-.587T2 19V8q0-.825.588-1.412T4 6h4V4q0-.825.588-1.412T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v2.9q0 .45-.387.675t-.813.025q-.65-.3-1.362-.45T18 11q-2.9 0-4.95 2.05T11 18q0 .45.063.913t.187.912q.125.425-.137.8t-.688.375zm14 0q.2 0 .35-.15t.15-.35t-.15-.35T18 20t-.35.15t-.15.35t.15.35t.35.15m0-2q.2 0 .35-.15t.15-.35v-3q0-.2-.15-.35T18 15t-.35.15t-.15.35v3q0 .2.15.35T18 19" />
                            </svg>
                        </li>
                        <li id="mobile-itemSettings" onclick="changeState('mobile-itemSettings')" class="h-[45px] bg-white p-2  px-3.5 rounded-3xl shadow-lg hidden items-center justify-center hover:cursor-pointer hover:bg-blue-400 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M256 176a80 80 0 1 0 80 80a80.24 80.24 0 0 0-80-80m172.72 80a165.5 165.5 0 0 1-1.64 22.34l48.69 38.12a11.59 11.59 0 0 1 2.63 14.78l-46.06 79.52a11.64 11.64 0 0 1-14.14 4.93l-57.25-23a176.6 176.6 0 0 1-38.82 22.67l-8.56 60.78a11.93 11.93 0 0 1-11.51 9.86h-92.12a12 12 0 0 1-11.51-9.53l-8.56-60.78A169.3 169.3 0 0 1 151.05 393L93.8 416a11.64 11.64 0 0 1-14.14-4.92L33.6 331.57a11.59 11.59 0 0 1 2.63-14.78l48.69-38.12A175 175 0 0 1 83.28 256a165.5 165.5 0 0 1 1.64-22.34l-48.69-38.12a11.59 11.59 0 0 1-2.63-14.78l46.06-79.52a11.64 11.64 0 0 1 14.14-4.93l57.25 23a176.6 176.6 0 0 1 38.82-22.67l8.56-60.78A11.93 11.93 0 0 1 209.94 26h92.12a12 12 0 0 1 11.51 9.53l8.56 60.78A169.3 169.3 0 0 1 361 119l57.2-23a11.64 11.64 0 0 1 14.14 4.92l46.06 79.52a11.59 11.59 0 0 1-2.63 14.78l-48.69 38.12a175 175 0 0 1 1.64 22.66" />
                            </svg>
                        </li>
                        <li id="mobile-itemLogOut" onclick="logOut()" class="h-[45px] bg-white p-2  px-3.5 rounded-3xl shadow-lg hidden items-center justify-center hover:cursor-pointer hover:bg-blue-400 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4m-5-4l5-5l-5-5m5 5H3"/></svg>
                        </li>
                        <li id="mobile-MoreMenuIcon" class="h-[45px] bg-white p-2  px-3.5 rounded-3xl shadow-lg flex items-center justify-center hover:cursor-pointer hover:bg-blue-400 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2 18c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C3.689 14 4.46 14 6 14s2.31 0 2.876.347c.317.194.583.46.777.777C10 15.689 10 16.46 10 18s0 2.31-.347 2.877c-.194.316-.46.582-.777.776C8.311 22 7.54 22 6 22s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.776C2 20.31 2 19.54 2 18m12 0c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C15.689 14 16.46 14 18 14s2.31 0 2.877.347c.316.194.582.46.776.777C22 15.689 22 16.46 22 18s0 2.31-.347 2.877a2.36 2.36 0 0 1-.776.776C20.31 22 19.54 22 18 22s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.776C14 20.31 14 19.54 14 18M2 6c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C3.689 2 4.46 2 6 2s2.31 0 2.876.347c.317.194.583.46.777.777C10 3.689 10 4.46 10 6s0 2.31-.347 2.876c-.194.317-.46.583-.777.777C8.311 10 7.54 10 6 10s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.777C2 8.311 2 7.54 2 6m12 0c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C15.689 2 16.46 2 18 2s2.31 0 2.877.347c.316.194.582.46.776.777C22 3.689 22 4.46 22 6s0 2.31-.347 2.876c-.194.317-.46.583-.776.777C20.31 10 19.54 10 18 10s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.777C14 8.311 14 7.54 14 6" color="currentColor" />
                            </svg>
                        </li>
                    </ul>

                </div>
            </ul>
        </nav>


    </aside>


    <script>
        function logOut() {
            window.location.href = "index.php";
        }
        isDesplegarMoreMenu = true;

        function showMoreMenu() {
            document.getElementById('mobile-MoreMenuIcon').classList.remove('bg-white');
            document.getElementById('mobile-MoreMenuIcon').classList.add('bg-blue-400');
            document.getElementById('mobile-MoreMenuIcon').classList.add('text-white');
            document.getElementById('mobile-itemSettings').classList.remove('hidden');
            document.getElementById('mobile-itemEncargos').classList.remove('hidden');
            document.getElementById('mobile-itemNoticias').classList.remove('hidden');
            document.getElementById('mobile-itemLogOut').classList.remove('hidden');
            document.getElementById('moreMobileMenu').classList.add('shadow-lg', 'bg-blue-400', 'bg-opacity-30');

        }

        function hideMoreMenu() {
            document.getElementById('mobile-itemSettings').classList.add('hidden');
            document.getElementById('mobile-itemEncargos').classList.add('hidden');
            document.getElementById('mobile-itemNoticias').classList.add('hidden');
            document.getElementById('mobile-itemLogOut').classList.add('hidden');
            document.getElementById('mobile-MoreMenuIcon').classList.remove('bg-blue-400', 'text-white');
            document.getElementById('mobile-MoreMenuIcon').classList.add('bg-white');
            document.getElementById('moreMobileMenu').classList.remove('shadow-lg', 'bg-blue-400', 'bg-opacity-30');
        }

        function toggleDesplegarMoreMenu() {
            if (isDesplegarMoreMenu) {
                showMoreMenu();
            } else {
                hideMoreMenu();
            }
            isDesplegarMoreMenu = !isDesplegarMoreMenu;
            console.log(isDesplegarMoreMenu);
        }


        document.addEventListener("DOMContentLoaded", (event) => {
            document.getElementById('moreMobileMenu').addEventListener('click', toggleDesplegarMoreMenu);
            let expanded = true;
            const logoImg = document.getElementById("logo-img");
            const logoText = document.getElementById("logo-text");
            const toggleButton = document.getElementById("toggle-button");
            const userInfo = document.getElementById("user-info");
            const toggleIcon = document.getElementById("toggle-icon");
            const completeSideNavBar = document.getElementById("completesidenavbar");

            toggleButton.addEventListener("click", () => {
                expanded = !expanded;
                if (expanded) {
                    logoImg.classList.add("w-16", "rounded-lg");
                    logoImg.classList.remove("w-0");
                    logoText.classList.add("w-auto", "font-sans", "tracking-wider", "font-medium", "text-lg");
                    logoText.classList.remove("w-0", "hidden");
                    userInfo.classList.add("w-52", "ml-3");
                    userInfo.classList.remove("w-0");
                    toggleIcon.setAttribute("viewBox", "0 0 24 24");
                    toggleIcon.innerHTML = '<path d="M10 19v-4H3v-2h7V9l5 5-5 5z"></path>';
                    completeSideNavBar.classList.remove("w-16");
                    completeSideNavBar.classList.add("w-52");
                } else {
                    logoImg.classList.add("w-0");
                    logoImg.classList.remove("w-16", "rounded-lg");
                    logoText.classList.add("w-0", "hidden");
                    logoText.classList.remove("w-auto", "font-sans", "tracking-wider", "font-medium", "text-lg");
                    userInfo.classList.add("w-0");
                    userInfo.classList.remove("w-52", "ml-3");
                    toggleIcon.setAttribute("viewBox", "0 0 24 24");
                    completeSideNavBar.classList.add("w-16");
                    completeSideNavBar.classList.remove("w-52");
                    toggleIcon.innerHTML = '<path d="M14 19v-4h7v-2h-7V9l-5 5 5 5z"></path>';
                }
            });

            // To change the active state of the list items
            const listItemHome = document.getElementById("list-itemHome");
            if (window.location.pathname === "/lucmarcloud") {
                listItemHome.classList.add("bg-gradient-to-tr", "from-indigo-200", "to-indigo-100", "text-indigo-800", "hover:bg-red-800");
                listItemHome.classList.remove("hover:bg-indigo-200");
            }

            const listItemSearch = document.getElementById("list-itemSearch");
            if (window.location.pathname === "/buscador") {
                listItemSearch.classList.add("bg-gradient-to-tr", "from-indigo-200", "to-indigo-100", "text-indigo-800", "hover:bg-red-800");
                listItemSearch.classList.remove("hover:bg-indigo-200");
            }

            console.log(window.location.pathname);
        });

        function changeState(activeId) {
            const items = document.querySelectorAll('nav ul li');

            items.forEach(item => {
                if (item.id === activeId) {
                    item.classList.remove('h-[45px]', 'bg-white', 'p-2', 'text-black');
                    item.classList.add('h-[55px]', 'bg-blue-400', 'p-2.5', 'text-white');
                } else {
                    item.classList.remove('h-[55px]', 'bg-blue-400', 'p-2.5', 'text-white');
                    item.classList.add('h-[45px]', 'bg-white', 'p-2', 'text-black');
                }
            });
            const home = document.getElementById('home');
            const buscadordeinmuebles = document.getElementById('buscadordeinmuebles');
            const buscadorDeEncargos = document.getElementById('buscadordeencargos');
            // Show or hide corresponding div elements based on activeId
            if (activeId === 'mobile-itemHome') {
                document.getElementById('home').classList.remove('hidden');
                document.getElementById('home').classList.add('block');
                document.getElementById('buscadordeinmuebles').classList.remove('block');
                document.getElementById('buscadordeinmuebles').classList.add('hidden');
                document.getElementById('settings').classList.remove('block');
                document.getElementById('settings').classList.add('hidden');
                document.getElementById('buscadordeencargos').classList.remove('block');
                document.getElementById('buscadordeencargos').classList.add('hidden');
                if (!isDesplegarMoreMenu) {
                    hideMoreMenu();
                    isDesplegarMoreMenu = true;
                }
            } else if (activeId === 'mobile-itemBuscador') {
                document.getElementById('home').classList.remove('block');
                document.getElementById('home').classList.add('hidden');
                document.getElementById('buscadordeinmuebles').classList.remove('hidden');
                document.getElementById('buscadordeinmuebles').classList.add('block');
                document.getElementById('settings').classList.remove('block');
                document.getElementById('settings').classList.add('hidden');
                document.getElementById('buscadordeencargos').classList.remove('block');
                document.getElementById('buscadordeencargos').classList.add('hidden');
                if (!isDesplegarMoreMenu) {
                    hideMoreMenu();
                    isDesplegarMoreMenu = true;
                }
            } else if (activeId === 'mobile-itemSettings') {
                document.getElementById('settings').classList.remove('hidden');
                document.getElementById('settings').classList.add('block');
                document.getElementById('buscadordeinmuebles').classList.remove('block');
                document.getElementById('buscadordeinmuebles').classList.add('hidden');
                document.getElementById('home').classList.remove('block');
                document.getElementById('home').classList.add('hidden');
                document.getElementById('buscadordeencargos').classList.remove('block');
                document.getElementById('buscadordeencargos').classList.add('hidden');
            } else if (activeId === 'mobile-itemEncargos') {
                document.getElementById('buscadordeencargos').classList.remove('hidden');
                document.getElementById('buscadordeencargos').classList.add('block');
                document.getElementById('buscadordeinmuebles').classList.remove('block');
                document.getElementById('buscadordeinmuebles').classList.add('hidden');
                document.getElementById('home').classList.remove('block');
                document.getElementById('home').classList.add('hidden');
                document.getElementById('settings').classList.remove('block');
                document.getElementById('settings').classList.add('hidden');
            } else if (activeId === 'mobile-itemLogOut') {
                window.location.href = "index.php";
            }

            console.log(activeId);
        }
    </script>


</body>

</html>