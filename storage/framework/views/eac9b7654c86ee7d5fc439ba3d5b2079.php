<div class="w-full container mx-auto py-10">

    <div class="mb-12 space-y-2">
        <h2 class="fi-section-header-heading text-2xl font-semibold leading-6 text-gray-950 dark:text-white">
            Welcome to <?php echo e(app_name()); ?>!
        </h2>

        <p class="fi-section-header-description text-base text-gray-500 dark:text-gray-400">
            Purchase <?php echo e(app_name()); ?> exclusively from CodeCanyon to ensure genuine updates and support. If you have any questions or need assistance, please reach out to us on Codecanyon,
            <a href="mailto:support@saasforest.com" target="_blank" class="text-primary-600">email</a>, or via our <a href="https://help.saasforest.com/portal/en/newticket" target="_blank" class="text-primary-600">Customer Support</a>.
            Please keep your license key safe as we will need it to verify your purchase during support interactions. If you've enjoyed our service, we'd be grateful for a <span class="text-amber-400">5-star</span> review.
            Thank you for choosing <?php echo e(app_name()); ?>. We're committed to your satisfaction and continuous improvement.
        </p>

    </div>

    <!--[if BLOCK]><![endif]--><?php if($setupFinished): ?>
        <div class="mt-5 py-10 px-4 relative overflow-hidden bg-white ring-1 ring-slate-300 sm:rounded-lg dark:bg-transparent dark:ring-slate-600">
                <div class="flex items-center justify-center">
                    <div class="text-center">
                        <span class="text-3xl">
                            &#127881;
                        </span>
                        <h1 class="font-semibold text-2xl text-slate-900">
                            <?php echo e(__('messages.t_setup_complete')); ?>

                        </h1>
                        <p class="text-slate-700 dark:text-white">
                            <?php echo e(__('messages.t_start_using_app.')); ?>

                        </p>
                        <div class="mt-5 space-x-4">
                            <a
                                href="/admin"
                                class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-xl text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            >
                                <?php echo e(__('Admin Panel Dashboard')); ?>

                            </a>
                            <a
                                href="/"
                                class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-xl text-black bg-primary-600 hover:bg-primary-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                            >
                                <?php echo e(__('Marketplace Home')); ?>

                            </a>
                        </div>
                    </div>
                </div>
        </div>
    <?php else: ?>

    <form wire:submit='finishSetup' novalidate>
        <?php echo e($this->form); ?>

    </form>

    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\xampp\htdocs\kkere\resources\views/livewire/setup/installer.blade.php ENDPATH**/ ?>