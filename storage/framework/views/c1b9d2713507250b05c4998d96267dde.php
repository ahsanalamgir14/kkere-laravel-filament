<footer class="hidden md:block " id="footer">
    <!--[if BLOCK]><![endif]--><?php if(!auth()->user()): ?>
    <div class="bg-black py-5 dark:bg-gray-900 ring-1 ring-gray-950/5 dark:ring-white/10">
        <div class="container mx-auto py-10">
            <div class="md:flex flex-col md:items-center space-y-5">
                <p class="text-white text-2xl font-bold"><?php echo e(__('messages.t_post_connect_deal')); ?></p>

                <p class="text-white text-lg">
                    <?php echo e(__('messages.t_post_ad_content', ['siteName' => $generalSettings->site_name])); ?>

                </p>
                <a href="/post-ad"
                    class="bg-primary-600 text-black flex gap-x-1.5 justify-center items-center px-6 py-2 cursor-pointer rounded-xl">
                    <span class="text-lg font-medium"><?php echo e(__('messages.t_post_first_ad')); ?></span>
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'rtl:rotate-180 ltr:rotate-0']); ?>
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
            </div>
        </div>
    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div class="bg-white pt-14 pb-8 dark:bg-gray-950 border-t border-gray-200 classic:border-black dark:border-white/10">

        <div class="container mx-auto px-4">
            <div class="flex gap-8">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $footerSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div wire:key='footer-section-<?php echo e($section->id); ?>' class="<?php echo e($loop->first ? 'w-2/5' : 'w-1/5'); ?>">
                        <!--[if BLOCK]><![endif]--><?php if($section->predefined_identifier === 'site_with_social'): ?>
                        <div class="space-y-8">
                                    <span x-data x-tooltip="{
                                        content: '<?php echo e(__('messages.t_tooltip_logo')); ?>',
                                        theme: $store.theme,
                                    }">
                                        <?php if (isset($component)) { $__componentOriginal6328f0deb07a8bef5ad2cd5691beb925 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6328f0deb07a8bef5ad2cd5691beb925 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.brand','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('brand'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6328f0deb07a8bef5ad2cd5691beb925)): ?>
<?php $attributes = $__attributesOriginal6328f0deb07a8bef5ad2cd5691beb925; ?>
<?php unset($__attributesOriginal6328f0deb07a8bef5ad2cd5691beb925); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6328f0deb07a8bef5ad2cd5691beb925)): ?>
<?php $component = $__componentOriginal6328f0deb07a8bef5ad2cd5691beb925; ?>
<?php unset($__componentOriginal6328f0deb07a8bef5ad2cd5691beb925); ?>
<?php endif; ?>
                                    </span>
                                    <p class="leading-6 ">
                                        <?php echo $generalSettings->site_description; ?>

                                    </p>
                                    <?php if (isset($component)) { $__componentOriginal203de8e7048d40fecbfd680ff39a1e1f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal203de8e7048d40fecbfd680ff39a1e1f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.social-media','data' => ['facebookLink' => $socialSettings->facebook_link,'twitterLink' => $socialSettings->twitter_link,'linkedinLink' => $socialSettings->linkedin_link,'instagramLink' => $socialSettings->instagram_link]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('social-media'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['facebook_link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($socialSettings->facebook_link),'twitter_link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($socialSettings->twitter_link),'linkedin_link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($socialSettings->linkedin_link),'instagram_link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($socialSettings->instagram_link)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal203de8e7048d40fecbfd680ff39a1e1f)): ?>
<?php $attributes = $__attributesOriginal203de8e7048d40fecbfd680ff39a1e1f; ?>
<?php unset($__attributesOriginal203de8e7048d40fecbfd680ff39a1e1f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal203de8e7048d40fecbfd680ff39a1e1f)): ?>
<?php $component = $__componentOriginal203de8e7048d40fecbfd680ff39a1e1f; ?>
<?php unset($__componentOriginal203de8e7048d40fecbfd680ff39a1e1f); ?>
<?php endif; ?>
                        </div>
                        <?php elseif($section->predefined_identifier === 'popular_category'): ?>
                            <div>
                                <!--[if BLOCK]><![endif]--><?php if($section->title): ?>
                                    <p class="font-semibold leading-6 text-lg dark:text-white">
                                        <?php echo e($section->title); ?>

                                    </p>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <ul role="list" class="mt-6 space-y-4">
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $popularCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <!--[if BLOCK]><![endif]--><?php if($category->parent): ?>
                                                <!-- This is a subcategory -->
                                                <a wire:key="popular-category-<?php echo e($category->id); ?>" href="<?php echo e(generate_category_url($category->adType, $category->parent, $category)); ?>" class="leading-6 dark:hover:text-white">
                                                    <?php echo e($category->name); ?>

                                                </a>
                                            <?php else: ?>
                                                <!-- This is a main category -->
                                                <a wire:key="popular-category-<?php echo e($category->id); ?>" href="<?php echo e(generate_category_url($category->adType, $category)); ?>" class="leading-6 dark:hover:text-white">
                                                    <?php echo e($category->name); ?>

                                                </a>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                </ul>
                            </div>
                        <?php else: ?>
                            <!--[if BLOCK]><![endif]--><?php if($section->title): ?>
                                <p class="font-semibold leading-6 text-lg dark:text-white">
                                    <?php echo e($section->title); ?>

                                </p>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <ul role="list" class="mt-6 space-y-4">
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $section->footerItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li wire:key='footer-item-<?php echo e($item); ?>'>
                                        <!--[if BLOCK]><![endif]--><?php if($item->type === 'page' && $item->page->status!='hidden'): ?>
                                        <a href="<?php echo e(route('page-details', $item->page->slug)); ?>" class="leading-6 dark:hover:text-white">
                                            <?php echo e($item->name); ?>

                                        </a>
                                        <?php elseif($item->type === 'url'): ?>
                                            <a href="<?php echo e($item->url); ?>" class="leading-6 dark:hover:text-white">
                                                <?php echo e($item->name); ?>

                                            </a>
                                        <?php elseif($item->type === 'predefined'): ?>
                                            <!--[if BLOCK]><![endif]--><?php if($item->predefined_identifier === 'blog' && $blogSettings->enable_blog): ?>
                                                <a href="/blog" class="leading-6 dark:hover:text-white">
                                                    <?php echo e($item->name); ?>

                                                </a>
                                            <?php elseif($item->predefined_identifier === 'contact_us'): ?>
                                                <a href="/contact" class="leading-6 dark:hover:text-white">
                                                    <?php echo e($item->name); ?>

                                                </a>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </ul>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="mt-16 border-t dark:border-white/10 border-gray-200 pt-8 classic:border-black">
                <p class="text-center">
                    © <?php echo e(now()->year); ?> <?php echo e($generalSettings->site_name); ?>. <?php echo e(__('messages.t_all_rights_reserved')); ?>

                </p>
            </div>
        </div>

    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\kkere\resources\views/livewire/layout/footer.blade.php ENDPATH**/ ?>