<header class="z-30 fixed tablet:relative w-full bg-gaitegi-originals-white flex items-center justify-between border-b border-solid border-gaitegi-originals-black">
    
    <div class="p-4 tablet:p-8">
        <a href="<?php echo e(url('/')); ?>/<?php echo e(request()->segment(1)); ?>/"><img class="" alt="gaitegi__logo" src="<?php echo e(asset('images/gaitegi__logo.svg')); ?>"/></a>
    </div>

    <div class="h-full flex flex-row items-center justify-center gap-4 pr-4 laptop:pr-0">
        <nav class="flex flex-row divide-x divide-gaitegi-originals-black">
            <a class="px-2 leading-none <?php echo e((request()->segment(1) === 'es') || (request()->segment(1) == '') ? 'font-bold' : ''); ?>" 
                href="<?php echo e(url('/')); ?>/es/<?php echo e(app('langMenu')['es']); ?>">ES</a>
            <a class="px-2 leading-none <?php echo e((request()->segment(1) === 'eu') ? 'font-bold' : ''); ?>" 
                href="<?php echo e(url('/')); ?>/eu/<?php echo e(app('langMenu')['eu']); ?>">EU</a>
            <a class="px-2 leading-none <?php echo e((request()->segment(1) === 'en') ? 'font-bold' : ''); ?>" 
                href="<?php echo e(url('/')); ?>/en/<?php echo e(app('langMenu')['en']); ?>">EN</a>
        </nav>
        <a href="/<?php echo e(request()->segment(1) ?? 'es'); ?>/<?php echo e(__('consultanos_href')); ?>" class="hidden laptop:flex gap-4 font-funnel text-body-xl bg-gaitegi-originals-red text-gaitegi-originals-white hover:bg-gaitegi-originals-red/75 cursor-pointer transition-all w-full h-full items-center justify-center px-16">
            <?php echo __('consultanos'); ?>

            <?php echo file_get_contents('images/phone.svg'); ?>

        </a>
        <button id="toggleMenu" class="flex laptop:hidden p-2 border border-solid border-gaitegi-originals-black">
            <?php echo file_get_contents('images/hamburger.svg'); ?>

        </button>
    </div>

</header><?php /**PATH /Users/g.alava/Herd/gaitegi/resources/views/components/header.blade.php ENDPATH**/ ?>