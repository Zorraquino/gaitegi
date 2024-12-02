<footer class="pb-20 text-center text-sm text-gaitegi-originals-black dark:text-gaitegi-originals-white/70">
    <a href="{{ url('/') }}/{{app()->getLocale()}}/{{__('consultanos_href')}}" class="flex gap-4 font-funnel text-body-l bg-gaitegi-originals-red text-gaitegi-originals-white hover:bg-gaitegi-originals-red/75 w-full items-center justify-center p-10">
        {{ __('consultanos') }}
        {!! file_get_contents('images/mail.svg') !!}
    </a>
    <div class="flex flex-col gap-4 col-span-1 p-8 bg-gaitegi-originals-white text-gaitegi-originals-black">
        <span class="text-body-xs">2024 Gaitegi SL</span> 
        <a href="#" class="text-body-xs underline">{{__('aviso_legal')}}</a>
        <button href="" class="text-body-xs underline h-full" data-cc="show-preferencesModal">{{__('config_cookies')}}</button>
    </div>
</footer>

@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/js/app.js'])
@endif