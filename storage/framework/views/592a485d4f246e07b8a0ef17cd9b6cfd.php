<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id' => null,
    'title' => 'Modal',
    'closeByEscaping' => true,
    'closeByClickingAway' => true,
    'maxWidth' => '5/6',
    'trigger' => null, // Slot for button trigger
    'slideOver' => false,
    'width'=>'2xl'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id' => null,
    'title' => 'Modal',
    'closeByEscaping' => true,
    'closeByClickingAway' => true,
    'maxWidth' => '5/6',
    'trigger' => null, // Slot for button trigger
    'slideOver' => false,
    'width'=>'2xl'
]); ?>
<?php foreach (array_filter(([
    'id' => null,
    'title' => 'Modal',
    'closeByEscaping' => true,
    'closeByClickingAway' => true,
    'maxWidth' => '5/6',
    'trigger' => null, // Slot for button trigger
    'slideOver' => false,
    'width'=>'2xl'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$modalWidths = [
    'sm' => 'w-[16rem]',    // 16rem (256px)
    'md' => 'w-[18rem]',    // 18rem (288px)
    'lg' => 'w-[20rem]',    // 20rem (320px)
    'xl' => 'w-[24rem]',    // 24rem (384px)
    '2xl' => 'w-[28rem]',   // 28rem (448px)
    '3xl' => 'w-[32rem]',   // 32rem (512px)
    '4xl' => 'w-[36rem]',   // 36rem (576px)
    '5xl' => 'w-[42rem]',   // 42rem (672px)
    '6xl' => 'w-[48rem]',   // 48rem (768px)
    '7xl' => 'w-[56rem]',   // 56rem (896px)
    '8xl' => 'w-[64rem]',   // 64rem (1024px)
    '9xl' => 'w-[72rem]',   // 72rem (1152px)
    '10xl' => 'w-[80rem]',  // 80rem (1280px)
];

?>
<div x-data="{
    isOpen: false,
    open: function () {
        this.$nextTick(() => {
            this.isOpen = true;
            
        });
    },
    close: function () {
        this.isOpen = false;
        
    },
}"
    x-trap.noscroll="isOpen"
    x-transition:enter="duration-300"
    x-transition:leave="duration-300"
    x-on:open-modal.window="if ($event.detail.id === '<?php echo e($id); ?>') open()"
    x-on:close-modal.window="if ($event.detail.id === '<?php echo e($id); ?>') close()"
    x-on:keydown.escape.window="if (isOpen && <?php echo e($closeByEscaping ? 'true' : 'false'); ?>) isOpen = false"
    class="relative">

    
    <!--[if BLOCK]><![endif]--><?php if($trigger): ?>
    <div x-on:click="isOpen = true" class="cursor-pointer">
        <?php echo e($trigger); ?>

    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    
    <div x-show="isOpen" x-cloak x-transition.opacity
        class="fixed inset-0 z-50 bg-gray-900 bg-opacity-50 backdrop-blur-sm flex items-center  <?php echo e($slideOver ? 'justify-end' : 'justify-center'); ?>"
        <?php if($closeByClickingAway): ?>
            x-on:click.self="isOpen = false"
        <?php endif; ?>
        aria-label="<?php echo e($id); ?>-<?php echo e($title); ?>" role="dialog"
        aria-modal="true"
        >

        
        <div x-show="isOpen"
        <?php if($slideOver): ?>
        x-transition:enter-start="translate-x-full rtl:-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full rtl:-translate-x-full"
        <?php else: ?>
            x-transition:enter-start="scale-95 opacity-0"
            x-transition:enter-end="scale-100 opacity-100"
            x-transition:leave-start="scale-100 opacity-100"
            x-transition:leave-end="scale-95 opacity-0"
        <?php endif; ?>
            class="bg-white dark:bg-gray-900 shadow-lg overflow-x-auto max-w-<?php echo e($maxWidth); ?>  <?php echo e($slideOver ? 'h-full absolute right-0 top-0 w-full sm:w-[50%]' : 'relative mx-4 rounded-lg max-h-[85%]'); ?> <?php echo e(isset($modalWidths[$width]) ? $modalWidths[$width]:''); ?>">

            
            <div class="flex flex-col p-4 border-b dark:border-gray-700">
                <!-- Header Section -->
                <div class="flex items-center justify-between ">
                    <!-- Heading Slot -->
                    <div class="text-lg font-semibold text-gray-900 dark:text-white">
                        <?php echo e($heading ?? ''); ?>

                    </div>

                    <!-- Close Button -->
                    <button type="button" x-on:click="isOpen = false"
                        class="p-2 rounded-full text-gray-500 hover:bg-gray-200 dark:hover:bg-gray-700  dark:focus:ring-gray-600"
                        aria-label="<?php echo e(__('messages.t_aria_label_close')); ?>">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-x-mark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6','aria-hidden' => 'true']); ?>
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
                    </button>
                </div>

                <!-- Description Slot -->
                <!--[if BLOCK]><![endif]--><?php if(!empty($description)): ?>
                    <div class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        <?php echo e($description); ?>

                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>

            
            <div class="p-4">
                <?php echo e($slot); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\kkere\resources\views/components/modal/index.blade.php ENDPATH**/ ?>