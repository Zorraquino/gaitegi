<div class="h-full grid grid-cols-12">
    <div class="col-span-12 laptop:col-span-6 flex flex-col divide-y divide-gaitegi-originals-black tablet:border-b-[0.5px] laptop:border-r-[0.5px] border-solid border-gaitegi-originals-black order-2 laptop:order-2">
        <div id="title" class="p-4 tablet:p-8">
            <h1 class="font-funnel text-title-m tablet:text-title-xl !font-bold">{!! __('home_title') !!}</h1>
            <span class="text-body-l">{!! __('home_subtitle') !!}</span>
            <div class="flex flex-wrap justify-start gap-8 pt-8">
                <a href="/{{app()->getLocale()}}/{!! __('naves_route') !!}" 
                   class="font-funnel text-body-m text-current text-center flex items-center justify-center py-4 px-8 border border-solid border-gaitegi-originals-black hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                    {{__('naves')}}
                </a>
                <a href="/{{app()->getLocale()}}/{{__('oficinas_route')}}" 
                   class="font-funnel text-body-m text-current text-center flex items-center justify-center py-4 px-8 border border-solid border-gaitegi-originals-black hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                    {{__('oficinas')}}
                </a>
                <a href="/{{app()->getLocale()}}/{{__('modulos_route')}}" 
                   class="font-funnel text-body-m text-current text-center flex items-center justify-center py-4 px-8 border border-solid border-gaitegi-originals-black hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                    {{__('modulos')}}
                </a>
            </div>
        </div>
        <div id="information" class="grow flex flex-col px-4 py-10 tablet:p-8 overflow-auto mb-24">
            <p class="pb-8 font-light">{!! __('home_p1') !!}</p>
            <p class="pb-8 font-light">{!! __('home_p2') !!}</p>
            <p class="font-light">{!! __('home_p3') !!}</p>
        </div>
    </div>
    <div class="col-span-12 laptop:col-span-6 divide-y divide-gaitegi-originals-black order-1 laptop:order-2">
    
        <div id="images" class="w-full h-[240px] tablet:h-full z-0" styles="view-transition-name: image-container">
            <video autoplay muted loop class="w-full h-full object-cover z-0" poster="{{ asset('images/home_cover.jpg') }}?v=2">
                <source src="{{ asset('images/gaitegi_video_ubicacion.mp4') }}?v=2" type="video/mp4">
            </video>
        </div>

    </div>
</div>