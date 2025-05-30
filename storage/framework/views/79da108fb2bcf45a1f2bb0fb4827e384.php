<div id="contact" class="col-span-12 tablet:col-span-6 h-full laptop:max-h-[346px] border-b-0 tablet:border-b-0 tablet:border-solid tablet:border-gaitegi-originals-black laptop:border-b">

    <form accept-language="<?php echo e(app()->getLocale()); ?>" wire:submit.prevent="submit" class="h-auto laptop:h-full pb-0 laptop:pb-0 laptop:mb-[96px]">

        <div class="relative h-full grid grid-cols-4 tablet:grid-cols-4 divide-y divide-gaitegi-originals-black">
            
            <div class="grid grid-cols-subgrid col-span-4 divide-y tablet:divide-x tablet:divide-y-0 divide-gaitegi-originals-black">
                <div class="col-span-4 tablet:col-span-2 relative">
                    <input autocomplete="given-name" type="text" wire:model="name" class="w-full h-full py-6 px-4 text-body-s" placeholder="<?php echo __('form_name_ph'); ?>">
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]"><?php echo __('name.error'); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="col-span-4 tablet:col-span-2 relative">
                    <input autocomplete="phone" type="phone" wire:model="phone" class="w-full h-full py-6 px-4 text-body-s" placeholder="<?php echo __('form_phone_ph'); ?>">
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]"><?php echo __('phone.error'); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>

            <div class="grid grid-cols-subgrid col-span-4 divide-y tablet:divide-x tablet:divide-y-0 divide-gaitegi-originals-black">
                <div class="col-span-4 tablet:col-span-2 relative">
                    <input autocomplete="email" type="email" wire:model="email" class="w-full h-full py-6 px-4 text-body-s" placeholder="<?php echo __('form_email_ph'); ?>">
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]"><?php echo __('email.error'); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="col-span-4 tablet:col-span-2 relative">
                    <select wire:model="selection" class="gaitegi--select w-full h-full py-6 px-4 text-body-s bg-gaitegi-originals-white">
                        <option value=""><?php echo __('form_interesado'); ?></option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = __('form_interesado_opciones'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo $item['value']; ?>"><?php echo $item['opcion']; ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </select>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selection'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]"><?php echo __('selection.error'); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>

            <div class="grid grid-cols-subgrid col-span-4 divide-y tablet:divide-x tablet:divide-y-0 divide-gaitegi-originals-black">
                <div class="col-span-4 tablet:col-span-2 relative !border-b-0 border-solid border-gaitegi-originals-black tablet:border-b-0 laptop:!border-b-0">
                    <textarea wire:model="message" class="w-full h-full py-6 px-4 text-body-s resize-none" placeholder="<?php echo __('form_comentarios_ph'); ?>"></textarea>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]"><?php echo __('message.error'); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="col-span-4 tablet:col-span-2 relative flex flex-col !border-b-0 border-solid border-gaitegi-originals-black tablet:border-b-0 laptop:!border-b-0">
                    <div class="flex items-start grow p-6">
                        <input type="checkbox" wire:model="privacyPolicy" class="mt-1 mr-2">
                        <label for="privacyPolicy" class="font-funnel text-body-s"><?php echo __('form_rgpd'); ?></label>
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['privacyPolicy'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 absolute text-[10px] top-[4px] left-[16px]"><?php echo __('privacyPolicy.error'); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                    <input hidden wire:model="lang" value="<?php echo e(app()->getLocale()); ?>">
                    <button type="submit" class="w-full flex gap-4 items-center justify-center px-8 py-4 font-funnel bg-gaitegi-originals-red text-gaitegi-originals-white hover:bg-gaitegi-originals-red/75 transition-all"><?php echo __('form_submit'); ?><?php echo file_get_contents('images/mail.svg'); ?></button>
                </div>
            </div>

        </div>

    </form>

    <!--[if BLOCK]><![endif]--><?php if(session()->has('message')): ?>
        <div class="z-30 fixed bottom-[112px] right-4 py-4 px-8 shadow-sm border border-solid border-green-400 bg-green-200 text-green-950">
            <?php echo __('form_success'); ?>

        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <?php if(session()->has('error')): ?>
        <div class="z-30 fixed bottom-[112px] right-4 py-4 px-8 shadow-sm border border-solid border-red-400 bg-red-200 text-red-950">
            <?php echo __('form_error'); ?>

        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    
</div><?php /**PATH /Users/g.alava/Herd/gaitegi/resources/views/livewire/contact-form.blade.php ENDPATH**/ ?>