<x-app-layout>

    <x-slot name="header">
        {{ __('home') }}
    </x-slot>

    <livewire:layout.carousel>

        <section class="pt-10 mx-auto bg-white dark:bg-gray-900 max-w-7xl ">
            <div class="container px-6 py-10 mx-auto " data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <img src="storage/icon/cheff.svg" alt="" class="pb-3 m-auto">
                <h1 class="text-2xl font-bold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
                    Category Menu
                </h1>
                <p class="mt-2 text-center text-gray-500 dark:text-gray-300">
                    Shop By Category
                </p>
                <div class="grid grid-cols-1 mt-8 md:gap-8 xl:mt-12 xl:gap-12 md:grid-cols-3 xl:grid-cols-3">
                    @foreach ($categories as $values)
                        <div data-aos="fade-up" class="flex flex-col justify-center gap-2 p-5 rounded-lg">
                            <a href="{{ route('category', $values->slug) }}" class="space-y-5">
                                <div class="overflow-hidden bg-center bg-cover rounded-lg cursor-pointer h-52 md:h-60 lg:h-80 group"
                                    style="background-image:url('{{ asset('storage/category/' . $values->image) }}')">
                                    <div
                                        class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-sm font-medium uppercase md:text-base">{{ $values->name }}</p>
                                    <p class="text-sm font-light md:text-base">{{ $values->description }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section
            class="relative object-cover w-full min-h-[400px] shadow-md bg-left md:bg-top bg-no-repeat bg-cover lg:my-20 "
            style="background-image:url(storage/banner/banner1.png)">
            <div class="absolute inset-0 bg-[#FCDE9C]/50">
            </div>

            <div
                class="relative max-w-screen-xl px-4 py-10 md:py-32 mx-auto sm:px-6 min-h-[400px] justify-center md:flex md:items-center md:px-8 place-content-evenly">
                <div class="flex flex-col items-center max-w-xl gap-2 text-center md:gap-4">
                    <h1 class="text-lg font-bold md:text-lg lg:text-xl text-csprimary drop-shadow-sm"
                        data-aos="zoom-in-up" data-aos-duration="800">Kenes Food
                    </h1>
                    <h1 class="text-4xl font-bold tracking-widest uppercase drop-shadow-sm text-csorange"
                        data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="800">
                        Order Your Cake Now</h1>
                    <p class="w-4/5 text-sm font-normal text-center text-csprimary drop-shadow-md" data-aos="zoom-in-up"
                        data-aos-delay="200" data-aos-duration="800">Pilihan favorit anak-anak dan keluarga untuk
                        menemani momen-momen istimewa.</p>
                    <div class="w-full pt-5" data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="800">
                        <a href="https://wa.me/6287811121888"
                            class="justify-center px-4 py-3 text-xs text-white uppercase duration-300 hover:tracking-widest md:text-base md:px-8 md:py-3 bg-csprimary w-fit hover:bg-csorange focus:ring focus:ring-gray-300 focus:ring-opacity-80">Chat
                            Us On Whatsapp</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid grid-cols-1 px-5 py-5 mx-auto mt-10 mb-16 md:mb-28 md:grid-cols-3 max-w-7xl ">
            <div class="col-span-2">
                <div class="flex items-center gap-2 md:gap-4" data-aos="zoom-out-right">
                    <hr class="w-3 h-10 mx-auto my-4 border-0 md:h-16 bg-csprimary md:my-10 dark:bg-gray-700">
                    <div class="flex flex-col w-80">
                        <h1 class="text-xl font-bold tracking-wide md:text-2xl lg:text-3xl">Best Seller</h1>
                        <p class="text-xs font-light md:text-sm lg:text-base text-cssecondary">Our Recommendation</p>
                    </div>
                    <div class="w-full text-center">
                        <span class="inline-block w-20 h-1 bg-gray-800 rounded-full md:w-38 lg:w-52"></span>
                        <span class="inline-block w-6 h-1 ml-1 bg-gray-800 rounded-full"></span>
                        <span class="inline-block w-3 h-1 ml-1 bg-gray-800 rounded-full"></span>
                    </div>
                    <div class="flex flex-row items-center justify-center gap-2 text-center w-52">
                        <a href="" class="text-base duration-200 hover:me-3">More</a>
                        <img src="storage/icon/forwardarrow.svg" alt=""
                            class="w-5 mt-1 duration-200 hover:ms-3">
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-3">
                    <div class="max-w-xs overflow-hidden text-center bg-white rounded-lg dark:bg-gray-800"
                        data-aos="fade-right">
                        <a href="">
                            <img class="object-cover w-full h-[200px] md:h-[303px] mt-2 hover:scale-110 duration-300 "
                                src="storage/product/bakpiakunokini.png" alt="NIKE AIR">
                        </a>
                        <div class="px-4 py-2 text-center">
                            <h1 class="text-base font-medium text-gray-800 capitalize dark:text-white">Bakpia Kuno Kini
                            </h1>
                            <p class="mt-1 text-sm font-medium text-csred/75 dark:text-gray-400">Rp 49.000</p>
                        </div>
                        <a href="/catalog/bakpia-kuno-kini" wire:navigate>
                            <button
                                class="px-6 py-2 text-xs font-semibold text-white uppercase transition-colors duration-300 transform rounded w-full md:w-[85%] bg-csorange hover:bg-[#FF7A00] focus:bg-gray-400 focus:outline-none">
                                <div wire:loading>
                                    Loading...
                                </div>
                                <div wire:loading.remove>
                                    View
                                </div>
                            </button>
                        </a>
                    </div>
                    <div class="max-w-xs overflow-hidden text-center bg-white rounded-lg dark:bg-gray-800"
                        data-aos="fade-right" data-aos-delay="150">
                        <a href="">
                            <img class="object-cover w-full h-[200px] md:h-[303px] mt-2 hover:scale-110 duration-300 "
                                src="storage/product/applecinamon.png" alt="NIKE AIR">
                        </a>
                        <div class="px-4 py-2 text-center">
                            <h1 class="text-base font-medium text-gray-800 capitalize dark:text-white">Apple Cinnamon
                            </h1>
                            <p class="mt-1 text-sm font-medium text-csred/75 dark:text-gray-400">Rp 49.000</p>
                        </div>
                        <a href="/catalog/apple-cinnamon" wire:navigate>
                            <button
                                class="w-full md:w-[85%] px-6 py-2 text-xs font-semibold text-white uppercase transition-colors duration-300 transform rounded w-52 bg-csorange hover:bg-[#FF7A00] focus:bg-gray-400 focus:outline-none">
                                <div wire:loading>
                                    Loading...
                                </div>
                                <div wire:loading.remove>
                                    View
                                </div>
                            </button>
                        </a>
                    </div>
                    <div class="max-w-xs overflow-hidden text-center bg-white rounded-lg dark:bg-gray-800"
                        data-aos="fade-right" data-aos-delay="300">
                        <a href="">
                            <img class="object-cover w-full h-[200px] md:h-[303px] mt-2 hover:scale-110 duration-300 "
                                src="storage/product/robustacookies.png" alt="NIKE AIR">
                        </a>
                        <div class="px-4 py-2 text-center">
                            <h1 class="text-base font-medium text-gray-800 capitalize dark:text-white">Bakpia Premium
                            </h1>
                            <p class="mt-1 text-sm font-medium text-csred/75 dark:text-gray-400">Rp 49.000</p>
                        </div>

                      <a href="/catalog/bakpia-premium" wire:navigate>
                            <button
                                class="w-full md:w-[85%] px-6 py-2 text-xs font-semibold text-white uppercase transition-colors duration-300 transform rounded w-52 bg-csorange hover:bg-[#FF7A00] focus:bg-gray-400 focus:outline-none">
                                <div wire:loading>
                                    Loading...
                                </div>
                                <div wire:loading.remove>
                                    View
                                </div>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative hidden pt-10 ps-10 md:block">
                <div class="h-full">
                    <img src="storage/banner/sidebanner.png" alt=""
                        class="object-cover h-full bg-center bg-cover" data-aos="fade-left">
                </div>
                <div class="absolute right-12" style="bottom:-20px;" data-aos="fade-left">
                    <a href="{{ route('catalog') }}">
                        <button
                            class="flex justify-center gap-3 px-8 py-3 text-center text-white duration-300 hover:gap-5 bg-csdarkblue bottom-8 right-20">Shop
                            Now
                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="20" height="20">
                                <path
                                    d="M7.293 4.707 14.586 12l-7.293 7.293 1.414 1.414L17.414 12 8.707 3.293 7.293 4.707z" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </section>


        <section class="mx-auto">
            <div class="flex flex-col items-center gap-4 pb-5">
                <img src="storage/icon/testimoni.svg" alt="" class="w-26" data-aos="fade-up">
                <div class="flex flex-col items-center gap-2">
                    <h1 class="text-2xl font-bold tracking-wide md:text-3xl" data-aos="fade-up" data-aos-delay="150">
                        Apa Kata Mereka?</h1>
                    <p class="text-sm tracking-wide text-black/70 md:text-base" data-aos="fade-up"
                        data-aos-delay="300">Our review or tag us in instagram</p>
                </div>
            </div>
            <div class="relative w-full items-center min-h-[400px] mb-0 bg-bottom bg-no-repeat bg-cover lg:my-5 lg:mb-0 object-fit "
                style="background-image:url(storage/banner/banner3.png)">
                <div class="absolute inset-0 bg-[#672A0C]/50">
                </div>

                <div x-data="{
                    currentIndex: 0,
                    autoplayIntervalTime: 3000,
                    autoplayInterval: null,
                    isTransitioning: false,
                    testimonials: [
                        { name: 'Firman David', handle: '@firmaan', text: 'Terimakasih kenes food, jajanan snack yang sangat enak, serta murah kualitas premium.' },
                        { name: 'John Doe', handle: '@johndoe', text: 'Kualitas pelayanan yang luar biasa!' },
                        { name: 'Birly', handle: '@birlyyahya', text: 'Sangat rekomend untuk yang cari cookies dengan rasa yang variatif' },
                    ],
                    autoplay() {
                        this.autoplayInterval = setInterval(() => {
                            if (!this.isTransitioning) {
                                this.next();
                            }
                        }, this.autoplayIntervalTime);
                    },
                    next() {
                        if (!this.isTransitioning) {
                            this.isTransitioning = true;
                            const nextIndex = (this.currentIndex + 1) % this.testimonials.length;
                            setTimeout(() => {
                                this.currentIndex = nextIndex;
                                this.isTransitioning = false;
                            }, 600); // Sesuaikan dengan durasi transisi
                        }
                    },
                    prev() {
                        if (!this.isTransitioning) {
                            this.isTransitioning = true;
                            const prevIndex = (this.currentIndex - 1 + this.testimonials.length) % this.testimonials.length;
                            setTimeout(() => {
                                this.currentIndex = prevIndex;
                                this.isTransitioning = false;
                            }, 600); // Sesuaikan dengan durasi transisi
                        }
                    },
                    init() {
                        this.autoplay();
                    }
                }" x-init="init()"
                    class="relative justify-center h-[500px] md:h-[400px] max-w-screen-xl px-4 py-10 mx-auto overflow-hidden md:py-32 sm:px-6 md:flex md:items-center md:px-8">

                    <template x-for="(testi, index) in testimonials" :key="index">
                        <div x-show="currentIndex === index" x-transition:enter="transition ease-out duration-1000"
                            x-transition:enter-start="opacity-0 transform translate-x-full"
                            x-transition:enter-end="opacity-100 transform translate-x-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform translate-x-0"
                            x-transition:leave-end="opacity-0 transform -translate-x-full"
                            x-show="currentIndex === index"
                            class="absolute inset-0 flex items-center justify-center w-full">
                            <div
                                class="flex flex-col items-center w-4/5 max-w-3xl gap-4 p-6 duration-200 rounded-lg shadow-md h-max md:flex-row md:w-full bg-white/20 backdrop-blur-md md:gap-4">
                                <div class="text-center avatar">
                                    <img src="storage/icon/user.svg" alt="" class="h-24 w-26">
                                </div>
                                <div class="text-center caption md:text-start">
                                    <h1 class="text-xl font-medium tracking-wide text-white" x-text="testi.name"></h1>
                                    <p class="text-base tracking-wide text-white font-base" x-text="testi.handle"></p>
                                    <p class="pt-4 font-light tracking-wide text-white md:pt-2" x-text="testi.text">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </template>

                    <div class="absolute rounded-md bottom-12 md:bottom-16 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 bg-white/75 px-1.5 py-1 md:px-2 dark:bg-neutral-950/75"
                        role="group" aria-label="testimonials">
                        <template x-for="(testimonials, index) in testimonials" :key="index">
                            <button disabled class="transition rounded-full size-2 bg-csorange dark:bg-neutral-300"
                                x-on:click="currentIndex = index; isTransitioning = false; clearInterval(autoplayInterval);"
                                x-bind:class="[currentIndex === index ? 'bg-csorange dark:bg-neutral-300' :
                                    'bg-neutral-600/50 dark:bg-neutral-300/50'
                                ]"
                                x-bind:aria-label="'slide ' + (index + 1)"></button>
                        </template>
                    </div>
                </div>
            </div>
        </section>
</x-app-layout>
