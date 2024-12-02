<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-head>{{__('home')}}</x-head>
    </head>
    <body class="relative h-screen flex flex-col justify-between selection:bg-gaitegi-originals-red selection:text-gaitegi-originals-white">

        <x-header></x-header>

        <main class="w-full grow mt-20 tablet:mt-0">
            {{$slot}}
        </main>

        @if (request()->segment(2) !== 'localizacion' && request()->segment(2) !== 'kokapena')
        <div class="flex flex-col laptop:hidden pb-6">
            <x-footer></x-footer>
        </div>
        @else
        <div class="block laptop:hidden pb-[108px]"></div>
        @endif

        @if (session()->has('message'))
            <div class="z-30 fixed bottom-[112px] right-4 py-4 px-8 shadow-sm border border-solid border-green-400 bg-green-200 text-green-950">
                {{ session('message') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="z-30 fixed bottom-[112px] right-4 py-4 px-8 shadow-sm border border-solid border-red-400 bg-red-200 text-red-950">
                {{ session('error') }}
            </div>
        @endif

        <x-navigation></x-navigation>

    </body>
</html>
