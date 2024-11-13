<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-head>404</x-head>
    </head>
    <body class="dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    
                    <x-header></x-header>

                    <main class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8" style="view-transition-name: main-content">
                        <h1>404 Transitioned content</h1>
                    </main>

                    <x-footer></x-footer>
                    
                </div>
            </div>
        </div>
    </body>
</html>
