<nav class="flex justify-between bg-[#1C1C1C] text-white p-5 items-center fixed top-0 w-full z-10">
    <p style="font-family: 'Instrument Sans BI'; font-weight: bold; font-size: 22px;">Inspira.</p>

    <!-- Tombol hamburger untuk layar kecil -->
    <div class="md:hidden">
        <button id="hamburger" class="text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <ul id="navMenu"
        class="hidden md:flex md:gap-1 md:items-center md:flex-row absolute md:static bg-[#1C1C1C] w-full left-0 top-[60px] md:top-auto md:w-auto md:bg-transparent"
        style="font-family: 'Instrument Sans'; font-weight: 400;">
        <li class="nav-item p-3 md:p-0 mx-auto text-center md:mr-5"><a href="#home">Home</a></li>
        <li class="nav-item p-3 md:p-0 mx-auto text-center md:mr-5"><a href="#service">Feature</a></li>
        <li class="nav-item p-3 md:p-0 mx-auto text-center"><a href="#about">About Us</a></li>
    </ul>

    <button class="hidden md:block bg-[#FFFFFF] text-[#1C1C1C] py-2 px-3 rounded text-[14px]"
        style="font-family: 'Instrument Sans'; font-weight: 400;">Let's Join</button>
</nav>
