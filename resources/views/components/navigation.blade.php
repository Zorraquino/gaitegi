<nav class="hidden laptop:grid w-full grid-cols-6 items-center bg-[#EEEEEE] border-t border-solid border-gaitegi-originals-black">
    <div class="hidden h-full tablet:flex flex-col col-span-1 p-8 bg-gaitegi-originals-white">
        <span class="text-body-xs">2024 Gaitegi SL</span> 
        <a href="#" class="text-body-xs underline">{{__('aviso_legal')}}</a>
    </div>
    
    <ul class="col-span-4 grid-cols-subgrid h-full font-funnel flex flex-row justify-between items-center gap-0 divide-x divide-gaitegi-originals-black border-x border-solid border-gaitegi-originals-black">
        @foreach(__('navigation') as $key => $item)
            <li class="w-full h-full col-span-1 flex items-center justify-center {{ 
                       (request()->segment(2) === $item['slug']) ? 'bg-gaitegi-originals-black text-gaitegi-originals-white' : 'text-gaitegi-originals-black' 
                   }}">
                <a href="{{ url('/') }}/{{app()->getLocale()}}/{{$item['slug']}}" 
                   class="font-funnel w-full h-full text-body-m text-current text-center flex items-center justify-center p-4 laptop:p-8 hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                    {{$item['label']}}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="hidden tablet:flex col-span-1 h-full flex-col items-end p-8 bg-gaitegi-originals-white">
        <button href="" class="text-body-xs underline h-full" data-cc="show-preferencesModal">{{__('config_cookies')}}</button>
    </div>

</nav>

<nav id="mobileMenu" class="z-20 fixed top-0 pt-20 pb-[108px] right-0 flex flex-col tablet:hidden w-full h-full items-center bg-[#EEEEEE] border-t border-solid border-gaitegi-originals-black transition-colors">
    <ul class="w-full h-full font-funnel flex flex-col justify-between items-center gap-0 divide-y divide-gaitegi-originals-black">
        @foreach(__('navigation') as $key => $item)
            <li class="w-full h-full col-span-1 flex items-center justify-center {{ 
                       (request()->segment(2) === $item['slug']) ? 'bg-gaitegi-originals-black text-gaitegi-originals-white' : 'text-gaitegi-originals-black' 
                   }}">
                <a href="{{ url('/') }}/{{app()->getLocale()}}/{{$item['slug']}}" 
                   class="font-funnel w-full h-full text-body-l text-current text-right flex items-center justify-end p-8 laptop:p-8 hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                    {{$item['label']}}
                </a>
            </li>
        @endforeach
    </ul>
</nav>

<div id="llamanos" class="block tablet:hidden z-20 fixed bottom-0 w-full cursor-pointer">
    <a href="tel:555646464" class="flex gap-4 font-funnel text-body-l bg-gaitegi-originals-red text-gaitegi-originals-white hover:bg-gaitegi-originals-red/75 w-full items-center justify-center p-10">
        {{ __('llamanos') }}
        {!! file_get_contents('images/phone.svg') !!}
    </a>
</div>