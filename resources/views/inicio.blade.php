<x-layout>
    <div class="h-full grid grid-cols-12 divide-x divide-black">
        <div class="col-span-12 tablet:col-span-6 flex flex-col divide-y divide-black">
            <div id="title" class="p-8">
                <h1 class="font-funnel text-title-xl font-bold">Alquiler Nave Industrial</h1>
                <h2 class="font-funnel text-title-s font-bold">6.000 m²</h2>
            </div>
            <div id="information" class="grow">
                
            </div>
        </div>
        <div class="col-span-12 tablet:col-span-6 divide-y divide-black">
        
            <div id="images" styles="view-transition-name: image-container">
                <img style="view-transition-name: image-content" class="w-full h-auto" src="{{ asset('images/test2.jpg') }}"/>
            </div>

            <x-form></x-form>

        </div>
    </div>
</x-layout>