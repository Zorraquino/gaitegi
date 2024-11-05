<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css'])
        @endif
    </head>
    <body class="font-sans antialiased relative min-h-screen flex flex-col items-center selection:bg-[#FF2D20] selection:text-white">

        <main class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

            <header class="w-full bg-white sticky flex items-center justify-between px-4 py-2 shadow-md rounded-full backdrop-blur">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-auto">
                </div>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="/es/" class="text-gray-800 hover:text-blue-600">Español</a></li>
                        <li><a href="/en/" class="text-gray-800 hover:text-blue-600">English</a></li>
                    </ul>
                </nav>
            </header>

            <div class="pt-16">
                <div class="text-center text-5xl">{{ __('title') }}</div>
            </div>
        </main>

        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            
        </footer>

       @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/js/app.js'])
        @endif 
    </body>
</html>
