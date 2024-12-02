<div class="h-full grid grid-cols-12">
    <div class="col-span-12 laptop:col-span-6 flex flex-col divide-y divide-gaitegi-originals-black border-r-[0.5px] border-solid border-gaitegi-originals-black order-2 laptop:order-1">
        <div id="title" class="p-4 tablet:p-8">
            <h1 class="font-funnel text-title-m tablet:text-title-xl !font-bold">{{ __('naves_title') }}</h1>
            <span class="text-body-l">{!! __('naves_subtitle') !!}</span>
        </div>
        <div id="information" class="grow flex flex-col p-4 tablet:p-8">
            <div class="flex flex-col justify-start flex-wrap gap-2 mb-8">
                @foreach(__('navesCaracteristicas') as $key => $item)
                    <span>{!! $item['text'] !!}</span>
                @endforeach
            </div>
            <h3 class="font-funnel font-bold text-body-l">{{ __('navesLocalizacion_title') }}</h3>
            <div class="flex flex-col justify-start flex-wrap gap-2 pt-2">
                @foreach(__('navesLocalizacion') as $key => $item)
                    <span>{!! $item['text'] !!}</span>
                @endforeach
            </div>
        </div>

        {{-- <div class="block tablet:hidden">
            <livewire:contact-form />
        </div> --}}

    </div>
    <div class="col-span-12 flex flex-col laptop:col-span-6 divide-y divide-gaitegi-originals-black border-l-[0.5px] border-solid border-gaitegi-originals-black order-1 laptop:order-2">
    
        <div id="images" class="w-full h-[320px] max-h-[384px] grow tablet:h-auto col-span-12 tablet:col-span-6" styles="view-transition-name: image-container">
            <img alt="naves_industriales_gaitegi" style="view-transition-name: image-content" class="w-full h-full object-cover" src="{{ asset('images/naves.jpg') }}"/>
        </div>

        <div class="hidden laptop:block grow h-auto col-span-12 tablet:col-span-6">
            <livewire:contact-form />
        </div>

    </div>
</div>