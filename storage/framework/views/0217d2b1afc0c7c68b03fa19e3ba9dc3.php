<?php
    $content = [];
    if (isset($page)) {
        $content["page"] = $page;
    }
    if (isset($post)) {
        $content["post"] = $post;
    }
?>

<?php if (isset($component)) { $__componentOriginal292c42cda3271405dc664835e31595e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal292c42cda3271405dc664835e31595e3 = $attributes; } ?>
<?php $component = App\View\Components\FrontendLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FrontendLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($content)]); ?>
    <div class="groot-theme flex flex-col min-h-screen">
        <header class="bg-primary text-white">
            <div class="grid grid-cols-3 p-5 lg:p-10">
                <div class="lg:order-first flex items-center">
                    <?php if(config("app.settings.enable_dark_mode")): ?>
                        <div x-data="{
                            darkmode: localStorage.getItem('darkmode') == 'enabled' ? true : false,
                        }" class="ml-3 text-lg cursor-pointer">
                            <i onclick="enableDarkMode()" x-on:click="darkmode = true" x-show="!darkmode" class="fas fa-moon"></i>
                            <i onclick="disableDarkMode()" x-on:click="darkmode = false" x-show="darkmode" class="fas fa-sun hgi-sun-03 text-yellow-500"></i>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="logo flex justify-center">
                    <a href="<?php echo e(Util::localizeRoute("home")); ?>">
                        <?php if(config("app.settings.logo") && Illuminate\Support\Facades\Storage::disk("public")->has(config("app.settings.logo"))): ?>
                            <img class="max-w-40" src="<?php echo e(url("storage/" . config("app.settings.logo"))); ?>" alt="logo" />
                        <?php elseif(Illuminate\Support\Facades\Storage::disk("public")->has("images/custom-logo.png")): ?>
                            <img class="max-w-40" src="<?php echo e(url("storage/images/custom-logo.png")); ?>" alt="logo" />
                        <?php else: ?>
                            <img class="max-w-40" src="<?php echo e(asset("images/logo.png")); ?>" alt="logo" />
                        <?php endif; ?>
                    </a>
                </div>
                <div class="flex gap-5 items-center justify-end">
                    <?php if(auth()->check()): ?>
                        <?php if (isset($component)) { $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => ['align' => 'right','width' => '48']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                             <?php $__env->slot('trigger', null, []); ?> 
                                <?php if(Laravel\Jetstream\Jetstream::managesProfilePhotos()): ?>
                                    <button class="flex text-sm border border-gray-300 dark:border-gray-600 rounded-full focus:outline-none focus:border-gray-300 dark:focus:border-gray-600 transition">
                                        <img class="size-8 rounded-full object-cover" src="<?php echo e(Auth::user()->profile_photo_url); ?>" alt="<?php echo e(Auth::user()->name); ?>" />
                                    </button>
                                <?php else: ?>
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                            <?php echo e(Auth::user()->name); ?>


                                            <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                <?php endif; ?>
                             <?php $__env->endSlot(); ?>

                             <?php $__env->slot('content', null, []); ?> 
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    <?php echo e(__("Manage Account")); ?>

                                </div>
                                <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => ''.e(Util::localizeRoute('profile')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(Util::localizeRoute('profile')).'']); ?>
                                    <?php echo e(__("Profile")); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                                <?php if(Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
                                    <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('api-tokens.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('api-tokens.index')).'']); ?>
                                        <?php echo e(__("API Tokens")); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                                <?php endif; ?>

                                <div class="border-t border-gray-100 dark:border-gray-700 my-1"></div>

                                <!-- Authentication -->
                                <form method="POST" action="<?php echo e(route("logout")); ?>" x-data>
                                    <?php echo csrf_field(); ?>

                                    <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('logout')).'','@click.prevent' => '$root.submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','@click.prevent' => '$root.submit();']); ?>
                                        <?php echo e(__("Log Out")); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                                </form>
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $attributes = $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $component = $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
                    <?php endif; ?>

                    <div class="lg:hidden flex items-center gap-3" x-data="{ open: false }">
                        <button @click="open = !open">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div x-show="open" class="fixed top-0 left-0 w-screen h-screen backdrop-blur-sm bg-black/50 z-50 py-10">
                            <button @click="open = false" class="absolute top-5 right-5 p-2 text-lg">
                                <i class="fas fa-times"></i>
                            </button>
                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("frontend.nav");

$__html = app('livewire')->mount($__name, $__params, 'lw-2602230958-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                        </div>
                    </div>

                    <div class="hidden lg:block relative">
                        <form action="<?php echo e(route("locale")); ?>" id="locale-form" method="post">
                            <?php echo csrf_field(); ?>
                            <select class="border-gray-300 dark:border-gray-600 block appearance-none cursor-pointer py-1 rounded-md focus:outline-none bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300" name="locale" id="locale" onchange="event.target.closest('form').submit()">
                                <?php $__currentLoopData = config("app.settings.languages"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($language["is_active"]): ?>
                                        <option <?php echo e(app()->getLocale() == $code ? "selected" : ""); ?> value="<?php echo e($code); ?>"><?php echo e($language["label"]); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block pb-5">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("frontend.nav");

$__html = app('livewire')->mount($__name, $__params, 'lw-2602230958-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 pb-5 lg:pb-10">
                <div class="flex justify-center items-center max-w-full m-4 adz-one"><?php echo config("app.settings.ads.one"); ?></div>

                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("frontend.actions", ["in_app" => isset($page) || isset($category) || isset($post) || isset($profile) ? true : false]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2602230958-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                <div class="flex justify-center items-center max-w-full m-4 adz-five"><?php echo config("app.settings.ads.five"); ?></div>
            </div>
        </header>
        <div class="flex-1 grid grid-cols-1 lg:grid-cols-6 gap-5 bg-gray-100 dark:bg-gray-900 py-5 lg:py-10">
            <div class="flex justify-center items-center max-w-full adz-two"><?php echo config("app.settings.ads.two"); ?></div>

            <div class="col-span-4 mx-5 lg:mx-0">
                <?php if(isset($page)): ?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("frontend.page", ["page" => $page]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2602230958-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php elseif(isset($post)): ?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("frontend.post", ["post" => $post]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2602230958-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php elseif(isset($category)): ?>
                    <main class="category flex-1 p-5">
                        <h1 class="text-xl font-bold text-gray-900 dark:text-white"><?php echo e(__("Category")); ?>: <?php echo e($category->name); ?></h1>
                        <?php echo $__env->make("frontend.common.posts", ["posts" => $posts], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </main>
                <?php elseif(isset($profile)): ?>
                    <?php echo $__env->make("frontend.common.profile", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php else: ?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("frontend.app");

$__html = app('livewire')->mount($__name, $__params, 'lw-2602230958-5', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <?php endif; ?>
                <?php if(isset($in_page->content)): ?>
                    <div class="in-app-page page py-5 lg:pt-10 flex justify-center">
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("frontend.page", ["page" => $in_page]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2602230958-6', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="flex justify-center items-center max-w-full adz-three"><?php echo config("app.settings.ads.three"); ?></div>
        </div>
        <footer class="bg-gray-800 dark:bg-gray-950 px-6 py-4 text-white text-sm">
            <div class="flex items-center justify-center lg:hidden mb-5">
                <?php $__currentLoopData = config("app.settings.socials", []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($social["link"]); ?>" target="_blank" class="ml-2 text-lg text-gray-200 hover:text-gray-300" rel="noopener noreferrer"><i class="<?php echo e($social["icon"]); ?>"></i></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="flex flex-col lg:flex-row gap-5 justify-between items-center">
                <div class="flex space-x-3">
                    <?php $__currentLoopData = \App\Models\Menu::where("status", true)->where("location", "secondary")->orderBy("order")->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(Util::localizeUrl($menu->link)); ?>" class="text-white hover:text-gray-300 hover:underline">
                            <?php echo e($menu->name); ?>

                        </a>
                        <?php if(! $loop->last): ?>
                            <span class="opacity-50">•</span>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="opacity-75 text-gray-300"><?php echo e(__("Copyright")); ?> &copy; <?php echo e(date("Y")); ?> <?php echo e(config("app.settings.name")); ?>.</div>
                <div class="hidden lg:block">
                    <?php $__currentLoopData = config("app.settings.socials", []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($social["link"]); ?>" target="_blank" class="ml-2 text-lg text-gray-200 hover:text-gray-300" rel="noopener noreferrer"><i class="<?php echo e($social["icon"]); ?>"></i></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </footer>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal292c42cda3271405dc664835e31595e3)): ?>
<?php $attributes = $__attributesOriginal292c42cda3271405dc664835e31595e3; ?>
<?php unset($__attributesOriginal292c42cda3271405dc664835e31595e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal292c42cda3271405dc664835e31595e3)): ?>
<?php $component = $__componentOriginal292c42cda3271405dc664835e31595e3; ?>
<?php unset($__componentOriginal292c42cda3271405dc664835e31595e3); ?>
<?php endif; ?>
<?php /**PATH /home/tmail/public_html/resources/views/frontend/themes/groot/app.blade.php ENDPATH**/ ?>