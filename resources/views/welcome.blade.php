<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel+</title>

    @include('links')

    <link rel="stylesheet" href="{{ asset('css/welcome/partials/carousel.css') }}">


@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div class="relative min-h-screen flex flex-col items-center justify-start selection:bg-[#FF2D20] selection:text-white">
        @include('welcome.partials.navigation')

        <main class="w-full">
            @include('welcome.partials.carousel')
        </main>
        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        </footer>
    </div>
</div>
    @include('scripts')
</body>
</html>
