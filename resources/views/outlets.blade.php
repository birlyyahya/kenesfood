<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="breadcrumb">
        {{ __('OUTLETS BAKERY, RESTO, AND KOPITIAM') }}
    </x-slot>

    <section class="grid grid-cols-2 md:grid-cols-3">
        @foreach ($outlets as $index => $values)
            <div class="overflow-hidden duration-500 bg-center bg-cover hover:scale-105 hover:z-10 hover:shadow-sm hover:shadow-white h-[380px] md:min-h-[582px] group"
                style="background-image:url('{{ asset('storage/outlets/' . $values->image) }}')" data-aos="zoom-in" data-aos-delay="{{$index + 1 > 1 ? ($index * 100) % 300 : 0}}">
                <div class="w-full h-full p-8 bg-black/60">
                    <div class="flex flex-col justify-between h-full text-white group ">
                        <h1 class="text-2xl font-light text-right text-white drop-shadow-sm">0{{ $index + 1 }}
                        </h1>
                        <div class="flex flex-col gap-2 p-1 md:gap-4 md:p-2 lg:-8">
                            <p class="text-xs font-light md:text-sm">{{ $values->jamBuka }}</p>
                            <h1 class="text-lg font-bold tracking-widest capitalize md:text-3xl">
                                {{ Str::lower($values->nama) }}</h1>
                            <p class="text-sm font-light md:text-base ">{{ Str::limit($values->alamat, 50) }}</p>
                            <p class="text-xs font-light md:text-sm">Wa : {{ $values->nomorTelepon }}</p>
                            <a href="{{ $values->linkMaps }}" target="_blank"
                                class="text-xs font-light duration-300 md:text-sm hover:underline underline-offset-4 w-fit">View
                                Location</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

</x-app-layout>
