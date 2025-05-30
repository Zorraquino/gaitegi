<div class="h-full tablet:h-full laptop:h-[calc(100%_+_96px)] grid grid-cols-12">
    <div class="col-span-12 laptop:col-span-6 flex flex-col divide-y divide-gaitegi-originals-black border-r-[0.5px] border-solid border-gaitegi-originals-black order-2 laptop:order-1">
        <div id="title" class="px-4 pb-10 pt-8 tablet:p-8">
            <h1 class="font-funnel text-title-m tablet:text-title-l desktop:text-title-xl !font-bold"><?php echo __('oficinas_title'); ?></h1>
            <span class="block text-body-l pt-4"><?php echo __('oficinas_subtitle'); ?></span>
        </div>
        <div id="information" class="grow flex flex-col px-4 pb-10 pt-8 tablet:p-8 overflow-auto mb-0">
            <p class="pb-8"><?php echo __('oficinas_p1'); ?></p>
            <div class="grid grid-cols-4 gap-x-6 gap-y-6 mb-0">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = __('oficinasCaracteristicas'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="col-span-4 flex gap-2"><span class="w-6"><?php echo file_get_contents('images/package.svg'); ?></span><?php echo $item['text']; ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
             <div class="pt-8 hidden tablet:block">
                <a href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/<?php echo e(__('consultanos_href')); ?>" class="w-fit flex gap-4 font-funnel text-body-l bg-gaitegi-originals-red text-gaitegi-originals-white hover:bg-gaitegi-originals-red/75 items-center justify-center px-8 py-4">
                    <?php echo __('consultanos'); ?>

                    <?php echo file_get_contents('images/mail.svg'); ?>

                </a>
            </div>
        </div>
    </div>
    <div class="col-span-12 laptop:col-span-6 h-[240px] tablet:h-full divide-y divide-gaitegi-originals-black border-l-[0.5px] border-solid border-gaitegi-originals-black order-1 laptop:order-2">
    
        <div id="images" class="w-full h-[240px] tablet:h-full z-0" styles="view-transition-name: image-container">
            <img alt="oficinas_gaitegi"  class="w-full h-full object-cover z-0" src="<?php echo e(asset('images/gaitegi-oficinas.jpg')); ?>?v=2"/>
        </div>

    </div>
</div><?php /**PATH /Users/g.alava/Herd/gaitegi/resources/views/livewire/oficinas.blade.php ENDPATH**/ ?>