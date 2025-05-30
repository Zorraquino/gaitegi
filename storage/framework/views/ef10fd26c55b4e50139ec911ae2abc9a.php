<footer class="pb-20 text-center text-sm text-gaitegi-originals-black dark:text-gaitegi-originals-white/70 border-t border-solid border-gaitegi-originals-black">
    <div class="flex flex-col gap-4 col-span-1 p-8 bg-gaitegi-originals-white text-gaitegi-originals-black">
        <span class="text-body-xs"><?php echo e(date('Y')); ?> Gaitegi S.L.</span>
        <a href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/<?php echo e(__('legal_route')); ?>" class="text-body-xs underline"><?php echo e(__('aviso_legal')); ?></a>
        <button href="" class="text-body-xs underline h-full" data-cc="show-preferencesModal"><?php echo e(__('config_cookies')); ?></button>
    </div>
</footer>

<?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
<?php endif; ?><?php /**PATH /Users/g.alava/Herd/gaitegi/resources/views/components/footer.blade.php ENDPATH**/ ?>