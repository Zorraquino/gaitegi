<div class="h-full grid grid-cols-12">
    <div class="col-span-12 laptop:col-span-6 flex flex-col divide-y divide-gaitegi-originals-black border-b-[0.5px] laptop:border-r-[0.5px] border-solid border-gaitegi-originals-black order-2 laptop:order-1">
        <div id="title" class="p-4 tablet:p-8 flex flex-col grow gap-6">
            <h1 class="font-funnel text-title-m tablet:text-title-xl !font-bold">{!! __('localizacion_title') !!}</h1>
            <span class="text-body-m">{!! __('localizacion_subtitle') !!}</span>
            <div class="flex flex-wrap justify-start gap-8 pt-8">
                <a href="https://maps.app.goo.gl/34HfTMhM2Rym5BfC8" target="_blank" class="font-funnel text-body-m text-current text-center flex items-center justify-center py-2 px-8 border border-solid border-gaitegi-originals-black hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                    {{__('localizacion_encuentranos')}}
                </a>
            </div>
        </div>
        <div class="mb-[96px]">
            <livewire:contact-form />
        </div>
    </div>
    <div wire:ignore class="col-span-12 laptop:col-span-6 divide-y divide-gaitegi-originals-black border-l-[0.5px] border-solid border-gaitegi-originals-black order-1 laptop:order-2">
        <div id="map" class="w-full h-[320px] laptop:h-full"></div>
    </div>
</div>