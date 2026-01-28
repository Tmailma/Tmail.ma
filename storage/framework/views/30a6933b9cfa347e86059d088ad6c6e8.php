<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    "content" => null,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    "content" => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    if (isset($content["page"])) {
        $page = $content["page"];
    }
    if (isset($content["post"])) {
        $post = $content["post"];
    }
?>

<!DOCTYPE html>
<html dir="<?php echo e(config("app.settings.direction")); ?>" class="<?php echo e(config("app.settings.direction")); ?>" lang="<?php echo e(str_replace("_", "-", app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

        
        <?php if(isset($page)): ?>
            <?php echo $page->header; ?>

            <title><?php echo e($page->title); ?> - <?php echo e(config("app.settings.name")); ?></title>
        <?php elseif(isset($post)): ?>
            <?php echo $post->header; ?>

            <title><?php echo e($post->title); ?> - <?php echo e(config("app.settings.name")); ?></title>
        <?php else: ?>
            <title><?php echo e(config("app.settings.name")); ?></title>
        <?php endif; ?>

        
        <?php echo config("app.settings.global.header"); ?>


        

        <?php if(config("app.settings.favicon") && Illuminate\Support\Facades\Storage::disk("public")->has(config("app.settings.favicon"))): ?>
            <link rel="icon" href="<?php echo e(url("storage/" . config("app.settings.favicon"))); ?>" />
        <?php elseif(Illuminate\Support\Facades\Storage::disk("public")->has("images/custom-favicon.png")): ?>
            <link rel="icon" href="<?php echo e(url("storage/images/custom-favicon.png")); ?>" type="image/png" />
        <?php else: ?>
            <link rel="icon" href="<?php echo e(asset("images/icon.png")); ?>" type="image/png" />
        <?php endif; ?>

        
        <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" onload="this.onload=null;this.rel='stylesheet'" />

        
        <?php echo app('Illuminate\Foundation\Vite')(["resources/css/app.css", "resources/sass/common.scss", "resources/js/app.js"]); ?>

        
        <script src="<?php echo e(asset("vendor/Shortcode/Shortcode.js")); ?>"></script>

        
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css2?family=<?php echo e(str_replace(" ", "+", config("app.settings.font_family.head", "Poppins"))); ?>:wght@400;600;700&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" />
        <link href="https://fonts.bunny.net/css2?family=<?php echo e(str_replace(" ", "+", config("app.settings.font_family.body", "Poppins"))); ?>:wght@400;600&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" />

        
        <?php
            $headFont = config("app.settings.font_family.head", "Poppins");
            $bodyFont = config("app.settings.font_family.body", "Poppins");
            $primary = config("app.settings.colors.primary", "#0155b5");
            $secondary = config("app.settings.colors.secondary", "#2fc10a");
            $tertiary = config("app.settings.colors.tertiary", "#d2ab3e");
        ?>

        <style>
            :root {
                --head-font: '<?php echo e($headFont); ?>';
                --body-font: '<?php echo e($bodyFont); ?>';
                --primary: <?php echo e($primary); ?>;
                --secondary: <?php echo e($secondary); ?>;
                --tertiary: <?php echo e($tertiary); ?>;
            }
        </style>

        
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


        
        <?php echo config("app.settings.global.css"); ?>


        
        <?php if(! isset($page) && ! isset($post)): ?>
            <?php echo config("app.settings.app_header"); ?>

        <?php endif; ?>
    </head>
    <body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200">
        
        <?php echo e($slot); ?>


        
        <?php echo $__env->yieldPushContent("modals"); ?>

        
        <?php if(config("app.settings.cookie.enable")): ?>
            <div id="cookie" class="hidden fixed w-full bottom-0 left-0 p-4 bg-gray-900 text-white justify-between">
                <div class="py-2">
                    <?php echo __(config("app.settings.cookie.text")); ?>

                </div>
                <div id="cookie_close" class="px-3 py-2 bg-yellow-300 text-gray-900 rounded-md cursor-pointer">
                    <?php echo e(__("Close")); ?>

                </div>
            </div>
        <?php endif; ?>

        
        <div class="hidden language-helper">
            <div class="error"><?php echo e(__("Error")); ?></div>
            <div class="success"><?php echo e(__("Success")); ?></div>
            <div class="copy_text"><?php echo e(__("Email ID Copied to Clipboard")); ?></div>
        </div>

        
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


        
        <?php if(! isset($page) && ! isset($post)): ?>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const email = '<?php echo e(App\Services\TMail::getEmail(true)); ?>';
                    const add_mail_in_title = '<?php echo e(config("app.settings.add_mail_in_title") ? "yes" : "no"); ?>';
                    if (add_mail_in_title === 'yes') {
                        document.title += ` - ${email}`;
                    }
                    Livewire.dispatch('syncEmail', { email });
                    Livewire.dispatch('fetchMessages');
                });
            </script>
        <?php endif; ?>

        <script>
            document.addEventListener('livewire:init', () => {
                Livewire.on('stopLoader', () => {
                    setTimeout(() => {
                        if (document.getElementById('refresh')) {
                            document.getElementById('refresh').classList.add('pause-spinner');
                        }
                    }, 500);
                });
            });

            let counter = parseInt(<?php echo e(config("app.settings.fetch_seconds")); ?>);
            setInterval(() => {
                if (counter === 0 && document.getElementById('imap-error') === null && !document.hidden) {
                    if (document.getElementById('refresh')) {
                        document.getElementById('refresh').classList.remove('pause-spinner');
                    }
                    Livewire.dispatch('fetchMessages');
                    counter = parseInt(<?php echo e(config("app.settings.fetch_seconds")); ?>);
                }
                counter--;
                if (document.hidden) {
                    counter = 1;
                }
            }, 1000);
        </script>

        
        <script>
            let captcha_name = '<?php echo e(config("app.settings.captcha", "off")); ?>';
            let site_key = '';
            if (captcha_name && captcha_name !== 'off') {
                site_key = '<?php echo e(config("app.settings." . config("app.settings.captcha") . ".site_key", "")); ?>';
            }
            let strings = <?php echo json_encode(\Lang::get("*")); ?>;
            const __ = (string) => strings[string] ?? string;
        </script>

        
        <?php $__currentLoopData = ["success", "error"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(Session::has($type)): ?>
                <script defer>
                    document.addEventListener('DOMContentLoaded', () => {
                        document.dispatchEvent(
                            new CustomEvent('showAlert', {
                                bubbles: true,
                                detail: {
                                    type: '<?php echo e($type); ?>',
                                    message: '<?php echo e(Session::get($type)); ?>',
                                },
                            })
                        );
                    });
                </script>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if(config("app.settings.enable_ad_block_detector")): ?>
            <script>
                fetch('https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js').catch(() => {
                    document.querySelector('[class*="-theme"]').remove();
                    document.querySelector('body > div').insertAdjacentHTML(
                        'beforebegin',
                        `
                        <div class="fixed w-screen h-screen bg-red-800 flex flex-col justify-center items-center gap-5 z-50 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                            </svg>
                            <h1 class="text-4xl font-bold"><?php echo e(__("Ad Blocker Detected")); ?></h1>
                            <h2><?php echo e(__("Disable the Ad Blocker to use ") . config("app.settings.name")); ?></h2>
                        </div>
                        `
                    );
                });
            </script>
        <?php endif; ?>

        <?php if(config("app.settings.enable_dark_mode")): ?>
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

        
        <?php echo config("app.settings.global.js"); ?>

        <?php echo config("app.settings.global.footer"); ?>

    </body>
</html>
<?php /**PATH /home/tmail/public_html/resources/views/layouts/frontend.blade.php ENDPATH**/ ?>