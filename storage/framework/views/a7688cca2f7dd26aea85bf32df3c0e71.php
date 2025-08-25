<!DOCTYPE html>
<html  lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"  >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf_token" value="<?php echo e(csrf_token()); ?>"/>

        <!-- Scripts -->
        <title><?php echo e(config('app.name', 'AdFox')); ?></title>


        <link rel="preconnect" href="https://fonts.googleapis.com">

        <!-- PWA  -->
        <meta name="theme-color" content="#6777ef"/>
        <link rel="apple-touch-icon" href="<?php echo e(asset('images/logo.svg')); ?>">
        <link rel="manifest" href="/manifest.json?v=<?php echo e(time()); ?>"  >


        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">

        <?php echo \Filament\Support\Facades\FilamentAsset::renderStyles() ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

        <style>
            :root {
                 --font:'DM Sans'
             }
         </style>
    </head>
    <body class="bg-gray-50  font-normal text-gray-950 antialiased dark:bg-gray-950 dark:text-white classic:bg-gray-100 classic:text-black">


        <?php echo $__env->yieldContent('content'); ?>

        <?php
            $primaryColor = '#FDae4B';
            $primaryRgb = hexToRgb($primaryColor);
            $darkerPrimaryRgb1 =  adjustBrightness($primaryRgb, 60);
            $darkerPrimaryRgb10 = adjustBrightness($primaryRgb, -10);
            $darkerPrimaryRgb20 = adjustBrightness($primaryRgb, -20);
            $darkerPrimaryRgb25 = adjustBrightness($primaryRgb, -25);
        ?>


        <style>
            :root {
                --primary-50: <?php echo e($darkerPrimaryRgb1); ?>;
                --primary-400: <?php echo e($primaryRgb); ?>;
                --primary-500: <?php echo e($darkerPrimaryRgb10); ?>;
                --primary-600: <?php echo e($darkerPrimaryRgb20); ?>;
                --primary-700: <?php echo e($darkerPrimaryRgb25); ?>;
                --primary  : <?php echo e($primaryColor); ?>;
                --secondary  : <?php echo e('#FEBD69'); ?>;
            }
        </style>

        <?php echo \Filament\Support\Facades\FilamentAsset::renderScripts() ?>
        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\kkere\resources\views/livewire/setup/layout.blade.php ENDPATH**/ ?>