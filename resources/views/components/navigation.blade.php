<nav class="w-full grid grid-cols-6 items-center bg-[#EEEEEE] border-t border-solid border-gaitegi-originals-black">
    <div class="hidden tablet:flex flex-col col-span-1 p-8 bg-gaitegi-originals-white">
        <span class="text-body-xs">2024 Gaitegi SL</span> 
        <a href="#" class="text-body-xs underline">Aviso legal</a>
    </div>
    
    <ul class="col-span-4 grid-cols-subgrid h-full font-funnel flex flex-row justify-between items-center gap-0 divide-x divide-gaitegi-originals-black border-x border-solid border-gaitegi-originals-black">
        @foreach(__('navigation') as $key => $item)
            <li class="w-full h-full col-span-1 flex items-center justify-center {{ 
                       (request()->segment(2) === $item['slug']) ? 'bg-gaitegi-originals-black text-gaitegi-originals-white' : 'text-gaitegi-originals-black' 
                   }}">
                <a wire:navigate.hover :wire:key="{{$key}}" href="/{{app()->getLocale()}}/{{$item['slug']}}" 
                   class="font-funnel w-full h-full text-body-m text-current text-center flex items-center justify-center p-4 laptop:p-8 hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                    {{$item['label']}}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="hidden tablet:flex col-span-1 h-full flex-col p-8 bg-gaitegi-originals-white">
        <button href="" class="text-body-xs underline h-full" data-cc="show-preferencesModal">Configurar Cookies</button>
    </div>

</nav>