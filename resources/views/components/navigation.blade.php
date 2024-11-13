<nav class="absolute bottom-8 w-auto bg-black rounded-full px-14 py-4">
    <ul class="font-funnel flex flex-row justify-between items-center gap-4 space-x-4">
        <li>
            <a href="/{{app()->getLocale()}}" 
               class="text-white text-sm {{ request()->segment(2) === null ? 'font-bold' : 'text-sm' }}">
                {{__('home')}}
            </a>
        </li>
        <li>
            <a href="/{{app()->getLocale()}}/{{__('contact_slug')}}" 
               class="text-white text-sm {{ request()->segment(2) === __('contact_slug') ? 'font-bold' : '' }}">
                {{__('contact')}}
            </a>
        </li>
        <li>
            <a href="/{{app()->getLocale()}}/{{__('naves_slug')}}" 
               class="text-white text-sm {{ request()->segment(2) === __('naves_slug') ? 'font-bold' : '' }}">
                {{__('naves')}}
            </a>
        </li>
        <li>
            <a href="/{{app()->getLocale()}}/{{__('oficinas_slug')}}" 
               class="text-white text-sm {{ request()->segment(2) === __('oficinas_slug') ? 'font-bold' : '' }}">
                {{__('oficinas')}}
            </a>
        </li>
        <li>
            <a href="/{{app()->getLocale()}}/{{__('modulos_slug')}}" 
               class="text-white text-sm {{ request()->segment(2) === __('modulos_slug') ? 'font-bold' : '' }}">
                {{__('modulos')}}
            </a>
        </li>
        <li>
            <a href="/{{app()->getLocale()}}/{{__('localizacion_slug')}}" 
               class="text-white text-sm {{ request()->segment(2) === __('localizacion_slug') ? 'font-bold' : '' }}">
                {{__('localizacion')}}
            </a>
        </li>
    </ul>
</nav>