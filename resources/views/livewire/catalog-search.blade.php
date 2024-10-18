<div>
    <div class="mx-auto mb-32 space-y-14 max-w-7xl">
        <div class="max-w-full mx-auto">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" @keydown.enter="$wire.call('updateSearch')"
                    wire:model='search'
                    class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari nama makanan..." required />
                <button type="submit"
                    class="text-white hidden absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </div>
        <br>
        <p class="text-base font-normal tracking-wide text-cssecondary">Showing
            {{ count($this->data) }} Results</p>
        <div class="grid grid-cols-3 gap-5" style="margin-top:20px;">
            @foreach ($products as $product)
                <?php

                $string = str_replace(' ','-', $product->nama);

                // Capitalize the first letter of each word
                $slug = Str::lower($string);

                ?>
                <div class="" data-aos="fade-up">
                    <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                    @if (!empty($product->image))
                    src="{{asset('storage/product/'.$product->image)}}" alt="{{$product->image}}"
                    @else
                    src="https://kenesfood.com/resource/assets-frontend/dist/product/{{$slug}}.png" alt="{{$slug}}"
                    @endif
                    >
                    <div class="flex flex-col mt-2">
                        <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                            {{ $product->nama }}</h1>
                        <p class="mt-2 text-gray-500 dark:text-gray-400 min-h-10">
                            {{ $product->isi }}
                        </p>
                        <div class="flex items-end justify-between mt-4">
                            <div>
                                <div class="text-lg font-medium text-gray-700 dark:text-gray-300">
                                    {{ $product->harga }}
                                </div>
                            </div>
                            <a href="{{ route('catalog.show', slug($product->nama)) }}"
                                class="px-6 py-2 rounded-lg font-medium duration-300 bg-[#EEF1F4] hover:bg-csorange">View
                                Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center">
            <!-- Previous page button -->
            <button wire:click="previousPage" @if ($page == 1) class="hidden" @endif
                x-on:click="window.scrollTo({top: 400, behavior: 'smooth'})"
                class="flex items-center justify-center px-4 py-2 mx-1 text-gray-500 capitalize bg-white rounded-md rtl:-scale-x-100 dark:bg-gray-800 dark:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <!-- Ellipsis and last page link -->
            @if ($page > 5)
                <a href="#" wire:click.prevent="$set('page', 1})"
                    x-on:click="window.scrollTo({top: 400, behavior: 'smooth'})"
                    class="px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-csorange dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                    {{ 1 }}
                </a>
                <span class="px-4 py-2 mx-1 text-gray-700">...</span>
            @endif
            @if ($page > 1)
                <a href="#" wire:click.prevent="$set('page', {{ $page - 1 }})"
                    x-on:click="window.scrollTo({top: 400, behavior: 'smooth'})"
                    class="px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-csorange dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                    {{ $page - 1 }}
                </a>
            @endif

            <div
                class="px-4 py-2 mx-1 text-white transition-colors duration-300 transform rounded-md bg-csorange dark:bg-gray-800 dark:text-gray-200">
                {{ $page }}
            </div>

            @if ($page < $totalPages)
                <a href="#" wire:click.prevent="$set('page', {{ $page + 1 }})"
                    x-on:click="window.scrollTo({top: 400, behavior: 'smooth'})"
                    class="px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-csorange dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                    {{ $page + 1 }}
                </a>
            @endif

            <!-- Ellipsis and last page link -->
            @if ($page < $totalPages - 1)
                <span class="px-4 py-2 mx-1 text-gray-700">...</span>
                <a href="#" wire:click.prevent="$set('page', {{ $totalPages }})"
                    class="px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-csorange dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                    {{ $totalPages }}
                </a>
            @endif

            <!-- Next page button -->
            <button wire:click="nextPage" @if ($page == $totalPages) disabled @endif
                x-on:click="window.scrollTo({top: 400, behavior: 'smooth'})"
                class="flex items-center justify-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md rtl:-scale-x-100 dark:bg-gray-800 dark:text-gray-200 hover:bg-csorange dark:hover:bg-csorange hover:text-white dark:hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
</div>
