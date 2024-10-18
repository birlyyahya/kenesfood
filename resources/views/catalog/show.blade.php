<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="breadcrumb">
        {{ __($data->nama) }}
    </x-slot>
    <?php

    $string = str_replace(' ', '-', $data->nama);

    // Capitalize the first letter of each word
    $slug = Str::lower($string);

    ?>
    <div class="mx-auto mb-32 space-y-24 max-w-7xl">
        <div class="grid grid-cols-2">
            @if (!empty($data->image))
            <img src="{{ asset('storage/product/' . $slug.'.png') }}" alt="" class="w-full max-h-[450px] bg-cover"    data-aos="fade-right">
            @else
            <img src="https://kenesfood.com/resource/assets-frontend/dist/product/{{$slug}}.png" alt="{{$slug}}" class="w-full max-h-[450px] bg-cover"    data-aos="fade-right">
            @endif
            <div class="flex flex-col justify-between px-10">
                <div class="flex flex-col gap-5">
                    <h1 class="text-4xl font-bold tracking-widest" data-aos="fade-left">{{ $data->harga }}</h1>
                    <p class="mt-5 text-lg font-medium" data-aos="fade-left" data-aos-delay="100">{{ $data->isi }}
                    </p>
                    <p class="text-lg font-normal text-neutral-500" data-aos="fade-left" data-aos-delay="100">
                        {{ $data->komposisi }}</p>
                    <div class="flex items-center justify-around mt-10">
                        <div class="flex items-center gap-3" data-aos="fade-left" data-aos-delay="100"
                            data-aos-once="true">
                            <img src="{{ asset('storage/icon/masahari.svg') }}" alt="">
                            <span>{{ $data->masaSimpan }}</span>
                        </div>
                        <div class="flex items-center gap-3" data-aos="fade-left" data-aos-delay="100"
                            data-aos-once="true">
                            <img src="{{ asset('storage/icon/berat.svg') }}" alt="">
                            <span>{{ $data->beratBersih }}</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2" data-aos="fade-left" data-aos-delay="100" data-aos-once="true">
                    <a href="https://wa.me/6287811121888">
                        <button
                            class="w-full py-3 font-medium tracking-wide rounded-lg bg-csorange hover:bg-[#FF7A00] duration-300">Order
                            Now</button>
                    </a>
                    <p class="text-sm font-light text-right text-mono text-cssecondary">You will be direct to whatsapp
                    </p>
                </div>
            </div>
        </div>
        <div x-data="{ selectedTab: 'reviews' }">
            <div role="tablist" aria-label="tab options" @keydown.right.prevent="$focus.wrap().next()"
                @keydown.left.prevent="$focus.wrap().previous()"
                class="flex justify-center mx-auto overflow-y-hidden border-b border-gray-200 overf low-x-auto w-fit whitespace-nowrap dark:border-gray-700">
                <button @click="selectedTab = 'desc'" :aria-selected="selectedTab === 'desc'"
                    :tabindex="selectedTab === 'desc' ? '0' : '-1'"
                    :class="selectedTab === 'desc' ? 'border-csprimary text-csprimary border-b-4' :
                        'text-gray-700/70 border-b-4  '"
                    class="inline-flex items-center h-10 px-4 -mb-px text-sm text-center bg-transparent sm:text-base dark:border-blue-400 dark:text-blue-300 whitespace-nowrap focus:outline-none"
                    type="button" role="tab" aria-controls="tabpaneldesc">
                    Descriptions
                </button>
                <button @click="selectedTab = 'reviews'" :aria-selected="selectedTab === 'reviews'"
                    :tabindex="selectedTab === 'reviews' ? '0' : '-1'"
                    :class="selectedTab === 'reviews' ? 'border-csprimary text-csprimary border-b-4' :
                        'text-gray-700/70 border-b-4  '"
                    class="inline-flex items-center h-10 px-4 -mb-px text-sm text-center bg-transparent sm:text-base dark:border-blue-400 dark:text-blue-300 whitespace-nowrap focus:outline-none"
                    type="button" role="tab" aria-controls="tabpanelreviews">
                    Reviews
                </button>
            </div>
            <div class="px-2 py-4 dark:text-neutral-300">
                <div x-show="selectedTab === 'desc'" id="tabpaneldesc" role="tabpanel" aria-label="desc"
                    x-transition.duration.300ms class="space-y-2">
                    <div>
                        <p class="text-lg font-medium text-black">HARAP DIBACA SEBELUM ORDER :</p>
                        <p class="text-base font-normal text-neutral-500">Pngiriman/pengambilan paling cepat adalah
                            24 jam setelah order diterima Orderan akan diproses pada jam office hour pukul 09.00 -
                            16.30 WIB Jangan lupa untuk memilih opsi Self Pickup atau Delivery Mohon tulis
                            keterangan untuk tanggal Self Pickup/Delivery</p>
                    </div>
                </div>
                <div x-show="selectedTab === 'reviews'" id="tabpanelreviews" role="tabpanel" aria-label="reviews"
                    class="space-y-5" x-transition.duration.300ms>
                    <div class="flex flex-col gap-5" data-aos="fade-left">
                        <div class="flex items-center gap-3">
                            <div class="text-lg font-medium">Rolando Fernandes</div>
                            <div class="text-lg font-medium">-</div>
                            <div class="text-base font-light">{{ $data->nama }}</div>
                        </div>
                        <p class="text-base font-light text-neutral-600">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Velit et, magnam a quisquam quae consequatur quod laboriosam atque
                            debitis? Placeat.</p>
                        <div class="flex items-center gap-2">
                            @for ($i = 1; $i < 6; $i++)
                                @if ($i < 5)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                        viewBox="0 0 24 24">
                                        <g fill="none">
                                            <path
                                                d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                            <path fill="#FFA552"
                                                d="M10.92 2.868a1.25 1.25 0 0 1 2.16 0l2.795 4.798l5.428 1.176a1.25 1.25 0 0 1 .667 2.054l-3.7 4.141l.56 5.525a1.25 1.25 0 0 1-1.748 1.27L12 19.592l-5.082 2.24a1.25 1.25 0 0 1-1.748-1.27l.56-5.525l-3.7-4.14a1.25 1.25 0 0 1 .667-2.055l5.428-1.176z" />
                                        </g>
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#9BA5B7" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="m13.728 3.444l1.76 3.549c.24.494.88.968 1.42 1.058l3.189.535c2.04.343 2.52 1.835 1.05 3.307l-2.48 2.5c-.42.423-.65 1.24-.52 1.825l.71 3.095c.56 2.45-.73 3.397-2.88 2.117l-2.99-1.785c-.54-.322-1.43-.322-1.98 0L8.019 21.43c-2.14 1.28-3.44.322-2.88-2.117l.71-3.095c.13-.585-.1-1.402-.52-1.825l-2.48-2.5C1.39 10.42 1.86 8.929 3.899 8.586l3.19-.535c.53-.09 1.17-.564 1.41-1.058l1.76-3.549c.96-1.925 2.52-1.925 3.47 0"
                                            color="black" />
                                    </svg>
                                @endif
                            @endfor
                        </div>
                    </div>
                    <div class="flex flex-col gap-5" data-aos="fade-left">
                        <div class="flex items-center gap-3">
                            <div class="text-lg font-medium">Firman David</div>
                            <div class="text-lg font-medium">-</div>
                            <div class="text-base font-light">{{ $data->nama }}</div>
                        </div>
                        <p class="text-base font-light text-neutral-600">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Velit et, magnam a quisquam quae consequatur quod laboriosam atque
                            debitis? Placeat.</p>
                        <div class="flex items-center gap-2">
                            @for ($i = 1; $i < 6; $i++)
                                @if ($i < 5)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                        viewBox="0 0 24 24">
                                        <g fill="none">
                                            <path
                                                d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                            <path fill="#FFA552"
                                                d="M10.92 2.868a1.25 1.25 0 0 1 2.16 0l2.795 4.798l5.428 1.176a1.25 1.25 0 0 1 .667 2.054l-3.7 4.141l.56 5.525a1.25 1.25 0 0 1-1.748 1.27L12 19.592l-5.082 2.24a1.25 1.25 0 0 1-1.748-1.27l.56-5.525l-3.7-4.14a1.25 1.25 0 0 1 .667-2.055l5.428-1.176z" />
                                        </g>
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#9BA5B7" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="m13.728 3.444l1.76 3.549c.24.494.88.968 1.42 1.058l3.189.535c2.04.343 2.52 1.835 1.05 3.307l-2.48 2.5c-.42.423-.65 1.24-.52 1.825l.71 3.095c.56 2.45-.73 3.397-2.88 2.117l-2.99-1.785c-.54-.322-1.43-.322-1.98 0L8.019 21.43c-2.14 1.28-3.44.322-2.88-2.117l.71-3.095c.13-.585-.1-1.402-.52-1.825l-2.48-2.5C1.39 10.42 1.86 8.929 3.899 8.586l3.19-.535c.53-.09 1.17-.564 1.41-1.058l1.76-3.549c.96-1.925 2.52-1.925 3.47 0"
                                            color="black" />
                                    </svg>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

</x-app-layout>
