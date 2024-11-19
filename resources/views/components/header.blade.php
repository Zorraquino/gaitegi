<header class="w-full bg-gaitegi-originals-white flex items-center justify-between border-b border-solid border-gaitegi-originals-black">
    
    <div class="p-4">
        <a wire:navigate.hover href="/{{request()->segment(1)}}/"><img class="" src="{{ asset('images/gaitegi__logo.png') }}"/></a>
    </div>

    <div class="h-full flex flex-row items-center justify-center gap-4">
        <nav class="flex flex-row">
            <a wire:navigate.hover href="/es/{{request()->segment(2)}}">ES</a>
            <a wire:navigate.hover href="/eu/{{request()->segment(2)}}">EU</a>
        </nav>
        <a class="bg-gaitegi-originals-red text-gaitegi-originals-white w-full h-full flex items-center justify-center px-8">
            Llámanos
        </a>
    </div>

</header>