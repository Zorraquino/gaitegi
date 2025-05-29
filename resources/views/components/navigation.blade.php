<nav class="hidden laptop:grid z-30 fixed bottom-0 w-full grid-cols-2 laptop:grid-cols-6 items-center bg-[#EEEEEE] border-t border-solid border-gaitegi-originals-black">
    
    <div class="h-full flex items-center justify-start p-4 tablet:p-8 bg-gaitegi-originals-white col-span-1">
        <span class="text-body-xs">{{ date('Y') }} Gaitegi S.L.</span>
    </div>
    
    <div class="hidden laptop:block laptop:col-span-4 h-full bg-gaitegi-originals-white"></div>
    
    <div class="h-full flex items-center justify-end gap-4 tablet:gap-6 p-4 tablet:p-8 bg-gaitegi-originals-white col-span-1 whitespace-nowrap">
        <a href="{{ url('/') }}/{{app()->getLocale()}}/{{__('legal_route')}}" class="text-body-xs underline whitespace-nowrap">{{__('aviso_legal')}}</a>
        <button href="" class="text-body-xs underline whitespace-nowrap" data-cc="show-preferencesModal">{{__('config_cookies')}}</button>
    </div>

</nav>

<!-- <nav id="mobileMenu" class="z-20 fixed top-0 pt-20 tablet:pt-24 pb-[108px] right-0 flex flex-col laptop:hidden w-full h-full items-center bg-[#EEEEEE] border-t border-solid border-gaitegi-originals-black transition-colors">
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

<div id="llamanos" class="block laptop:hidden z-20 fixed bottom-0 w-full cursor-pointer">
    <a href="tel:944790369" class="flex gap-4 font-funnel text-body-l bg-gaitegi-originals-red text-gaitegi-originals-white w-full items-center justify-center p-10">
        {!! __('llamanos') !!}
        {!! file_get_contents('images/phone.svg') !!}
    </a>
</div> -->