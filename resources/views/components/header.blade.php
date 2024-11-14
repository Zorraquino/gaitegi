<header class="w-full bg-white flex items-center justify-between border-b border-solid border-black">
    
    <div class="p-4">
        <img class="" src="{{ asset('images/gaitegi__logo.png') }}"/>
    </div>

    <div class="h-full flex flex-row items-center justify-center gap-4">
        <nav class="flex flex-row">
            <a href="/es/{{request()->segment(2)}}">ES</a>
            <a href="/eu/{{request()->segment(2)}}">EU</a>
        </nav>
        <a class="bg-red-600 text-white w-full h-full flex items-center justify-center px-8">
            Contáctanos
        </a>
    </div>

</header>