<div>
    <div class="px-2 pb-24 mx-auto max-w-7xl">
        <p class="py-5 font-light tracking-wide text-cssecondary"> Showing {{ $totalProducts }} Result</p>
        <div class="grid grid-cols-1 md:gap-8 xl:gap-12 md:grid-cols-3 xl:grid-cols-3">
            @foreach ($promos as $promo)
                <div class="flex flex-col justify-center gap-4 rounded-lg" data-aos="fade-up">
                    <div class="overflow-hidden bg-center bg-cover rounded-lg cursor-pointer h-52 md:h-60 lg:h-80 group"
                        style="background-image:url('{{ $promo->image }}')">
                        <div
                            class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                        </div>
                    </div>
                    <div class="space-y-2 text-center">
                        <p class="text-sm font-semibold uppercase md:text-base">{{ $promo->name }}</p>
                        <p class="w-4/5 mx-auto text-sm font-light md:text-base">{{ $promo->description }}</p>
                        <p class="w-4/5 mx-auto text-sm font-light md:text-base text-cssecondary">{{ $promo->periode }}
                        </p>
                    </div>
                    <br>
                    <x-orange-button :href="route('promo.show', $promo->slug)" :active="true">
                        {{ __('Read More') }}
                    </x-orange-button>

                </div>
            @endforeach
        </div>
        @if ($loadCount < $totalProducts)
            <div class="flex justify-center mt-32" data-aos="fade-up">
                <x-orange-button wire:click="loadMore" :active="true" name='loadMore'>
                    <div wire:loading.remove wire:target='loadMore'>
                        Load More
                    </div>
                    <span wire:loading>Wait a second...</span>
                </x-orange-button>
            </div>
        @endif

    </div>
</div>
