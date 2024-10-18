@props(['active'])
<div>

    <!-- Require css -->
    <style>
        .scroll-hidden::-webkit-scrollbar {
            height: 0px;
            background: transparent;
            /* make scrollbar transparent */
        }
    </style>
    <nav x-data="{ isOpen: false, isDropdown: false }" class="relative " data-aos="zoom-out" data-aos-easing="linear" data-aos-duration="1000">
        <div class="flex flex-col md:justify-between md:flex-row md:items-center">
            <div class="flex items-center justify-around flex-1 md:justify-normal">
                <div class="flex items-center gap-2 lg:gap-8">
                    <div class="flex items-center gap-4">
                        <a href="#">
                            <img class="w-10" height="10" src="{{ asset('storage/icon/phonecall.svg') }}"
                                alt="">
                        </a>
                        <div class="flex flex-col text-xs lg:text-base ">
                            <div class="font-regular lead text-cssecondary">Bussiness</div>
                            <div class="font-bold">+62 878-1112-1888</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <a href="#">
                            <img class="w-10" height="10" src="{{ asset('storage/icon/locations.svg') }}"
                                alt="">
                        </a>
                        <div class="flex flex-col text-xs lg:text-base">
                            <div class="font-regular lead text-cssecondary">Main Location</div>
                            <div class="font-bold">Jl. Magelang km. 5, <br> Yogyakarta</div>
                        </div>
                    </div>

                </div>
                <!-- Mobile menu button -->
                <div class="flex gap-2 md:hidden">
                    {{-- <a class="relative text-gray-700 transition-colors duration-300 transform dark:text-gray-200 md:block hover:text-gray-600 dark:hover:text-gray-300"
                        href="#">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="absolute top-0 left-0 p-1 text-xs text-white bg-blue-500 rounded-full"></span>
                    </a> --}}
                    <button x-cloak @click="isOpen = !isOpen" type="button"
                        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                        aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>
                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
            <a href="/" wire:navigate class="self-center px-5 pt-6 md:pt-0" href="#">
                <img class="w-52" src="{{ asset('storage/logo/logokenes.png') }}" alt="">
            </a>
            <div class="flex-1 md:justify-between-center">
                <div class="flex items-center justify-end">
                    <div class="hidden mx-10 md:block">
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <input type="text" x-data="{ searchQuery: '' }" x-model="searchQuery"
                                @keydown.enter="if (searchQuery) { window.location.assign('/catalog?search=' + encodeURIComponent(searchQuery)) }"
                                class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300"
                                placeholder="Search">

                        </div>
                    </div>
                    {{-- <a class="relative hidden text-gray-700 transition-colors duration-300 transform dark:text-gray-200 md:block hover:text-gray-600 dark:hover:text-gray-300"
                        href="#">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="absolute top-0 left-0 p-1 text-xs text-white bg-blue-500 rounded-full"></span>
                    </a> --}}
                </div>
            </div>
            <div class="mt-4 md:py-3 -mx-auto">
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                    class="absolute z-50 justify-center w-screen py-3 transition-all duration-300 ease-in-out bg-white -left-5 top-30 dark:bg-gray-800 md:hidden">
                    <div class="flex flex-col items-center md:flex-row md:mx-1">
                        <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                            href="{{ route('homepage') }}">Home</a>
                        <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                            href="{{ route('promo') }}">Promo</a>
                        <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                            href="{{ route('about') }}">About Us</a>
                        <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                            href="{{ route('outlets') }}">Outlets</a>
                        <div x-data="{ isDropdown: false }" class="relative inline-block ">
                            <!-- Dropdown toggle button -->
                            <a @click="isDropdown = !isDropdown"
                                class="relative z-10 flex my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform cursor-pointer dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0">
                                <span class="mx-1">E-Catalog</span>
                                <svg :class="[isDropdown ? 'rotate-180' : 'rotate-0']"
                                    class="w-5 h-5 mx-1 duration-300 " viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div x-show="isDropdown" @click.away="isDropdown = false"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90"
                                class="flex flex-col text-center md:hidden">
                                <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                                    href="#">Marketing</a>
                                <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                                    href="#">Outlets</a>
                                <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                                    href="#">Customers</a>
                            </div>

                            <!-- Dropdown menu -->
                        </div>
                    </div>

                    <!-- Search input on mobile screen -->
                    <div class="px-6 my-4 md:hidden">
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </span>

                            <input type="text"
                                class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300"
                                placeholder="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </nav>
</div>
<script>
    function searchUpdate(query) {
        window.location.href = `/catalog?search=${query}`;
    }
</script>
