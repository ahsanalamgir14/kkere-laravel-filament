<div x-data class="pb-14 md:pb-0">
    <!-- Skip links -->
    <?php echo $__env->make('components.skip-links',['links'=>[
        'main-content'=> __('messages.t_skip_to_main_content'),
        'footer'=> __('messages.t_skip_to_footer')
    ]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('layout.header', ['context' => 'home','lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1369151946-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('home.banner', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1369151946-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <!--[if BLOCK]><![endif]--><?php if($adPlacementSettings->after_header): ?>
    <div class="container mx-auto px-4 flex items-center justify-center md:pt-8 pt-6" role="complementary" aria-label="<?php echo e(__('messages.t_aria_label_header_advertisement')); ?>">
        <?php echo $adPlacementSettings->after_header; ?>

    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!-- Main content -->
    <main id="main-content" class="sticky-scroll-margin" wire:ignore.self >

    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->homeSettings->section_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!--[if BLOCK]><![endif]--><?php switch($item['type']??''):
    case ('categories'): ?>

    <section class="py-4 mt-4 md:py-8" aria-labelledby="categories">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row md:gap-10 justify-between">
                <h2 id="categories" class="text-xl md:text-2xl rtl:text-right ltr:text-left mb-6 font-semibold whitespace-nowrap">
                    <?php echo e(__('messages.t_explore_by_categories')); ?>

                </h2>
                <!--[if BLOCK]><![endif]--><?php if(!$adTypes->isEmpty() && count($adTypes) > 1): ?>
                <!--[if BLOCK]><![endif]--><?php if($homeSettings->ad_type_dropdown_enable): ?>
                <div class="flex items-center gap-5 mb-10 p-1 overflow-x-auto hide-scroll ">
                    <?php if (isset($component)) { $__componentOriginal505efd9768415fdb4543e8c564dad437 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal505efd9768415fdb4543e8c564dad437 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.wrapper','data' => ['class' => 'w-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::input.wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                        <?php if (isset($component)) { $__componentOriginal97dc683fe4ff7acce9e296503563dd85 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal97dc683fe4ff7acce9e296503563dd85 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.select','data' => ['class' => 'w-full','wire:model.live' => 'selected_ad_type','id' => 'sort-by']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full','wire:model.live' => 'selected_ad_type','id' => 'sort-by']); ?>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $adTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $adType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($adType?->id); ?>"><?php echo e($adType?->name); ?></option>
                            <!-- :active="$activeTab === 'tab'.$index + 1" -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal97dc683fe4ff7acce9e296503563dd85)): ?>
<?php $attributes = $__attributesOriginal97dc683fe4ff7acce9e296503563dd85; ?>
<?php unset($__attributesOriginal97dc683fe4ff7acce9e296503563dd85); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal97dc683fe4ff7acce9e296503563dd85)): ?>
<?php $component = $__componentOriginal97dc683fe4ff7acce9e296503563dd85; ?>
<?php unset($__componentOriginal97dc683fe4ff7acce9e296503563dd85); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal505efd9768415fdb4543e8c564dad437)): ?>
<?php $attributes = $__attributesOriginal505efd9768415fdb4543e8c564dad437; ?>
<?php unset($__attributesOriginal505efd9768415fdb4543e8c564dad437); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal505efd9768415fdb4543e8c564dad437)): ?>
<?php $component = $__componentOriginal505efd9768415fdb4543e8c564dad437; ?>
<?php unset($__componentOriginal505efd9768415fdb4543e8c564dad437); ?>
<?php endif; ?>
                </div>
                <?php else: ?>
                <div class="flex items-center gap-5 mb-10 overflow-x-auto hide-scroll">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $adTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $adType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button wire:click="loadCategory('<?php echo e($adType?->id); ?>', 'tab<?php echo e($index + 1); ?>')" class="text-xs md:text-sm  <?php echo e($activeTab === 'tab'.$index + 1 ? 'block text-white py-1.5 px-4 rounded-xl bg-black dark:bg-primary-600 dark:text-white whitespace-nowrap' : 'block border border-[#d1d5d8] classic:border-black text-black py-1.5 px-4 rounded-xl bg-white ring-1 ring-gray-950/5 dark:bg-gray-900 dark:border-black dark:text-white whitespace-nowrap'); ?> ">
                        <?php echo e($adType?->name); ?>

                    </button>
                    <!-- :active="$activeTab === 'tab'.$index + 1" -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="relative" x-data="{
                                scroll: null,
                                isScrollStart: true,
                                isScrollEnd: false,
                                init() {
                                    this.scroll = this.$refs.scrollContainer;
                                    this.updateScrollButtons();
                                    this.scroll.addEventListener('scroll', () => this.updateScrollButtons());
                                },
                                updateScrollButtons() {
                                    this.isScrollStart = this.scroll.scrollLeft <= 0;
                                    this.isScrollEnd = this.scroll.scrollLeft + this.scroll.clientWidth >= this.scroll.scrollWidth;
                                },
                                scrollLeft() {
                                    this.scroll.scrollBy({ left: -200, behavior: 'smooth' });
                                },
                                scrollRight() {
                                    this.scroll.scrollBy({ left: 200, behavior: 'smooth' });
                                }
                            }">
                <!-- Scroll left -->
                <!--[if BLOCK]><![endif]--><?php if(getCurrentTheme() == 'modern'): ?>
                <div x-show="!isScrollStart" class="absolute top-1/2 z-10 left-0 transform -translate-y-1/2 flex items-center gap-x-2">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-chevron-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-tooltip' => '{
                                        content: \''.e(__('messages.t_tooltip_previous')).'\',
                                        theme: $store.theme,
                                    }','@click' => 'scrollLeft','class' => 'h-6 w-6 text-white bg-primary-600 rounded-full p-0.5 cursor-pointer']); ?>
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
                </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><?php if($categories->isNotEmpty()): ?>
                <div
                    x-ref="scrollContainer"
                    class="flex py-1 pl-1 pr-3 <?php echo e(getCurrentTheme() == 'classic'?'md:p-0 md:flex-none md:grid md:grid-cols-2 md:gap-8':' overflow-x-auto flex-grow md:gap-4 no-scrollbar'); ?>  gap-4  max-md:overflow-x-auto">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('home.category-card', ['category' => $category]);

$__html = app('livewire')->mount($__name, $__params, 'category-'.e($category->id).'', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <?php else: ?>
                <div class="flex flex-col items-center justify-center p-5 w-full">
                    <?php if (isset($component)) { $__componentOriginal0521a2b1fe4eec72d47574945aee47a6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0521a2b1fe4eec72d47574945aee47a6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.not-found','data' => ['sizes' => 'sm','description' => 'No categories available for the selected filter.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sizes' => 'sm','description' => 'No categories available for the selected filter.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0521a2b1fe4eec72d47574945aee47a6)): ?>
<?php $attributes = $__attributesOriginal0521a2b1fe4eec72d47574945aee47a6; ?>
<?php unset($__attributesOriginal0521a2b1fe4eec72d47574945aee47a6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0521a2b1fe4eec72d47574945aee47a6)): ?>
<?php $component = $__componentOriginal0521a2b1fe4eec72d47574945aee47a6; ?>
<?php unset($__componentOriginal0521a2b1fe4eec72d47574945aee47a6); ?>
<?php endif; ?>
                </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!-- Scroll right -->
                <!--[if BLOCK]><![endif]--><?php if(getCurrentTheme() == 'modern'): ?>
                <div x-show="!isScrollEnd" class="absolute top-1/2 right-0 transform -translate-y-1/2 flex items-center gap-x-2">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-chevron-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-tooltip' => '{
                                        content: \''.e(__('messages.t_tooltip_next')).'\',
                                        theme: $store.theme,
                                    }','@click' => 'scrollRight','class' => 'h-6 w-6 text-white bg-primary-600 rounded-full p-0.5 cursor-pointer']); ?>
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
                </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            </div>
        </div>
    </section>
    <?php break; ?>

    <?php case ('spotlight'): ?>
    <!--[if BLOCK]><![endif]--><?php if(!$spotlightAds->isEmpty()): ?>
    <section class="py-4 md:py-8" aria-labelledby="spotlight">
        <div class="container mx-auto px-4">
            <h2 id="spotlight" class="text-xl md:text-2xl rtl:text-right ltr:text-left mb-6 font-semibold">
                <?php echo e(__('messages.t_spotlight_display')); ?>

            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5  gap-4   sm:gap-x-4">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $spotlightAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('ad.ad-item', ['ad' => $ad,'isSpotlight' => true,'lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'ad-'.e($ad->id).'', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </section>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php break; ?>

    <?php case ('fresh_ads'): ?>
    <!--[if BLOCK]><![endif]--><?php if(!$freshAds->isEmpty()): ?>
    <section class="py-4 pb-10 md:py-8 " aria-labelledby="fresh_ads">
        <div class="container mx-auto px-4">
            <h2 id="fresh_ads" class="text-xl md:text-2xl rtl:text-right ltr:text-left mb-6 font-semibold"><?php echo e(__('messages.t_fresh_recommend')); ?>

            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5  gap-4  sm:gap-x-4 ">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $freshAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('ad.ad-item', ['ad' => $ad,'lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'fresh-ad-'.e($ad->id).'', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </section>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php break; ?>

    <?php default: ?>
    <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(count($popularAds) && getSubscriptionSetting('status')&& getActiveSubscriptionPlan() && getActiveSubscriptionPlan()?->product_performance_analysis): ?>
    <section class="py-4 pb-10 md:py-8 " aria-labelledby="popular_ads">
        <div class="container mx-auto px-4">
            <h2 id="popular_ads" class="text-xl md:text-2xl rtl:text-right ltr:text-left mb-6 font-semibold"><?php echo e(__('messages.t_popular_ads')); ?>

            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5  gap-4  sm:gap-x-4 ">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $popularAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('ad.ad-item', ['ad' => $ad,'lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'popular-ad-'.e($ad->id).'', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </section>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $displayedPopularAdsCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!--[if BLOCK]><![endif]--><?php if(count($this->getPopularAdsBasedOnCategory($categoryId))): ?>
    <section class="py-4 pb-10 md:py-8 " aria-labelledby="popular_in_category">
        <div class="container mx-auto px-4">
            <?php
            $categoryName = \App\Models\Category::find($categoryId)?->name ?? '';
            ?>
            <h2 id="popular_in_category" class="text-xl md:text-2xl rtl:text-right ltr:text-left mb-6 font-semibold"><?php echo e(__('messages.t_popular_in_category',['category'=>$categoryName ?? ''])); ?>

            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5  gap-4  sm:gap-x-4 ">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->getPopularAdsBasedOnCategory($categoryId); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('ad.ad-item', ['ad' => $ad,'lazy' => true]);

$__html = app('livewire')->mount($__name, $__params, 'fresh-ad-'.e($ad->id).'', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </section>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

    </main>

    <!--[if BLOCK]><![endif]--><?php if($adPlacementSettings->before_footer): ?>
    <div class="container mx-auto px-4 flex items-center justify-center md:pb-10 pb-8" role="complementary" aria-label="<?php echo e(__('messages.t_aria_label_footer_advertisement')); ?>">
        <?php echo $adPlacementSettings->before_footer; ?>

    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('layout.sidebar', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1369151946-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('layout.footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1369151946-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <nav aria-label="<?php echo e(__('messages.t_aria_label_post_ad')); ?>">
    <a href="/post-ad"
        class="z-10 bg-gray-900 dark:bg-primary-600 dark:text-black  text-white py-2 px-4 rounded-full fixed bottom-20 right-4 mb-1 md:hidden flex items-center justify-center gap-x-1"
        wire:navigate>
        <span>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-plus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
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
        </span> <?php echo e(__('messages.t_post_your_ad')); ?>

    </a>
    </nav>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('layout.bottom-navigation', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1369151946-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <?php
        $__scriptKey = '1369151946-0';
        ob_start();
    ?>
    <script>
            const scrollContainer = document.querySelector('[x-ref="scrollContainer"]');
            let isDragging = false;
            let startX, scrollLeft;

            // Mouse Down (Start Dragging)
            scrollContainer.addEventListener('mousedown', (e) => {
                isDragging = true;
                scrollContainer.classList.add('dragging');
                startX = e.pageX - scrollContainer.offsetLeft;
                scrollLeft = scrollContainer.scrollLeft;
            });

            // Mouse Move (Dragging)
            scrollContainer.addEventListener('mousemove', (e) => {
                if (!isDragging) return;
                e.preventDefault();
                const x = e.pageX - scrollContainer.offsetLeft;
                const walk = (x - startX) * 2; // Adjust scroll speed
                scrollContainer.scrollLeft = scrollLeft - walk;
            });

            // Mouse Up / Leave (Stop Dragging)
            scrollContainer.addEventListener('mouseup', () => {
                isDragging = false;
                scrollContainer.classList.remove('dragging');
            });

            scrollContainer.addEventListener('mouseleave', () => {
                isDragging = false;
                scrollContainer.classList.remove('dragging');
            });

            // Optional: Add touch support for mobile
            scrollContainer.addEventListener('touchstart', (e) => {
                startX = e.touches[0].pageX - scrollContainer.offsetLeft;
                scrollLeft = scrollContainer.scrollLeft;
            });

            scrollContainer.addEventListener('touchmove', (e) => {
                const x = e.touches[0].pageX - scrollContainer.offsetLeft;
                const walk = (x - startX) * 2; // Adjust scroll speed
                scrollContainer.scrollLeft = scrollLeft - walk;
            });
    </script>
        <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
</div>
<?php /**PATH C:\xampp\htdocs\kkere\resources\views/livewire/home/home.blade.php ENDPATH**/ ?>