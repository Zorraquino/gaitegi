<header class="z-30 fixed tablet:relative w-full bg-gaitegi-originals-white flex items-center justify-between border-b border-solid border-gaitegi-originals-black">
    
    <div class="p-4 tablet:p-8">
        <a href="/{{request()->segment(1)}}/"><img class="" alt="gaitegi__logo" src="{{ asset('images/gaitegi__logo.svg') }}"/></a>
    </div>

    <div class="h-full flex flex-row items-center justify-center gap-4 pr-4 tablet:pr-0">
        <nav class="flex flex-row divide-x divide-gaitegi-originals-black">
            <a class="px-2 leading-none {{ (request()->segment(1) === 'es') ? 'font-bold' : '' }}" href="/es/{{request()->segment(2)}}">ES</a>
            <a class="px-2 leading-none {{ (request()->segment(1) === 'eu') ? 'font-bold' : '' }}" href="/eu/{{request()->segment(2)}}">EU</a>
        </nav>
        <a class="hidden tablet:flex font-funnel text-body-xl bg-gaitegi-originals-red text-gaitegi-originals-white w-full h-full items-center justify-center px-16">
            {{ __('llamanos') }}
        </a>
        <button id="toggleMenu" class="flex tablet:hidden p-2 border border-solid border-gaitegi-originals-black">
            <svg class="cursor-pointer pointer-events-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 12H21" stroke="#131213" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3 6H21" stroke="#131213" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3 18H21" stroke="#131213" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>

</header>