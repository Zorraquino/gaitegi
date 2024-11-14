<nav class="absolute bottom-8 w-auto bg-black rounded-full px-14 py-4">
    <ul class="font-funnel flex flex-row justify-between items-center gap-4 space-x-4">
        @foreach(__('navigation') as $item)
            <li>
                <a href="/{{app()->getLocale()}}/{{$item['slug']}}" 
                   class="text-white text-sm {{ request()->segment(2) === $item['slug'] ? 'font-bold' : '' }}">
                    {{$item['label']}}
                </a>
            </li>
        @endforeach
    </ul>
</nav>