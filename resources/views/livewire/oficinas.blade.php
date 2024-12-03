<div class="h-full grid grid-cols-12">
    <div class="col-span-12 laptop:col-span-6 flex flex-col divide-y divide-gaitegi-originals-black border-r-[0.5px] border-solid border-gaitegi-originals-black order-2 laptop:order-1">
        <div id="title" class="p-4 tablet:p-8">
            <h1 class="font-funnel text-title-m tablet:text-title-xl !font-bold">{{ __('oficinas_title') }}</h1>
            <span class="text-body-l">{{ __('oficinas_subtitle') }}</span>
        </div>
        <div id="information" class="grow flex flex-col px-4 py-10 tablet:p-8 overflow-auto">
            <p class="pb-8">{!! __('oficinas_p1') !!}</p>
            <div class="grid grid-cols-4 gap-x-6 gap-y-6 mb-0">
                @foreach(__('oficinasCaracteristicas') as $key => $item)
                    <span class="col-span-4 flex gap-2"><span class="w-6">{!! file_get_contents('images/package.svg') !!}</span>{!! $item['text'] !!}</span>
                @endforeach
            </div>
             <div class="pt-8">
                <a href="{{ url('/') }}/{{app()->getLocale()}}/{{__('consultanos_href')}}" class="w-fit flex gap-4 font-funnel text-body-l bg-gaitegi-originals-red text-gaitegi-originals-white hover:bg-gaitegi-originals-red/75 items-center justify-center px-8 py-4">
                    {{ __('consultanos') }}
                    {!! file_get_contents('images/mail.svg') !!}
                </a>
            </div>
        </div>
    </div>
    <div class="col-span-12 laptop:col-span-6 divide-y divide-gaitegi-originals-black border-l-[0.5px] border-solid border-gaitegi-originals-black order-1 laptop:order-2">
    
        <div id="images" class="w-full h-[240px] tablet:h-full z-0" styles="view-transition-name: image-container">
            <img alt="oficinas_gaitegi"  class="w-full h-full object-cover z-0" src="{{ asset('images/oficinas_image.jpg') }}"/>
        </div>

    </div>
</div>