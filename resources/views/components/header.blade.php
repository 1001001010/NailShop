<header class="flex flex-col w-full relative">
    <div class="w-full h-6 bg-[#F7BDF6]"></div>
    <div class="grid-container bg-white py-4 max-md:border max-md:border-[#F7BDF6]/70">
        <div class="flex items-center justify-between gap-6">
            <a href="{{ route('index') }}" class="font-Caveat font-bold text-4xl">NailShop</a>
            <nav id="menu"
                class="flex items-center gap-6 transition-all duration-500 z-[4] max-md:flex-col max-md:bg-white max-md:w-full max-md:absolute max-md:left-0 max-md:py-4 max-md:top-0 max-md:-translate-y-full">
                <a href="Pages/catalog.html"
                    class="flex flex-col after:w-0 after:h-px after:bg-[#292929] after:transition-all after:duration-500 hover:after:w-full">Каталог</a>
                <a class="transition-all duration-500 hover:text-[#F242EE]/70">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="icon text-3xl" width="1em" height="1em"
                        viewBox="0 0 24 24" data-v-4fa0a2a1="">
                        <path fill="currentColor"
                            d="M12 12q-1.65 0-2.825-1.175T8 8t1.175-2.825T12 4t2.825 1.175T16 8t-1.175 2.825T12 12m-8 8v-2.8q0-.85.438-1.562T5.6 14.55q1.55-.775 3.15-1.162T12 13t3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2V20z">
                        </path>
                    </svg>
                </a>
                <a href="Pages/favourites.html" class="transition-all duration-500 hover:text-[#F242EE]/70">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="icon text-3xl" width="1em" height="1em"
                        viewBox="0 0 24 24" data-v-4fa0a2a1="">
                        <path fill="currentColor"
                            d="M12 20.325q-.35 0-.712-.125t-.638-.4l-1.725-1.575q-2.65-2.425-4.788-4.812T2 8.15Q2 5.8 3.575 4.225T7.5 2.65q1.325 0 2.5.562t2 1.538q.825-.975 2-1.537t2.5-.563q2.35 0 3.925 1.575T22 8.15q0 2.875-2.125 5.275T15.05 18.25l-1.7 1.55q-.275.275-.637.4t-.713.125">
                        </path>
                    </svg>
                </a>
                <a href="Pages/cart.html" class="transition-all duration-500 hover:text-[#F242EE]/70">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="icon text-3xl" width="1em" height="1em"
                        viewBox="0 0 24 24" data-v-4fa0a2a1="">
                        <path fill="currentColor"
                            d="M17 18c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2s2-.9 2-2s-.9-2-2-2M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2s-.9-2-2-2m0-3l1.1-2h7.45c.75 0 1.41-.41 1.75-1.03L21.7 4H5.21l-.94-2H1v2h2l3.6 7.59L3.62 17H19v-2z">
                        </path>
                    </svg>
                </a>
                @guest
                    <a href="{{ route('profile') }}"
                        class="px-4 py-2 rounded-xl opacity-70 border border-[#F242EE] bg-[#F242EE] text-white transition-all duration-500 hover:bg-transparent hover:text-[#F242EE]">Вход</a>
                @else
                    <a href="{{ route('profile') }}"
                        class="px-4 py-2 rounded-xl opacity-70 border border-[#F242EE] bg-[#F242EE] text-white transition-all duration-500 hover:bg-transparent hover:text-[#F242EE]">Профиль</a>
                @endguest
            </nav>
            <button id="toggler" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="icon text-3xl" width="1em" height="1em" viewBox="0 0 256 256"
                    data-v-4fa0a2a1="">
                    <path fill="currentColor"
                        d="M228 128a12 12 0 0 1-12 12H40a12 12 0 0 1 0-24h176a12 12 0 0 1 12 12M40 76h176a12 12 0 0 0 0-24H40a12 12 0 0 0 0 24m176 104H40a12 12 0 0 0 0 24h176a12 12 0 0 0 0-24">
                    </path>
                </svg>
            </button>
        </div>
    </div>
    <div id="overlay" class="fixed inset-0 top-[100px] bg-black/70 md:hidden z-[3] hidden"></div>
</header>
