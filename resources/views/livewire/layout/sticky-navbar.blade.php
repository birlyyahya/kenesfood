<div class="sticky top-0 z-50" data-aos="zoom-out" data-aos-easing="linear" data-aos-duration="800" data-aos-delay="400"
    data-aos-once="true">
    <nav x-data="{ isOpen: false, isDropdown: false }" class="shadow-md bg-white/80 backdrop-blur-md">
        <div class="mt-4 md:py-3 -mx-auto">
            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                class="absolute inset-x-0 z-20 justify-center w-full py-3 -mx-1 transition-all duration-300 ease-in-out top-30 dark:bg-gray-800 md:mt-0 md:p-0 md:top-20 md:sticky md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
                <div class="flex flex-col items-center md:flex-row md:mx-1">
                    @php
                        $isActive = request()->segment(1);
                    @endphp

                    <x-nav-link :href="route('homepage')" :active="$isActive === '/'" wire:navigate>{{ __('Home') }}</x-nav-link>
                    <x-nav-link :href="route('promo')" :active="$isActive === 'promo'" wire:navigate>{{ __('Promo') }}</x-nav-link>
                    <x-nav-link :href="route('about')" :active="$isActive === 'about'" wire:navigate>{{ __('About Us') }}</x-nav-link>
                    <x-nav-link :href="route('outlets')" :active="request()->routeIs('outlets')" wire:navigate>{{ __('Outlets') }}</x-nav-link>
                    <div x-data="{ isDropdown: false }" class="relative inline-block ">
                        <!-- Dropdown toggle button -->
                        <a @click="isDropdown = !isDropdown"
                            class="relative z-10 flex text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out border-b-2 border-transparent cursor-pointer dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 md:mx-4">
                            <span class="mx-1">E-Catalog</span>
                            <svg :class="[isDropdown ? 'rotate-180' : 'rotate-0']" class="w-5 h-5 mx-1 duration-500"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                        <div x-show="isDropdown" @click.away="isDropdown = false"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                            class="flex flex-col md:hidden">
                            <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                                href="#">Marketing</a>
                            <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                                href="#">Outlets</a>
                            <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                                href="#">Customers</a>
                        </div>

                        <!-- Dropdown menu -->
                        <div x-show="isDropdown" @click.away="isDropdown = false"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                            class="absolute right-0 z-50 hidden w-56 py-2 mt-2 overflow-hidden origin-top-right rounded-md shadow-xl bg-white/80 backdrop-blur-md dark:bg-gray-800 md:block">
                            <a href="#"
                                class="flex items-center p-3 -mt-2 text-sm text-gray-600 transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                <div class="mx-1">
                                    <h1 class="text-sm font-semibold text-gray-700 dark:text-gray-200">Download
                                        Our
                                        Catalog
                                    </h1>
                                </div>
                            </a>

                            <hr class="border-gray-200 dark:border-gray-700 ">

                            <a href="#"
                                class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">

                                <span class="mx-1">
                                    Marketing
                                </span>
                            </a>

                            <a href="#"
                                class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">

                                <span class="mx-1">
                                    Outlets
                                </span>
                            </a>
                            <a href="#"
                                class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">

                                <span class="mx-1">
                                    Customer
                                </span>
                            </a>

                        </div>
                    </div>

                </div>

                <!-- Search input on mobile screen -->
                <div class="my-4 md:hidden">
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
    </nav>
</div>
