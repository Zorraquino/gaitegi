<nav>
    <ul class="flex space-x-4">
        <li><a href="/{{app()->getLocale()}}" class="text-gray-800 hover:text-blue-600">{{__('home')}}</a></li>
        <li><a href="/{{app()->getLocale()}}/{{__('contact_slug')}}" class="text-gray-800 hover:text-blue-600">{{__('contact')}}</a></li>
    </ul>
    <ul class="flex space-x-4">
        <li><a href="/es/" class="text-gray-800 hover:text-blue-600">Castellano</a></li>
        <li><a href="/eu/" class="text-gray-800 hover:text-blue-600">Euskera</a></li>
    </ul>
</nav>