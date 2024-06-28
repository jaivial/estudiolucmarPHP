
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_form</title>
    <link href="./output.css" rel="stylesheet">
</head>

<body>
<aside id="completesidenavbar" class=" h-screen w-52 shadow-md transition-transform duration-[900ms]">
    <nav class="h-full flex flex-col justify-between bg-white border-r shadow-sm">
        <div class="p-4 pb-6 flex justify-between items-center border-b">
            <img src="./assets/img/logolucmar.jpg" id="logo-img" class="duration-1000 overflow-hidden transition-all w-16 rounded-lg"/>
            <p id="logo-text" class="overflow-hidden transition-all duration-1000 w-auto font-sans tracking-wider font-medium text-lg">
                Lucmar Cloud
            </p>
            <button id="toggle-button" class="p-1.5 rounded-lg bg-gray-50 hover:bg-gray-100 transition-all duration-1000">
                <svg id="toggle-icon" viewBox="0 0 24 24" width="20" height="20">
                    <path d="M10 19v-4H3v-2h7V9l5 5-5 5z"></path>
                </svg>
            </button>
        </div>
        <ul class="h-full pt-6">
          
                <li id="list-itemHome" class="relative flex items-center py-2 px-3 my-2 mx-2 font-medium rounded-lg cursor-pointer transition-colors group hover:bg-indigo-200 text-gray-600">
                    <span class="overflow-hidden transition-all w-52">Inicio</span>
                </li>
    
           
                <li id="list-itemSearch" class="relative flex items-center py-2 px-3 my-2 mx-2 font-medium rounded-lg cursor-pointer transition-colors group hover:bg-indigo-200 text-gray-600">
                    <span class="overflow-hidden transition-all w-52">Buscar</span>
                </li>
          
        </ul>
        <div class="flex flex-row justify-between items-center overflow-hidden mb-8 transition-all w-52 ml-3"></div>
        <div class="border-t flex p-3">
            <img src="./logolucmar.jpg" class="w-10 h-10 rounded-md" />
            <div id="user-info" class="flex justify-between items-center overflow-hidden transition-all w-52 ml-3">
                <div class="leading-4">
                    <h4 class="font-semibold">Usuario</h4>
                    <span class="text-xs text-gray-600">admin@lucmar.com</span>
                </div>
                <svg viewBox="0 0 24 24" width="20" height="20">
                    <path d="M12 7h8v2h-8zM12 11h8v2h-8zM12 15h8v2h-8z"></path>
                </svg>
            </div>
        </div>
    </nav>
</aside>


<script>
    document.addEventListener("DOMContentLoaded", (event) => {
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
</script>


</body>

</html>