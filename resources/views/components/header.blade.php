<header class="w-full bg-gaitegi-originals-white flex items-center justify-between border-b border-solid border-gaitegi-originals-black">
    
    <div class="p-4">
        <a wire:navigate.hover href="/{{request()->segment(1)}}/"><img class="" alt="gaitegi__logo" src="{{ asset('images/gaitegi__logo.png') }}"/></a>
    </div>

    <div class="h-full flex flex-row items-center justify-center gap-4">
        <nav class="flex flex-row divide-x divide-gaitegi-originals-black">
            <a wire:navigate.hover class="px-2 leading-none {{ (request()->segment(1) === 'es') ? 'font-bold' : '' }}" href="/es/{{request()->segment(2)}}">ES</a>
            <a wire:navigate.hover class="px-2 leading-none {{ (request()->segment(1) === 'eu') ? 'font-bold' : '' }}" href="/eu/{{request()->segment(2)}}">EU</a>
        </nav>
        <a class="font-funnel text-body-xl bg-gaitegi-originals-red text-gaitegi-originals-white w-full h-full flex items-center justify-center px-16">
            Llámanos
        </a>
    </div>

</header>