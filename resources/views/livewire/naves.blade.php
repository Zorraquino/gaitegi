<div class="h-full grid grid-cols-12 divide-x divide-black">
    <div class="col-span-12 tablet:col-span-6 flex flex-col divide-y divide-black">
        <div id="title" class="p-8">
            <h1 class="font-funnel text-title-xl font-bold">Naves en alquiler</h1>
            <span class="text-body-l">Desde 2.000 m² a 6.000 m² de planta, con oficinas.</span>
        </div>
        <div id="information" class="grow p-8">
            <p class="font-bold">Selecciona una nave:</p>
        </div>
    </div>
    <div class="col-span-12 tablet:col-span-6 divide-y divide-black">
    
        <div id="images" styles="view-transition-name: image-container">
            <img style="view-transition-name: image-content" class="w-full h-auto" src="{{ asset('images/test.jpg') }}"/>
        </div>

        <x-form></x-form>

    </div>
</div>