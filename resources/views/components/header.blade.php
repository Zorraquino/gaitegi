<header class="z-30 fixed tablet:relative w-full bg-gaitegi-originals-white flex items-center justify-between border-b border-solid border-gaitegi-originals-black">
    
    <div class="p-4 tablet:p-8">
        <a href="{{ url('/') }}/{{request()->segment(1)}}/"><img class="" alt="gaitegi__logo" src="{{ asset('images/gaitegi__logo.svg') }}"/></a>
    </div>

    <div class="h-full flex flex-row items-center justify-center gap-4 pr-4 laptop:pr-0">
        <nav class="flex flex-row divide-x divide-gaitegi-originals-black">
            <a class="px-2 leading-none {{ (request()->segment(1) === 'es') || (request()->segment(1) == '') ? 'font-bold' : '' }}" href="{{ url('/') }}/es/">ES</a>
            <a class="px-2 leading-none {{ (request()->segment(1) === 'eu') ? 'font-bold' : '' }}" href="{{ url('/') }}/eu/">EU</a>
        </nav>
        <a  href="tel:944790369" class="hidden laptop:flex gap-4 font-funnel text-body-xl bg-gaitegi-originals-red text-gaitegi-originals-white hover:bg-gaitegi-originals-red/75 cursor-pointer transition-all w-full h-full items-center justify-center px-16">
            {!! __('llamanos') !!}
            {!! file_get_contents('images/phone.svg') !!}
        </a>
        <button id="toggleMenu" class="flex laptop:hidden p-2 border border-solid border-gaitegi-originals-black">
            {!! file_get_contents('images/hamburger.svg') !!}
        </button>
    </div>

</header>