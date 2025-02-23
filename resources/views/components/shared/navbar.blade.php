<nav class="w-full h-[4.625rem] selection:bg-custom-2 selection:text-white bg-white mx-auto flex justify-between sm:px-20 px-5 items-center fixed top-0 z-30 shadow-lg">
    <figure class="flex items-center gap-x-2">
        <img src="{{ URL('images/logo.png') }}" alt="logo king tech">
        <figcaption>
            <p class="sm:text-2xl text-xl font-bold">
                King<span class="text-custom-2">Tech</span>
            </p>
        </figcaption>
    </figure>

    <!-- Desktop Menu -->
    <section class="w-1/2 gap-x-10 sm:flex hidden justify-end items-center py-5 px-3">
        <ul class="flex gap-x-5 font-semibold text-sm cursor-pointer">
            <li>
                    <a href="#beranda" class="hover:text-custom-2 transition-colors">Beranda</a>
                </li>
                <li>
                    <a href="#tentang" class="hover:text-custom-2 transition-colors">Tentang</a>
                </li>
                <li>
                    <a href="#layanan" class="hover:text-custom-2 transition-colors">Layanan</a>
                </li>
                <li>
                    <a href="#portofolio" class="hover:text-custom-2 transition-colors">Portofolio</a>
                </li>
        </ul>
        <figure class="bg-custom-2 p-2 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24">
                <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8A4 4 0 0 1 16 11.37m1.5-4.87h.01"/>
                </g>
            </svg>
        </figure>
    </section>

    <!-- Mobile Menu -->
    <div x-data="{ open: false }" class="sm:hidden">
        <button @click="open = !open" class="relative z-50 flex flex-col gap-1.5 p-2">
            <span class="block w-6 h-0.5 bg-black transition-transform duration-300" :class="{ 'rotate-45 translate-y-2': open }"></span>
            <span class="block w-6 h-0.5 bg-black transition-opacity duration-300" :class="{ 'opacity-0': open }"></span>
            <span class="block w-6 h-0.5 bg-black transition-transform duration-300" :class="{ '-rotate-45 -translate-y-2': open }"></span>
        </button>

        <div x-show="open" x-transition
                class="fixed inset-0 w-full h-full bg-white flex flex-col items-center justify-center gap-y-5 shadow-lg z-40">
                <ul class="text-lg font-semibold">
                    <li>
                            <a href="beranda" class="hover:text-custom-2 transition-colors">Beranda</a>
                        </li>
                        <li>
                            <a href="#tentang" class="hover:text-custom-2 transition-colors">Tentang</a>
                        </li>
                        <li>
                            <a href="#layanan" class="hover:text-custom-2 transition-colors">Layanan</a>
                        </li>
                        <li>
                            <a href="#portofolio" class="hover:text-custom-2 transition-colors">Portofolio</a>
                        </li>
                </ul>
                <figure class="bg-custom-2 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 24 24">
                        <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8A4 4 0 0 1 16 11.37m1.5-4.87h.01"/>
                        </g>
                    </svg>
                </figure>
            </div>
    </div>
</nav>
