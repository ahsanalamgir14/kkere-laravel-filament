<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['facebook_link','twitter_link','linkedin_link','instagram_link']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['facebook_link','twitter_link','linkedin_link','instagram_link']); ?>
<?php foreach (array_filter((['facebook_link','twitter_link','linkedin_link','instagram_link']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="flex items-center gap-x-4">
    <!--[if BLOCK]><![endif]--><?php if(!empty($facebook_link)): ?>
        <a href="<?php echo e($facebook_link); ?>" aria-label="facebook" x-data x-tooltip="{
            content: '<?php echo e(__('messages.t_tooltip_facebook')); ?>',
            theme: $store.theme,
        }"  class="text-gray-700 hover:text-blue-800  transition duration-300">
            <span class="sr-only"><?php echo e(__('messages.t_visit_our_facebook_profile')); ?></span>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon-facebook-2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-7 h-7']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(!empty($twitter_link)): ?>
        <a href="<?php echo e($twitter_link); ?>"  aria-label="twitter" class="text-gray-700 dark:stroke-black  hover:text-blue-600 transition duration-300"
        x-data x-tooltip="{
            content: '<?php echo e(__('messages.t_tooltip_twitter')); ?>',
            theme: $store.theme,
        }">
        <span class="sr-only"><?php echo e(__('messages.t_visit_our_twitter_profile')); ?></span>
            <div class="group w-[28px] h-[28px]">
                <svg class="w-full h-full fill-white dark:fill-black rounded-md" width="48px" height="48px" viewBox="0 0 30 30"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="30" height="30"
                        rx="4" fill="#3F3F46"></rect>
                    <path
                        d="M19.7447 7.54297H22.2748L16.7473 13.8605L23.25 22.4574H18.1584L14.1705 17.2435L9.60746 22.4574H7.07582L12.9881 15.7L6.75 7.54297H11.9708L15.5755 12.3087L19.7447 7.54297ZM18.8567 20.943H20.2587L11.209 8.97782H9.7046L18.8567 20.943Z">
                    </path>
                </svg>
            </div>
            
        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(!empty($linkedin_link)): ?>
        <a href="<?php echo e($linkedin_link); ?>"  aria-label="linkedin"
        x-data x-tooltip="{
            content: '<?php echo e(__('messages.t_tooltip_linkedin')); ?>',
            theme: $store.theme,
        }"
            class="text-gray-700 hover:text-blue-900 transition  duration-300">
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon-linkedin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-7 h-7']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            <span class="sr-only"><?php echo e(__('messages.t_visit_our_linkedin_profile')); ?></span>
        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(!empty($instagram_link)): ?>
        <a href="<?php echo e($instagram_link); ?>"  aria-label="instagram"
        x-data x-tooltip="{
            content: '<?php echo e(__('messages.t_tooltip_instagram')); ?>',
            theme: $store.theme,
        }"
            class="text-gray-700 hover:text-pink-800 transition duration-300">
            <span class="sr-only"><?php echo e(__('messages.t_visit_our_instagram_profile')); ?></span>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon-instagram-2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-7 h-7']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\xampp\htdocs\kkere\resources\views/components/social-media.blade.php ENDPATH**/ ?>