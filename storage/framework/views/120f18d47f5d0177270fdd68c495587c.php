<!DOCTYPE html>
<html lang="<?php echo e(str_replace("_", "-", app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

        <?php if (! empty(trim($__env->yieldContent("title")))): ?>
            <title><?php echo $__env->yieldContent("title"); ?> - <?php echo e(config("app.settings.name", "TMail")); ?></title>
        <?php else: ?>
            <title><?php echo e(config("app.settings.name", "TMail")); ?></title>
        <?php endif; ?>
        <link rel="shortcut icon" href="<?php echo e(asset("images/icon.png")); ?>" type="image/png" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=poppins:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://use.hugeicons.com/font/icons.css" />
        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(["resources/css/app.css", "resources/js/app.js"]); ?>

        <!-- Styles -->
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.9.1/tinymce.min.js" integrity="sha512-09JpfVm/UE1F4k8kcVUooRJAxVMSfw/NIslGlWE/FGXb2uRO1Nt4BXAJ3LxPqNbO3Hccdu46qaBPp9wVpWAVhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
        <?php if (isset($component)) { $__componentOriginalff9615640ecc9fe720b9f7641382872b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff9615640ecc9fe720b9f7641382872b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff9615640ecc9fe720b9f7641382872b)): ?>
<?php $attributes = $__attributesOriginalff9615640ecc9fe720b9f7641382872b; ?>
<?php unset($__attributesOriginalff9615640ecc9fe720b9f7641382872b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff9615640ecc9fe720b9f7641382872b)): ?>
<?php $component = $__componentOriginalff9615640ecc9fe720b9f7641382872b; ?>
<?php unset($__componentOriginalff9615640ecc9fe720b9f7641382872b); ?>
<?php endif; ?>

        <div class="flex flex-col min-h-screen">
            <div class="flex-1">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("navigation-menu");

$__html = app('livewire')->mount($__name, $__params, 'lw-1366224544-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                <!-- Page Heading -->
                <?php if(isset($header)): ?>
                    <header class="bg-white text-gray-900 dark:bg-gray-800 dark:text-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <?php echo e($header); ?>

                        </div>
                    </header>
                <?php endif; ?>

                <!-- Page Content -->
                <main>
                    <?php echo e($slot); ?>

                </main>
            </div>
            <footer class="bg-gray-900 dark:bg-gray-800 text-white shadow mt-6">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col-reverse md:flex-row justify-between items-center gap-5">
                        <div class="text-sm"><?php echo e(__("Powered by TMail")); ?> v<?php echo e(config("app.settings.version")); ?></div>
                        <div class="flex gap-5 text-sm">
                            <a class="border-b border-transparent hover:border-gray-100" href="https://tmail.hp.gl/docs/" target="_blank" rel="noopener noreferrer"><?php echo e(__("Documentation")); ?></a>
                            <a class="border-b border-transparent hover:border-gray-100" href="https://helpdesk.thehp.in" target="_blank" rel="noopener noreferrer"><?php echo e(__("Contact Support")); ?></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Floating View Website Button -->
        <a id="view-website-btn" href="<?php echo e(route("home")); ?>" target="_blank" class="block fixed bottom-4 left-1/2 -translate-x-1/2 opacity-0 translate-y-10 scale-95 pointer-events-none transition-all duration-500 ease-out">
            <?php if (isset($component)) { $__componentOriginal30e169a586a2bd405d6a25d5afef85c0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30e169a586a2bd405d6a25d5afef85c0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button-icon','data' => ['style' => 'primary','icon' => 'hgi-link-square-01 ml-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'primary','icon' => 'hgi-link-square-01 ml-2']); ?>
                <?php echo e(__("View Website")); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal30e169a586a2bd405d6a25d5afef85c0)): ?>
<?php $attributes = $__attributesOriginal30e169a586a2bd405d6a25d5afef85c0; ?>
<?php unset($__attributesOriginal30e169a586a2bd405d6a25d5afef85c0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal30e169a586a2bd405d6a25d5afef85c0)): ?>
<?php $component = $__componentOriginal30e169a586a2bd405d6a25d5afef85c0; ?>
<?php unset($__componentOriginal30e169a586a2bd405d6a25d5afef85c0); ?>
<?php endif; ?>
        </a>

        <?php echo $__env->yieldPushContent("modals"); ?>

        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


        <?php if(auth()->check() && auth()->user()->role == 7): ?>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const darkmode = localStorage.getItem('darkmode');
                    if (darkmode && darkmode == 'enabled') {
                        enableDarkMode();
                    } else if (!darkmode && window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                        enableDarkMode();
                    } else {
                        disableDarkMode();
                    }
                });
                function enableDarkMode() {
                    document.documentElement.setAttribute('data-mode', 'dark');
                    localStorage.setItem('darkmode', 'enabled');
                }
                function disableDarkMode() {
                    document.documentElement.setAttribute('data-mode', 'light');
                    localStorage.setItem('darkmode', 'disabled');
                }
            </script>
        <?php endif; ?>
    </body>
</html>
<?php /**PATH /home/tmail/public_html/resources/views/layouts/backend.blade.php ENDPATH**/ ?>