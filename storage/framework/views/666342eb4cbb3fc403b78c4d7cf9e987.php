<nav>
    <div class="flex flex-col items-center lg:flex-row lg:items-baseline justify-center gap-3">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--[if BLOCK]><![endif]--><?php if($menu->hasChild()): ?>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-3 py-2 text-sm text-white font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline hover:bg-white hover:bg-opacity-10 focus:outline-none transition-colors">
                        <span><?php echo __($menu->name); ?></span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-0': open, 'rotate-180': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute bottom-11 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $menu->getChild(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-gray-700 dark:text-gray-300 md:mt-0 hover:text-gray-900 dark:hover:text-white focus:text-gray-900 dark:focus:text-white hover:bg-gray-100 dark:hover:bg-gray-700 focus:bg-gray-100 dark:focus:bg-gray-700 focus:outline-none transition-colors" href="<?php echo e(Util::localizeUrl($child->link)); ?>" target="<?php echo e($child->target); ?>"><?php echo __($child->name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <!--[if BLOCK]><![endif]--><?php if($menu->parent_id === null): ?>
                    <a href="<?php echo e(Util::localizeUrl($menu->link)); ?>" class="px-3 py-2 text-sm font-semibold text-left bg-transparent text-white <?php echo e(url()->current() === Util::localizeUrl($menu->link) ? "bg-white bg-opacity-25" : ""); ?> rounded-lg md:w-auto md:inline hover:bg-white hover:bg-opacity-10 focus:outline-none transition-colors" target="<?php echo e($menu->target); ?>"><?php echo __($menu->name); ?></a>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><?php if(Auth::check() && Auth::user()->role == 7): ?>
            <a href="<?php echo e(route("admin")); ?>" target="_blank" class="px-3 py-2 text-sm font-semibold text-left bg-transparent border-dashed border-2 border-red-500 text-red-500 rounded-lg md:w-auto md:inline hover:bg-red-900 hover:text-white transition-colors"><?php echo e(__("Admin")); ?></a>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><?php if(config("app.settings.user_registration.enabled") && ! Auth::check()): ?>
            <a href="<?php echo e(route("login")); ?>" class="px-3 py-2 text-sm font-semibold rounded-lg md:w-auto md:inline bg-secondary text-white hover:bg-secondary/90 transition-colors"><?php echo e(__("Login")); ?></a>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <div class="lg:hidden relative">
            <form action="<?php echo e(route("locale", "")); ?>" id="locale-form-mobile" method="post">
                <?php echo csrf_field(); ?>
                <select class="border-gray-300 dark:border-gray-600 block appearance-none cursor-pointer py-1 rounded-md focus:outline-none bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300" name="locale" id="locale-mobile" x-on:change="$el.form.submit()">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = config("app.settings.languages"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!--[if BLOCK]><![endif]--><?php if($language["is_active"]): ?>
                            <option <?php echo e(app()->getLocale() == $code ? "selected" : ""); ?> value="<?php echo e($code); ?>"><?php echo e($language["label"]); ?></option>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </select>
            </form>
        </div>
    </div>
</nav>
<?php /**PATH /home/tmail/public_html/resources/views/frontend/themes/groot/components/nav.blade.php ENDPATH**/ ?>