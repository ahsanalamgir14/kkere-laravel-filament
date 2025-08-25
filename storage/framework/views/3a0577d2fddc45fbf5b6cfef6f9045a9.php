<!-- Skip Links Container -->
<nav class="skip-link-container" aria-label="<?php echo e(__('messages.t_aria_label_skip_links')); ?>">
    <!-- Skip Links -->
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a
        href="#<?php echo e($id); ?>"
        id="main-link"
        tabindex="1"
        class="absolute -top-[9999px] -left-[9999px] focus:top-4 focus:left-4 bg-black text-white px-4 py-2 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 z-50"
        aria-label="<?php echo e($link); ?>"
        accesskey="<?php echo e(strtolower(substr($id, 0, 1))); ?>"
    >
        <?php echo e($link); ?>

    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
</nav>
<?php /**PATH C:\xampp\htdocs\kkere\resources\views/components/skip-links.blade.php ENDPATH**/ ?>