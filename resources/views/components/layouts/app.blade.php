<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-head>{{ __(app('pageName')) }}</x-head>
        <title>{{ __(app('pageName')) }}</title>
    </head>
    <body class="relative h-screen flex flex-col justify-between selection:bg-gaitegi-originals-red selection:text-gaitegi-originals-white">

        <x-header></x-header>

        <main class="w-full grow mt-12 mini:mt-12 tablet:mt-0">
            {{$slot}}
        </main>

        @if (request()->segment(2) !== 'localizacion' && request()->segment(2) !== 'kokapena')
        <div class="flex flex-col laptop:hidden pb-6">
            <x-footer></x-footer>
        </div>
        @endif

        <x-navigation></x-navigation>

    </body>
</html>
