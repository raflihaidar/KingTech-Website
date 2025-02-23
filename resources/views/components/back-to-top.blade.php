<button x-data="{ show: false }"
    x-init="window.addEventListener('scroll', () => show = window.scrollY > 691)"
    @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
    class="w-[3.75rem] h-[3.75rem] z-50 hover:scale-105 transform transition-all bg-custom-2 rounded-full flex justify-center items-center fixed bottom-10 right-10 duration-300"
    :class="{ 'opacity-100': show, 'opacity-0 pointer-events-none': !show }"
>
    <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" viewBox="0 0 24 24" class="rotate-180">
        <path fill="white"
            d="m12.02 15.385l3.288-3.289l-.689-.688l-2.1 2.1V8.596H11.5v4.912l-2.1-2.1l-.688.688zM12.002 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
    </svg>
</button>
