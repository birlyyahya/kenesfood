<div>
    <div class="px-4 pt-16 pb-10 mx-auto max-w-7xl">
        <div class="flex flex-row items-center space-x-3 ">
            <hr class="w-2 my-4 border-0 h-14 md:h-16 bg-csorange md:my-10 dark:bg-gray-700">
            <div class="flex flex-col">
                <h1 class="text-xl font-bold tracking-wide uppercase md:text-3xl" data-aos="fade-left">{{ $breadcrumb }}</h1>
                <nav aria-label="breadcrumb" class="w-full dark:bg-gray-100 dark:text-gray-800">
                    <ol class="flex h-8 md:space-x-2 dark:text-gray-800">
                        <li class="flex items-center">
                            <a rel="noopener noreferrer" href="{{route('homepage')}}" title="Back to homepage"
                                class="flex items-center hover:underline" data-aos="fade-left" data-aos-delay="150">Home</a>
                        </li>
                        <li class="flex items-center space-x-1" data-aos="fade-left" data-aos-delay="300">
                            <span class="dark:text-gray-600">/</span>
                            <a rel="noopener noreferrer" href="#"
                                class="flex items-center px-1 capitalize cursor-default">{{$breadcrumb}}</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
