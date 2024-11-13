<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="view-transition" content="same-origin">

        <title>Gaitegi - {{__('contact')}}</title>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css'])
        @endif

    </head>
    <body class="font-sans antialiased relative min-h-screen flex flex-col items-center selection:bg-[#FF2D20] selection:text-white">

        <x-header></x-header>

        <main class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8" style="view-transition-name: main-content">

            <h1>{{__('contact')}} Transitioned content</h1>
            
        </main>

        <x-footer></x-footer>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/js/app.js'])
        @endif
    </body>
</html>
