<div class="h-full tablet:h-full laptop:h-[calc(100%_+_96px)] grid grid-cols-12">
    <div class="col-span-12 laptop:col-span-6 flex flex-col divide-y divide-gaitegi-originals-black tablet:border-b-0 laptop:border-b-[0.5px] laptop:border-r-[0.5px] border-solid border-gaitegi-originals-black order-2 laptop:order-1">
        <div id="title" class="px-4 pt-6 pb-8 tablet:p-8 tablet:pt-7 flex flex-col gap-6">
            <h1 class="font-funnel text-title-m tablet:text-title-l desktop:text-title-xl !font-bold">{!! __('localizacion_title') !!}</h1>
            <span class="text-body-m text-balance">{!! __('localizacion_oficinas') !!}</span>
            <div class="flex flex-wrap justify-start gap-8 pt-0">
                <a href="https://maps.app.goo.gl/e2HWrEbVqgnp8zAJ6" id="oficinas_map" target="_blank" class="font-funnel text-body-m text-center flex items-center justify-center py-2 px-8 border border-solid border-gaitegi-originals-black hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all active">
                    {{__('localizacion_encuentranos')}}
                </a>
                <a href="https://maps.app.goo.gl/34HfTMhM2Rym5BfC8" id="pabellones_map" target="_blank" class="font-funnel text-body-m text-current text-center flex items-center justify-center py-2 px-8 border border-solid border-gaitegi-originals-black hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                    {{__('localizacion_pabellones')}}
                </a>
            </div>
            {{-- <span class="text-body-m">{!! __('localizacion_naves') !!}</span> --}}
            <span class="text-body-m">{!! __('localizacion_subtitle') !!}</span>
        </div>
        <div class="grow">
            <livewire:contact-form />
        </div>
    </div>
    <div wire:ignore class="relative col-span-12 laptop:col-span-6 divide-y divide-gaitegi-originals-black border-l-[0.5px] border-solid border-gaitegi-originals-black order-1 laptop:order-2">
        <div id="map" class="w-full h-[240px] laptop:h-full relative">
        </div>
        <a id="open-in-maps" href="#" target="_blank" class="absolute top-4 right-4 bg-white font-funnel text-body-m text-current text-center flex items-center justify-center py-2 px-4 !border border-solid border-gaitegi-originals-black hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all z-10">
            {{ __('localizacion_abrir') }}
        </a>
    </div>
</div>