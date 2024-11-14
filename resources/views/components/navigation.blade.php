<nav class="w-full flex flex-row justify-between items-center bg-[#EEEEEE] border-t border-solid border-black px-14 py-4">

    <button href="" class="text-xs underline" data-cc="show-preferencesModal">Configurar Cookies</button>
    
    <ul class="border border-solid border-black rounded-full py-4 px-14 font-funnel flex flex-row justify-between items-center gap-24 space-x-4">
        @foreach(__('navigation') as $key => $item)
            <li>
                <a href="/{{app()->getLocale()}}/{{$item['slug']}}" 
                   class="text-black text-m {{ 
                       (request()->segment(2) === $item['slug']) || 
                       (request()->segment(2) === null && $key === 0) 
                       ? 'font-bold underline' : '' 
                   }}">
                    {{$item['label']}}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="flex flex-col">
        <a href="" class="text-xs underline">Aviso legal</a>
        <a href="" class="text-xs underline">Política de privacidad</a>
        <a href="" class="text-xs underline">Política de cookies</a>
    </div>

</nav>