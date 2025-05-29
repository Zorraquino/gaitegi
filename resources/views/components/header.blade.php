<header class="z-30 fixed tablet:relative w-full bg-gaitegi-originals-white flex items-center justify-between border-b border-solid border-gaitegi-originals-black">
    
    <nav class="z-30 hidden laptop:grid w-full grid-cols-6 items-center border-gaitegi-originals-black">
        <div class="col-span-1 p-5">
            <a href="{{ url('/') }}/{{request()->segment(1)}}/"><img class="w-[210px] mobile:max-w-full mobile:w-auto h-auto" alt="gaitegi__logo" src="{{ asset('images/gaitegi__logo.svg') }}"/></a>
        </div>

        @foreach(__('navigation') as $key => $item)
            <div class="col-span-1 h-full flex items-center justify-center border-l border-solid border-gaitegi-originals-black {{ 
                    (request()->segment(2) === $item['slug']) ? 'bg-gaitegi-originals-black text-gaitegi-originals-white' : 'text-gaitegi-originals-black' 
                }}">
                <a href="{{ url('/') }}/{{app()->getLocale()}}/{{$item['slug']}}" 
                class="font-funnel w-full h-full text-body-m text-current text-center flex items-center justify-center p-4 hover:bg-gaitegi-originals-gray hover:text-gaitegi-originals-black transition-all">
                    {{$item['label']}}
                </a>
            </div>
        @endforeach

        <ul class="col-span-1 h-full flex items-center justify-end border-l border-solid border-gaitegi-originals-black">
            <div class="flex flex-row divide-x divide-gaitegi-originals-black mr-8">
                <a class="px-2 leading-none text-xs text-gaitegi-originals-black {{ (request()->segment(1) === 'es') || (request()->segment(1) == '') ? 'font-bold' : '' }}" 
                    href="{{ url('/') }}/es/{{ app('langMenu')['es'] }}">ES</a>
                <a class="px-2 leading-none text-xs text-gaitegi-originals-black {{ (request()->segment(1) === 'eu') ? 'font-bold' : '' }}" 
                    href="{{ url('/') }}/eu/{{ app('langMenu')['eu'] }}">EU</a>
                <a class="px-2 leading-none text-xs text-gaitegi-originals-black {{ (request()->segment(1) === 'en') ? 'font-bold' : '' }}" 
                    href="{{ url('/') }}/en/{{ app('langMenu')['en'] }}">EN</a>
            </div>
        </ul>

        <div class="col-span-1 h-full flex items-center justify-center border-l border-solid border-gaitegi-originals-black bg-gaitegi-originals-red">
            <a href="/{{ request()->segment(1) ?? 'es' }}/{{ __('consultanos_href') }}" class="flex gap-4 font-funnel text-xs text-gaitegi-originals-white hover:bg-gaitegi-originals-red/75 cursor-pointer transition-all items-center justify-center w-full h-full px-2 py-1">
                {!! file_get_contents('images/phone.svg') !!}
                {!! __('consultanos') !!}
            </a>
        </div>
    </nav>
    
    <div class="laptop:hidden w-full flex items-center justify-between p-4">
        <a href="{{ url('/') }}/{{request()->segment(1)}}/"><img class="tablet:w-[170px] w-[105px] h-auto" alt="gaitegi__logo" src="{{ asset('images/gaitegi__logo.svg') }}"/></a>
        
        <div class="flex items-center gap-2">
            <ul class="flex flex-row divide-x divide-gaitegi-originals-black">
                <a class="px-2 leading-none text-xs text-gaitegi-originals-black {{ (request()->segment(1) === 'es') || (request()->segment(1) == '') ? 'font-bold' : '' }}" 
                    href="{{ url('/') }}/es/{{ app('langMenu')['es'] }}">ES</a>
                <a class="px-2 leading-none text-xs text-gaitegi-originals-black {{ (request()->segment(1) === 'eu') ? 'font-bold' : '' }}" 
                    href="{{ url('/') }}/eu/{{ app('langMenu')['eu'] }}">EU</a>
                <a class="px-2 leading-none text-xs text-gaitegi-originals-black {{ (request()->segment(1) === 'en') ? 'font-bold' : '' }}" 
                    href="{{ url('/') }}/en/{{ app('langMenu')['en'] }}">EN</a>
            </ul>
            
            <button id="toggleMenu" class="flex p-2 border border-solid border-gaitegi-originals-black">
                {!! file_get_contents('images/hamburger.svg') !!}
            </button>
        </div>
    </div>

    <nav id="mobileMenu" class="z-20 fixed top-[65px] tablet:top-[81px] right-0 flex flex-col laptop:hidden w-full h-[calc(100vh-65px-96px)] tablet:h-[calc(100vh-81px-96px)] bg-[#EEEEEE] border-t border-solid border-gaitegi-originals-black transition-colors">
        <ul class="w-full h-full font-funnel flex flex-col items-center gap-0 divide-y divide-gaitegi-originals-black">
            @foreach(__('navigation') as $key => $item)
                <li class="w-full flex-1 flex items-center justify-center {{ 
                        (request()->segment(2) === $item['slug']) ? 'bg-gaitegi-originals-black text-gaitegi-originals-white' : 'text-gaitegi-originals-black' 
                    }}">
                    <a href="{{ url('/') }}/{{app()->getLocale()}}/{{$item['slug']}}" 
                    class="font-funnel w-full h-full text-body-l text-current text-right flex items-center justify-end py-4 px-8 hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                        {{$item['label']}}
                    </a>
                </li>
            @endforeach
 
            <li class="w-full flex-1 flex items-center justify-center {{ 
                    (request()->segment(2) === __('consultanos_href')) ? 'bg-gaitegi-originals-black text-gaitegi-originals-white' : 'text-gaitegi-originals-black' 
                }}">
                <a href="{{ url('/') }}/{{app()->getLocale()}}/{{__('consultanos_href')}}" 
                class="font-funnel w-full h-full text-body-l text-current text-right flex items-center justify-end py-4 px-8 hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                    {{__('contacto_movil')}}
                </a>
            </li>
        </ul>
    </nav>

    <div id="llamanos" class="block laptop:hidden z-20 fixed bottom-0 w-full cursor-pointer">
        <a href="tel:944790369" class="flex gap-4 font-funnel text-body-l bg-gaitegi-originals-red text-gaitegi-originals-white w-full items-center justify-center p-6">
            {!! file_get_contents('images/phone.svg') !!}
            {!! __('llamanos') !!}
        </a>
    </div>
    

</header>   