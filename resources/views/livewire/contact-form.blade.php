<div id="contact" class="col-span-12 tablet:col-span-6 h-full laptop:max-h-[346px] border-b-0 tablet:border-b tablet:border-solid tablet:border-gaitegi-originals-black">

    <form accept-language="{{ app()->getLocale() }}" wire:submit.prevent="submit" class="h-auto laptop:h-full pb-0 laptop:pb-0">

        <div class="relative h-full grid grid-cols-4 tablet:grid-cols-4 divide-y divide-gaitegi-originals-black">
            
            <div class="grid grid-cols-subgrid col-span-4 divide-y tablet:divide-x tablet:divide-y-0 divide-gaitegi-originals-black">
                <div class="col-span-4 tablet:col-span-2 relative">
                    <input autocomplete="given-name" type="text" wire:model="name" class="w-full h-full py-6 px-4 text-body-s" placeholder="{!! __('form_name_ph') !!}">
                    @error('name') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{!! __('name.error') !!}</span> @enderror
                </div>

                <div class="col-span-4 tablet:col-span-2 relative">
                    <input autocomplete="phone" type="phone" wire:model="phone" class="w-full h-full py-6 px-4 text-body-s" placeholder="{!! __('form_phone_ph') !!}">
                    @error('phone') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{!! __('phone.error') !!}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-subgrid col-span-4 divide-y tablet:divide-x tablet:divide-y-0 divide-gaitegi-originals-black">
                <div class="col-span-4 tablet:col-span-2 relative">
                    <input autocomplete="email" type="email" wire:model="email" class="w-full h-full py-6 px-4 text-body-s" placeholder="{!! __('form_email_ph') !!}">
                    @error('email') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{!! __('email.error') !!}</span> @enderror
                </div>

                <div class="col-span-4 tablet:col-span-2 relative">
                    <select wire:model="selection" class="w-full h-full py-6 px-4 text-body-s appearance-none bg-gaitegi-originals-white">
                        <option value="">{!! __('form_interesado') !!}</option>
                        @foreach(__('form_interesado_opciones') as $key => $item)
                            <option value="{!! $item['value'] !!}">{!! $item['opcion'] !!}</option>
                        @endforeach
                    </select>
                    @error('selection') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{!! __('selection.error') !!}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-subgrid col-span-4 divide-y tablet:divide-x tablet:divide-y-0 divide-gaitegi-originals-black">
                <div class="col-span-4 tablet:col-span-2 relative !border-b-0 border-solid border-gaitegi-originals-black tablet:!border-b laptop:!border-b-0">
                    <textarea wire:model="message" class="w-full h-full py-6 px-4 text-body-s resize-none" placeholder="{!! __('form_comentarios_ph') !!}"></textarea>
                    @error('message') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{!! __('message.error') !!}</span> @enderror
                </div>

                <div class="col-span-4 tablet:col-span-2 relative flex flex-col !border-b-0 border-solid border-gaitegi-originals-black tablet:!border-b laptop:!border-b-0">
                    <div class="flex items-start grow p-6">
                        <input type="checkbox" wire:model="privacyPolicy" class="mt-1 mr-2">
                        <label for="privacyPolicy" class="font-funnel text-body-s">{!! __('form_rgpd') !!}</label>
                        @error('privacyPolicy') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{!! __('privacyPolicy.error') !!}</span> @enderror
                    </div>
                    <input hidden wire:model="lang" value="{{ app()->getLocale() }}">
                    <button type="submit" class="w-full flex gap-4 items-center justify-center px-8 py-4 font-funnel bg-gaitegi-originals-red text-gaitegi-originals-white hover:bg-gaitegi-originals-red/75 transition-all">{!! __('form_submit') !!}{!! file_get_contents('images/mail.svg') !!}</button>
                </div>
            </div>

        </div>

    </form>

    @if (session()->has('message'))
        <div class="z-30 fixed bottom-[112px] right-4 py-4 px-8 shadow-sm border border-solid border-green-400 bg-green-200 text-green-950">
            {!! __('form_success') !!}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="z-30 fixed bottom-[112px] right-4 py-4 px-8 shadow-sm border border-solid border-red-400 bg-red-200 text-red-950">
            {!! __('form_error') !!}
        </div>
    @endif
    
</div>