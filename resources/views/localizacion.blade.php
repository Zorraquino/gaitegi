<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-head>{{__('contact')}}</x-head>
    </head>
    <body class="relative h-screen flex flex-col items-center selection:bg-[#FF2D20] selection:text-white">

        <x-header></x-header>

        <main class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8" style="view-transition-name: main-content">

            <h1>{{__('localizacion')}} Transitioned content</h1>
            
        </main>

        <x-footer></x-footer>

    </body>
</html>
