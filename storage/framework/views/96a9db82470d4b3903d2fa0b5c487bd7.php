<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e(config()->get('direction')); ?>"
    x-data="{ theme: <?php echo e(($appearanceSettings->enable_theme_switcher||$appearanceSettings->enable_contrast_toggle) ? '$persist(\'' . ($appearanceSettings->default_theme ?? 'light') . '\')' : '\'' . ($appearanceSettings->default_theme ?? 'light') . '\''); ?>, isMobile: window.innerWidth < 1024 }"
    x-init="theme = new URL(window.location.href).searchParams.get('theme') || theme"
    :class="{ 'dark': theme === 'dark', 'classic': theme === 'classic' }" @resize.window="isMobile = window.innerWidth < 1024">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" value="<?php echo e(csrf_token()); ?>"/>

        
        <?php echo SEO::generate(); ?>

        

        <link rel="icon" type="image/png" href="<?php echo e(getSettingMediaUrl('general.favicon_path', 'favicon', asset('images/favicon.png'))); ?>">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- PWA  -->
        <meta name="theme-color" content="#6777ef"/>
        <?php $__currentLoopData = $pwaSettings->icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <link rel="apple-touch-icon" sizes="<?php echo e($item['sizes']); ?>" href="<?php echo e(\Storage::url($item['src'])); ?>">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <link rel="manifest" href="/manifest.json?v=<?php echo e(time()); ?>"  >


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=<?php echo e(str_replace(' ', '+', $appearanceSettings?->font ?? 'DM+Sans')); ?>:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <?php if(app('filament')->hasPlugin('google-location-kit') && $googleSettings->status): ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e($googleSettings?->api_key); ?>&libraries=<?php echo e(isMapViewEnabled() ? 'marker,places' : 'places'); ?>"
            referrerpolicy="no-referrer-when-downgrade"
            loading="async">
        </script>
        <?php endif; ?>

        <?php echo \Filament\Support\Facades\FilamentAsset::renderStyles() ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>


        <!-- Insert Custom Script in Head -->
        <?php echo $scriptSettings->custom_script_head; ?>


        <?php echo GoogleReCaptchaV3::init(); ?>


        
        <?php echo $__env->yieldPushContent('styles'); ?>

        <?php if($styleSettings->custom_style): ?>
        <style>
            <?php echo $styleSettings->custom_style; ?>

        </style>
        <?php endif; ?>

        <?php if($generalSettings->europa_cookie_consent_enabled): ?>
            <?php echo Whitecube\LaravelCookieConsent\Facades\Cookies::renderScripts(); ?>
        <?php endif; ?>
    </head>
    <body x-on:close-modal.window="document.documentElement.classList.add('flow-auto')" x-on:open-modal.window="document.documentElement.classList.remove('flow-auto')" class="bg-gray-50  font-normal text-gray-950 antialiased dark:bg-gray-950 dark:text-white classic:bg-gray-100 classic:text-black">
        <!-- Noscript tag for users with JavaScript disabled -->
        <noscript>
            <div class="fixed inset-0 flex items-center justify-center bg-gray-200 text-gray-900 p-5">
                <p class="text-lg font-semibold">
                    JavaScript is required. Please enable it in your browser settings.
                </p>
            </div>
        </noscript>


        <?php if($generalSettings->europa_cookie_consent_enabled): ?>
            <?php echo Whitecube\LaravelCookieConsent\Facades\Cookies::renderView(); ?>
        <?php endif; ?>



        <?php echo e($slot); ?>


         <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('notifications');

$__html = app('livewire')->mount($__name, $__params, 'lw-4210840956-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <?php if($generalSettings->cookie_consent_enabled): ?>
            <?php if (isset($component)) { $__componentOriginal929715dcacade4e957f0bc5aff0c8a6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal929715dcacade4e957f0bc5aff0c8a6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cookie-consent','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cookie-consent'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal929715dcacade4e957f0bc5aff0c8a6d)): ?>
<?php $attributes = $__attributesOriginal929715dcacade4e957f0bc5aff0c8a6d; ?>
<?php unset($__attributesOriginal929715dcacade4e957f0bc5aff0c8a6d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal929715dcacade4e957f0bc5aff0c8a6d)): ?>
<?php $component = $__componentOriginal929715dcacade4e957f0bc5aff0c8a6d; ?>
<?php unset($__componentOriginal929715dcacade4e957f0bc5aff0c8a6d); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('notifications');

$__html = app('livewire')->mount($__name, $__params, 'lw-4210840956-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php echo \Filament\Support\Facades\FilamentAsset::renderScripts() ?>
        <!-- Insert Custom Script in Body -->
        <?php echo $scriptSettings->custom_script_body; ?>

        <?php
            $primaryColor = $appearanceSettings?->primary_color ?? '#FDae4B'; // Default to a fallback color if not set
            $primaryRgb = hexToRgb($primaryColor);
            $darkerPrimaryRgb1 =  adjustBrightness($primaryRgb, 60);
            $darkerPrimaryRgb10 = adjustBrightness($primaryRgb, -10);
            $darkerPrimaryRgb20 = adjustBrightness($primaryRgb, -20);
            $darkerPrimaryRgb25 = adjustBrightness($primaryRgb, -25);
        ?>

        <style wire:ignore>
            :root {
                --primary-50: <?php echo e($darkerPrimaryRgb1); ?>;
                --primary-400: <?php echo e($primaryRgb); ?>;
                --primary-500: <?php echo e($darkerPrimaryRgb10); ?>;
                --primary-600: <?php echo e($darkerPrimaryRgb20); ?>;
                --primary-700: <?php echo e($darkerPrimaryRgb25); ?>;
                --primary  : <?php echo e($appearanceSettings?->primary_color?? 'rgba(253, 174, 75, 1)'); ?>;
                --secondary-200  : <?php echo e(isset(getSecondaryColorShades()['50'])?'rgb('.getSecondaryColorShades()['50'].')':'#FEBD69'); ?>;
                --secondary-600  : <?php echo e($appearanceSettings?->secondary_color?? '#FEBD69'); ?>;
                --font:<?php echo e($appearanceSettings?->font?? 'DM Sans'); ?>

            },
            *{
                direction: <?php echo config()->get('direction'); ?>;
            }
        </style>

        <script src="<?php echo e(asset('js/service-worker.js')); ?>"></script>
        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\kkere\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>