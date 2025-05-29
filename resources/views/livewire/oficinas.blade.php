<div class="h-full tablet:h-full laptop:h-[calc(100%_+_96px)] grid grid-cols-12">
    <div class="col-span-12 laptop:col-span-6 flex flex-col border-r-[0.5px] border-solid border-gaitegi-originals-black order-2 laptop:order-1">
        <div id="title" class="px-4 pb-10 pt-8 tablet:p-8">
            <h1 class="font-funnel text-title-m tablet:text-title-l desktop:text-title-xl !font-bold">{!! __('oficinas_title') !!}</h1>
            <span class="block text-body-l pt-4">{!! __('oficinas_subtitle') !!}</span>
        </div>
        <div id="information" class="grow flex flex-col px-4 pb-10 pt-8 tablet:p-8 overflow-auto mb-0">
            <p class="pb-8">{!! __('oficinas_p1') !!}</p>
            <div class="grid grid-cols-4 gap-x-6 gap-y-6 mb-0">
                @foreach(__('oficinasCaracteristicas') as $key => $item)
                    <span class="col-span-6 tablet:col-span-3 flex gap-4 text-balance pr-0 tablet:pr-4">
                        <span class="w-[24px]">
                            @php
                                $iconFile = $item['icon'] ?? 'warehouse.svg';
                                $iconPath = 'images/icons/' . $iconFile;
                                $isImageFile = str_ends_with(strtolower($iconFile), '.png') || str_ends_with(strtolower($iconFile), '.jpg') || str_ends_with(strtolower($iconFile), '.jpeg');
                            @endphp
                            @if($isImageFile)
                                <img src="{{ asset($iconPath) }}" alt="icono" class="w-[24px] h-auto max-w-none">
                            @else
                                {!! file_get_contents($iconPath) !!}
                            @endif
                        </span>
                        {!! $item['text'] !!}
                    </span>
                @endforeach
            </div>
             <div class="pt-8 hidden tablet:block">
                <a href="{{ url('/') }}/{{app()->getLocale()}}/{{__('consultanos_href')}}" class="w-fit flex gap-4 font-funnel text-body-l bg-gaitegi-originals-red text-gaitegi-originals-white hover:bg-gaitegi-originals-red/75 items-center justify-center px-8 py-4">
                    {!! __('consultanos') !!}
                    {!! file_get_contents('images/mail.svg') !!}
                </a>
            </div>
        </div>
    </div>
    <div class="col-span-12 laptop:col-span-6 h-[240px] tablet:h-full divide-y divide-gaitegi-originals-black border-l-[0.5px] border-solid border-gaitegi-originals-black order-1 laptop:order-2">
    
        <div id="images" class="w-full h-[240px] tablet:h-full z-0" styles="view-transition-name: image-container">
            <img alt="oficinas_gaitegi"  class="w-full h-full object-cover z-0" src="{{ asset('images/gaitegi-oficinas-new.jpg') }}?v=3"/>
        </div>

    </div>
</div>