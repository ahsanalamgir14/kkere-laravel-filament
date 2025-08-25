<a <?php echo e($attributes->merge(['href' => '/', 'class' => ''])); ?> >
    <style>
        @media (max-width: 767px) {
            .custom-logo {
                height: <?php echo $generalSettings->logo_height_mobile.'rem'?>;
            }
        }

        @media (min-width: 768px) {
            .custom-logo {
                height: <?php echo $generalSettings->logo_height_desktop.'rem' ?>;
            }
        }
    </style>
    <img src="<?php echo e(getSettingMediaUrl('general.logo_path', 'logo', asset('images/logo.svg'))); ?>" alt="<?php echo e(config('app.name')); ?>"
         class="custom-logo dark:filter dark:invert " />
</a>
<?php /**PATH C:\xampp\htdocs\kkere\resources\views/components/brand.blade.php ENDPATH**/ ?>