<div class="h-full tablet:h-full laptop:h-[calc(100%_+_96px)] grid grid-cols-12">
    <div class="col-span-12 laptop:col-span-6 flex flex-col divide-y divide-gaitegi-originals-black border-r-[0.5px] border-solid border-gaitegi-originals-black order-2 laptop:order-1">
        <div id="title" class="px-4 pb-10 pt-8 tablet:p-8">
            <h1 class="font-funnel text-title-m tablet:text-title-l desktop:text-title-xl !font-bold"><?php echo __('naves_title'); ?></h1>
            <span class="block text-body-l pt-4"><?php echo __('naves_subtitle'); ?></span>
        </div>
        <div id="information" class="flex flex-col px-4 pb-10 pt-8 tablet:p-8 overflow-auto mb-0">
            <div class="grid grid-cols-6 gap-x-6 gap-y-6 tablet:gap-y-6">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = __('navesCaracteristicas'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="col-span-6 tablet:col-span-3 flex gap-4 text-balance pr-0 tablet:pr-4"><span class="w-6"><?php echo file_get_contents('images/warehouse.svg'); ?></span><?php echo $item['text']; ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
        <div id="location" class="grow flex flex-col px-4 pb-10 pt-8 tablet:p-8 overflow-auto mb-0">
            <h3 class="font-funnel font-bold text-body-l"><?php echo __('navesLocalizacion_title'); ?></h3>
            <div class="grid grid-cols-4 gap-x-6 gap-y-6 mb-0 pt-8">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = __('navesLocalizacion'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="col-span-4 flex gap-2 text-balance"><span class="w-6"><?php echo file_get_contents('images/package.svg'); ?></span><?php echo $item['text']; ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>

    </div>
    <div class="col-span-12 flex flex-col laptop:col-span-6 divide-y divide-gaitegi-originals-black border-l-[0.5px] border-solid border-gaitegi-originals-black order-1 laptop:order-2">
    
        <div id="images" class="w-full h-[240px] grow max-h-[380px] tablet:h-full col-span-12 tablet:col-span-6" styles="view-transition-name: image-container">
            <img alt="naves_industriales_gaitegi"  class="w-full h-full object-cover z-0" src="<?php echo e(asset('images/gaitegi-naves.jpg')); ?>?v=2"/>
        </div>

        <div class="hidden laptop:block grow h-auto col-span-12 tablet:col-span-6">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('contact-form', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-710549559-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>

    </div>
</div><?php /**PATH /Users/g.alava/Herd/gaitegi/resources/views/livewire/naves.blade.php ENDPATH**/ ?>