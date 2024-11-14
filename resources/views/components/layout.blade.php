<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-head>{{__('home')}}</x-head>
    </head>
    <body class="relative h-screen flex flex-col justify-between selection:bg-[#FF2D20] selection:text-white">

        <x-header></x-header>

        <main class="w-full grow">
            {{$slot}}
        </main>

        <x-navigation></x-navigation>

    </body>
</html>
