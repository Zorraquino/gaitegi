<div>

    <form wire:submit.prevent="submit">

        <div class="grid grid-cols-5 gap-x-2 gap-y-2">
            <div class="col-span-2 relative">
                <input type="text" wire:model="name" class="w-full h-[46px] py-3 px-4 text-body-s border border-solid border-gaitegi-originals-black" placeholder="Nombre">
                @error('name') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-2 relative">
                <input type="phone" wire:model="phone" class="w-full h-[46px] py-3 px-4 text-body-s border border-solid border-gaitegi-originals-black" placeholder="Teléfono">
                @error('phone') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-2 relative">
                <input type="email" wire:model="email" class="w-full h-[46px] py-3 px-4 text-body-s border border-solid border-gaitegi-originals-black" placeholder="Email">
                @error('email') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-2 relative">
                <select wire:model="selection" class="w-full h-[46px] py-3 px-4 text-body-s border border-solid border-gaitegi-originals-black">
                    <option value="">Interesado en:</option>
                    <option value="option1">Opción 1</option>
                    <option value="option2">Opción 2</option>
                    <option value="option3">Opción 3</option>
                </select>
                @error('selection') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-4 relative">
                <textarea wire:model="message" class="w-full h-[80px] py-3 px-4 text-body-s border border-solid border-gaitegi-originals-black" placeholder="Comentarios"></textarea>
                @error('message') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-4 relative">
                <div class="flex items-center">
                    <input type="checkbox" wire:model="privacyPolicy" class="mr-2">
                    <label for="privacyPolicy" class="font-funnel text-body-m">He leído y acepto la <a class="text-gaitegi-originals-blue font-bold" href="#" target="_blank">política de privacidad.</a></label>
                    @error('privacyPolicy') <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]">{{ $message }}</span> @enderror
                </div>
            </div>

        </div>

        <button type="submit" class="mt-6 px-8 py-4 font-funnel bg-gaitegi-originals-red text-gaitegi-originals-white">¡Consúltanos!</button>
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
</div>