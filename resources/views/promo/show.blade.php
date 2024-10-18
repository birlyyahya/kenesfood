<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="section">
        <img src="{{ asset($promo->image) }}" alt="Promo Image" class="object-cover w-screen bg-cover">
        <div class="pt-10 pb-32 mx-auto space-y-5 max-w-7xl">
            <div class="flex items-center overflow-x-auto whitespace-nowrap" >
                <a href="{{route('homepage')}}" class="text-gray-600 dark:text-gray-200">
                    Home
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-300">
                    /
                </span>

                <a href="{{route('promo')}}" class="text-gray-600 dark:text-gray-200 hover:underline">
                    promo
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-300">
                    /
                </span>

                <a href="#" class="text-orange-600 dark:text-orange-400 hover:underline">
                    {{$promo->name}}
                </a>
            </div>
            <h1 class="pt-2 text-4xl font-bold tracking-wide uppercase text-csprimary" data-aos="fade-up" data-aos-duration="1000">{{$promo->name}}</h1>
            <p class="text-base tracking-wide font-base text-black/60" data-aos="fade-up" data-aos-duration="1000">Periode {{$promo->periode}}</p>
            <p class="text-base tracking-wide text-black font-base" data-aos="fade-up" data-aos-duration="1000">{{$promo->description}}</p>
            <p class="pt-5 font-semibold" data-aos="fade-up" data-aos-duration="1000">SYARAT DAN KETENTUAN</p>
            <p data-aos="fade-up" data-aos-duration="1000">{{$promo->ketentuan}}</p>
        </div>
    </div>

</x-app-layout>
