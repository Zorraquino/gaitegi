<div class="h-full tablet:h-full laptop:h-[calc(100%_+_96px)] grid grid-cols-12">
    <div class="col-span-12 laptop:col-span-6 flex flex-col divide-y divide-gaitegi-originals-black border-r-[0.5px] border-solid border-gaitegi-originals-black order-2 laptop:order-1">
        <div id="title" class="px-4 pb-10 pt-8 tablet:p-8">
            <h1 class="font-funnel text-title-m tablet:text-title-l desktop:text-title-xl !font-bold">{!! __('naves_title') !!}</h1>
            <span class="block text-body-l pt-4">{!! __('naves_subtitle') !!}</span>
        </div>
        <div id="information" class="flex flex-col px-4 pb-10 pt-8 tablet:p-8 overflow-auto mb-0">
            <div class="grid grid-cols-6 gap-x-6 gap-y-6 tablet:gap-y-6">
                @foreach(__('navesCaracteristicas') as $key => $item)
                    <span class="col-span-6 tablet:col-span-3 flex gap-4 text-balance pr-0 tablet:pr-4"><span class="w-6">{!! file_get_contents('images/warehouse.svg') !!}</span>{!! $item['text'] !!}</span>
                @endforeach
            </div>
        </div>
        <div id="location" class="grow flex flex-col px-4 pb-10 pt-8 tablet:p-8 overflow-auto mb-0">
            <h3 class="font-funnel font-bold text-body-l">{!! __('navesLocalizacion_title') !!}</h3>
            <div class="grid grid-cols-4 gap-x-6 gap-y-6 mb-0 pt-8">
                @foreach(__('navesLocalizacion') as $key => $item)
                    <span class="col-span-4 flex gap-2 text-balance"><span class="w-6">{!! file_get_contents('images/package.svg') !!}</span>{!! $item['text'] !!}</span>
                @endforeach
            </div>
        </div>

    </div>
    <div class="col-span-12 flex flex-col laptop:col-span-6 divide-y divide-gaitegi-originals-black border-l-[0.5px] border-solid border-gaitegi-originals-black order-1 laptop:order-2">
    
        <div id="images" class="w-full h-[240px] grow max-h-[380px] tablet:h-full col-span-12 tablet:col-span-6" styles="view-transition-name: image-container">
            <img alt="naves_industriales_gaitegi"  class="w-full h-full object-cover z-0" src="{{ asset('images/gaitegi-naves.jpg') }}?v=2"/>
        </div>

        <div class="hidden laptop:block grow h-auto col-span-12 tablet:col-span-6">
            <livewire:contact-form />
        </div>

    </div>
</div>