<footer class="pb-20 text-center text-sm text-gaitegi-originals-black dark:text-gaitegi-originals-white/70 border-t border-solid border-gaitegi-originals-black">
    <div class="flex flex-col gap-4 col-span-1 p-8 bg-gaitegi-originals-white text-gaitegi-originals-black">
        <span class="text-body-xs">{{ date('Y') }} Gaitegi S.L.</span>
        <a href="{{ url('/') }}/{{app()->getLocale()}}/{{__('legal_route')}}" class="text-body-xs underline">{{__('aviso_legal')}}</a>
        <button href="" class="text-body-xs underline h-full" data-cc="show-preferencesModal">{{__('config_cookies')}}</button>
    </div>
</footer>

@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/js/app.js'])
@endif