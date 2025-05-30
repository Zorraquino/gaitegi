<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="view-transition" content="same-origin">

<title>Gaitegi - <?php echo e($slot); ?></title>

<meta name="description" content="Gaitegi - <?php echo e($slot); ?>">
<meta name="author" content="Gaitegi">
<meta name="robots" content="index, follow">

<link rel="icon" href="<?php echo e(asset('images/favicon.ico')); ?>" type="image/x-icon">
<meta property="og:title" content="Gaitegi - <?php echo e($slot); ?>">
<meta property="og:description" content="Gaitegi - <?php echo e(__('og_description')); ?>">
<meta property="og:image" content="<?php echo e(asset('images/og/og_' . request()->segment(2) . '.jpg')); ?>?v=2">
<meta property="og:url" content="<?php echo e(url()->current()); ?>">
<meta property="og:type" content="website">

<?php if(request()->is('es/modulos')): ?>
    <link rel="canonical" href="<?php echo e(url('oficinas')); ?>" />
<?php elseif(request()->is('eu/moduloak')): ?>
    <link rel="canonical" href="<?php echo e(url('bulegoak')); ?>" />
<?php elseif(request()->is('en/modules')): ?>
    <link rel="canonical" href="<?php echo e(url('offices')); ?>" />
<?php else: ?>
    <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
<?php endif; ?>
<meta name="keywords" content="">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


<?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
<?php endif; ?><?php /**PATH /Users/g.alava/Herd/gaitegi/resources/views/components/head.blade.php ENDPATH**/ ?>