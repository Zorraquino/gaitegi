<nav class="absolute bottom-8 w-auto">
    <ul class="flex flex-row justify-center items-center space-x-4 bg-black">
        <li><a href="/{{app()->getLocale()}}" class="text-white">{{__('home')}}</a></li>
        <li><a href="/{{app()->getLocale()}}/{{__('contact_slug')}}" class="text-white">{{__('contact')}}</a></li>
        <li><a href="/es/" class="text-white">Castellano</a></li>
        <li><a href="/eu/" class="text-white">Euskera</a></li>
    </ul>
</nav>