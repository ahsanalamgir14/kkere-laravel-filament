<div>
    <?php if (isset($component)) { $__componentOriginal1c8d34766cabee7b0b3ce3582b5304bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1c8d34766cabee7b0b3ce3582b5304bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal.index','data' => ['id' => 'sidebar','alignment' => 'start','slideOver' => 'true','width' => 'xl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'sidebar','alignment' => 'start','slideOver' => 'true','width' => 'xl']); ?>

         <?php $__env->slot('heading', null, []); ?> 
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
         <?php $__env->endSlot(); ?>

        <!--[if BLOCK]><![endif]--><?php if(count(fetch_active_languages()) > 1): ?>
         <?php $__env->slot('description', null, []); ?> 
            <div class="mt-4">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('partials.language-switcher', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3372414265-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
         <?php $__env->endSlot(); ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div>
        <div class="space-y-8">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $footerSections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div wire:key='footer-section-<?php echo e($section); ?>' class="<?php echo e($loop->first ? 'flex-grow' : 'flex-grow basis-1/2 lg:basis-1/3'); ?>">
                    <!--[if BLOCK]><![endif]--><?php if($section->predefined_identifier === 'site_with_social'): ?>
                    <div class="space-y-8">

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
    </div>
    <div class="mt-8 border-t dark:border-white/10 border-gray-200 pt-6 classic:border-black">
        <p class="text-center">
            © <?php echo e(now()->year); ?> <?php echo e($generalSettings->site_name); ?>. <?php echo e(__('All rights reserved.')); ?>

        </p>
    </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1c8d34766cabee7b0b3ce3582b5304bc)): ?>
<?php $attributes = $__attributesOriginal1c8d34766cabee7b0b3ce3582b5304bc; ?>
<?php unset($__attributesOriginal1c8d34766cabee7b0b3ce3582b5304bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c8d34766cabee7b0b3ce3582b5304bc)): ?>
<?php $component = $__componentOriginal1c8d34766cabee7b0b3ce3582b5304bc; ?>
<?php unset($__componentOriginal1c8d34766cabee7b0b3ce3582b5304bc); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\kkere\resources\views/livewire/layout/sidebar.blade.php ENDPATH**/ ?>