<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="relative min-h-screen bg-white dark:bg-gray-900">
        {{-- <livewire:layout.navigation /> --}}
        <livewire:layout.top />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow dark:bg-gray-800">
                <div class="px-4 py-6 mx-auto max-w-8xl sm:px-6 lg:px-12">
                    <livewire:layout.navbar />
                </div>
            </header>
            @livewire('layout.sticky-navbar')
        @endif

        @if (isset($breadcrumb))
           @livewire('breadcrumb', ['breadcrumb' => (string)$breadcrumb])
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @livewire('layout/footer')
    </div>
</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
