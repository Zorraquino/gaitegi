<div class="h-full grid grid-cols-12">
    <div class="col-span-12 laptop:col-span-6 flex flex-col divide-y divide-gaitegi-originals-black border-r-[0.5px] border-solid border-gaitegi-originals-black order-2 laptop:order-1">
        <div id="title" class="p-4 tablet:p-8">
            <h1 class="font-funnel text-title-m tablet:text-title-xl !font-bold">{{ __('oficinas_title') }}</h1>
            <span class="text-body-l">{{ __('oficinas_subtitle') }}</span>
        </div>
        <div id="information" class="grow p-4 tablet:p-8">
            <p class="pb-8">{!! __('oficinas_p1') !!}</p>
            <p class="">{!! __('oficinas_p2') !!}</p>
        </div>
    </div>
    <div class="col-span-12 tablet:col-span-6 divide-y divide-gaitegi-originals-black border-l-[0.5px] border-solid border-gaitegi-originals-black order-1 laptop:order-2">
    
        <div id="images" class="w-full h-[320px] tablet:h-full" styles="view-transition-name: image-container">
            <img alt="oficinas_gaitegi" style="view-transition-name: image-content" class="w-full h-full object-cover" src="{{ asset('images/oficinas.jpg') }}"/>
        </div>

    </div>
</div>