<nav class="flex lg:hidden max-w-screen-xl mx-auto p-4 flex justify-between items-center space-x-4 absolute z-10 w-full right-0 mr-0">
    <div>&nbsp;</div>
    <div class="-mr-2 flex">
        <button type="button" class="ham inline-flex items-center justify-center p-2 rounded-md text-gray-400 bg-white border hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-teal-500" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="menuIcon block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg class="xIcon hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="menu p-12 text-2xl">
            <div class="menuLink cursor-pointer" onclick="Livewire.emit('openModal', 'contact')"><span class="px-4 text-xl py-2 block hover:text-gray-200" style="font-family:exolight;">contact</span></div>
            <div><a href="/download-resume" target="_blank" class="menuLink block"><span class="px-4 text-xl py-2 block hover:text-gray-200">resume</span></a></div>
        </div>
    </div>
</nav>
<script>
    var menu = document.querySelector(".menu")
    var ham = document.querySelector(".ham")
    var xIcon = document.querySelector(".xIcon")
    var menuIcon = document.querySelector(".menuIcon")

    ham.addEventListener("click", toggleMenu)

    function toggleMenu() {
        if (menu.classList.contains("showMenu")) {
            menu.classList.remove("showMenu");
            xIcon.style.display = "none";
            menuIcon.style.display = "block";
            ham.classList.remove("fixbtn");
        } else {
            menu.classList.add("showMenu");
            xIcon.style.display = "block";
            menuIcon.style.display = "none";
            ham.classList.add("fixbtn");
        }
    }

    var menuLinks = document.querySelectorAll(".menuLink")

    menuLinks.forEach(
        function (menuLink) {
            menuLink.addEventListener("click", toggleMenu)
        }
    )
</script>
