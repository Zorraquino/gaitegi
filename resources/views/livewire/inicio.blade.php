<div class="h-full grid grid-cols-12">
    <div class="col-span-12 tablet:col-span-6 flex flex-col divide-y divide-gaitegi-originals-black border-r-[0.5px] border-solid border-gaitegi-originals-black">
        <div id="title" class="p-8">
            <h1 class="font-funnel text-title-xl font-bold">{{ __('home_title') }}</h1>
            <span class="text-body-l">{{ __('home_subtitle') }}</span>
            <div class="flex justify-start gap-8 pt-8">
                <a wire:navigate.hover href="/{{app()->getLocale()}}/{{__('naves_route')}}" 
                   class="font-funnel text-body-m text-current text-center flex items-center justify-center py-2 px-8 border border-solid border-gaitegi-originals-black hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                    {{__('naves')}}
                </a>
                <a wire:navigate.hover href="/{{app()->getLocale()}}/{{__('oficinas_route')}}" 
                   class="font-funnel text-body-m text-current text-center flex items-center justify-center py-2 px-8 border border-solid border-gaitegi-originals-black hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                    {{__('oficinas')}}
                </a>
                <a wire:navigate.hover href="/{{app()->getLocale()}}/{{__('modulos_route')}}" 
                   class="font-funnel text-body-m text-current text-center flex items-center justify-center py-2 px-8 border border-solid border-gaitegi-originals-black hover:bg-gaitegi-originals-black hover:text-gaitegi-originals-white transition-all">
                    {{__('modulos')}}
                </a>
            </div>
        </div>
        <div id="information" class="grow p-8">
            <p class="pb-8">{{ __('home_p1') }}</p>
            <p class="pb-8">{{ __('home_p2') }}</p>
            <p>{{ __('home_p3') }}</p>
        </div>
    </div>
    <div class="col-span-12 tablet:col-span-6 divide-y divide-gaitegi-originals-black">
    
        <div id="images" class="w-full h-full" styles="view-transition-name: image-container">
            <img alt="naves_industriales_gaitegi" style="view-transition-name: image-content" class="w-full h-full object-cover" src="{{ asset('images/test2.jpg') }}"/>
        </div>

    </div>
</div>