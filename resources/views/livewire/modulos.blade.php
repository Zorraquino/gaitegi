<div class="h-full grid grid-cols-12">
    <div class="col-span-12 tablet:col-span-6 flex flex-col divide-y divide-gaitegi-originals-black border-r-[0.5px] border-solid border-gaitegi-originals-black">
        <div id="title" class="p-8">
            <h1 class="font-funnel text-title-xl font-bold">{{ __('modulos_title') }}</h1>
            <span class="text-body-l"></span>
        </div>
        <div id="information" class="grow p-8">
            <p class="">{{ __('modulos_p1') }}</p>
            <p class="">{!! __('modulos_p2') !!}</p>
        </div>
    </div>
    <div class="col-span-12 tablet:col-span-6 divide-y divide-gaitegi-originals-black border-l-[0.5px] border-solid border-gaitegi-originals-black">
    
        <div id="images" class="w-full h-full" styles="view-transition-name: image-container">
            <img alt="modulos_gaitegi" style="view-transition-name: image-content" class="w-full h-full object-cover" src="{{ asset('images/test2.jpg') }}"/>
        </div>

    </div>
</div>