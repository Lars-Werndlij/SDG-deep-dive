<nav class="h-16 lg:h-24 p-2 drop-shadow-lg bg-white w-full fixed z-50">
    <div class="flex justify-between h-full">
        <img src="images/P17_Horizontaal_Logo_Kleur_RGB.svg" alt="LogoHorizontal" onclick="location.href='#Landing'">
        <div class="flex items-center lg:pr-4">
            <div class="hidden lg:block pr-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
                <p class="font-bold">Taal</p>
            </div>
            <svg id="burgerIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 lg:size-12">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
    </div>
</nav>

<div id="menu" class="fixed w-80 inset-y-0 right-0 z-50 bg-gray-200 bg-opacity-95 transform translate-x-full transition-transform duration-300">
    <div class="flex justify-between items-center bg-white p-2 h-16 lg:h-24">
        <a href="#Landing">
            <img src="images/P17_Wordmark_Kleur_RGB.svg" alt="LogoHorizontal" class="h-16">
        </a>
    </div>

    <div class="flex flex-col items-center space-y-4 mt-16">
        <hr>
        <a href="#Over-Ons" class="text-3xl font-bold">Over Ons</a>
        <hr>
        <a href="#SDG-Houses" class="text-3xl font-bold">SDG Houses</a>
        <hr>
        <a href="#Events" class="text-3xl font-bold">Events & Agenda</a>
        <hr>
        <a href="index.php?page=predikaat" class="text-3xl font-bold">Predikaat</a>
        <hr>
        <a href="#Contacts" class="text-3xl font-bold">Contact</a>
        <hr>
        <div class="lg:hidden flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
            </svg>
            <a href="#" class="text-3xl font-bold mt-auto">Taal</a>
        </div>
    </div>
</div>

<!-- Scriptie -->

<script>
    const burgerIcon = document.getElementById('burgerIcon');
    const menu = document.getElementById('menu');
    const closeMenu = document.getElementById('burgerClose');

    burgerIcon.addEventListener('click', () => {
        menu.classList.remove('translate-x-full');
        menu.classList.add('translate-x-0');
    });

    const closeMenuFunction = () => {
        menu.classList.remove('translate-x-0');
        menu.classList.add('translate-x-full');
    }

    document.addEventListener('click', (e) => {
        if (!menu.contains(e.target) && !burgerIcon.contains(e.target)) {
            closeMenuFunction();
        }
    });
</script>