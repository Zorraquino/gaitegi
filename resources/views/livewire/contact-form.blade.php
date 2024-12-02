<div id="contact" class="col-span-12 tablet:col-span-6 h-full max-h-[346px]">

    <form wire:submit.prevent="submit" class="h-full">

        <div class="h-full grid grid-cols-4 tablet:grid-cols-4 divide-y divide-gaitegi-originals-black">
            
            <div class="grid grid-cols-subgrid col-span-4 divide-x divide-gaitegi-originals-black">
                <div class="col-span-2 relative">
                    <input autocomplete="given-name" type="text" wire:model="name" class="w-full h-full py-6 px-4 text-body-s" placeholder="{{ __('form_name_ph') }}">
                    @error('name') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{{ $message }}</span> @enderror
                </div>

                <div class="col-span-2 relative">
                    <input autocomplete="phone" type="phone" wire:model="phone" class="w-full h-full py-6 px-4 text-body-s" placeholder="{{ __('form_phone_ph') }}">
                    @error('phone') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-subgrid col-span-4 divide-x divide-gaitegi-originals-black">
                <div class="col-span-2 relative">
                    <input autocomplete="email" type="email" wire:model="email" class="w-full h-full py-6 px-4 text-body-s" placeholder="{{ __('form_email_ph') }}">
                    @error('email') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{{ $message }}</span> @enderror
                </div>

                <div class="col-span-2 relative">
                    <select wire:model="selection" class="w-full h-full py-6 px-4 text-body-s">
                        <option value="">{{ __('form_interesado') }}</option>
                        @foreach(__('form_interesado_opciones') as $key => $item)
                            <option value="{!! $item['value'] !!}">{!! $item['opcion'] !!}</option>
                        @endforeach
                    </select>
                    @error('selection') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-subgrid col-span-4 divide-x divide-gaitegi-originals-black">
                <div class="col-span-2 relative">
                    <textarea wire:model="message" class="w-full h-full py-6 px-4 text-body-s resize-none" placeholder="{{ __('form_comentarios_ph') }}"></textarea>
                    @error('message') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{{ $message }}</span> @enderror
                </div>

                <div class="col-span-2 relative flex flex-col">
                    <div class="flex items-center grow p-6">
                        <input type="checkbox" wire:model="privacyPolicy" class="mr-2">
                        <label for="privacyPolicy" class="font-funnel text-body-s">{!! __('form_rgpd') !!}</label>
                        @error('privacyPolicy') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="w-full flex gap-4 items-center justify-center px-8 py-4 font-funnel bg-gaitegi-originals-red text-gaitegi-originals-white hover:bg-gaitegi-originals-red/75 transition-all">{{ __('form_submit') }}{!! file_get_contents('images/mail.svg') !!}</button>
                </div>
            </div>

        </div>

    </form>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
</div>