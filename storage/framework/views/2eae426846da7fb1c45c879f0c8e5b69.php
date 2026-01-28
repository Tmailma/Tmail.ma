<main class="page flex-1 p-5 bg-white dark:bg-gray-800 rounded-md">
    <!--[if BLOCK]><![endif]--><?php if(isset($isBlog) && $isBlog): ?>
        <?php echo $content[0]; ?>

        <!--[if BLOCK]><![endif]--><?php if($posts && $posts->count()): ?>
            <?php echo $__env->make("frontend.common.posts", ["posts" => $posts], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><?php if(isset($content[1])): ?>
            <?php echo $content[1]; ?>

        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php else: ?>
        <div class="text-gray-800 dark:text-gray-300">
            <?php echo $page->content; ?>

        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</main>
<?php /**PATH /home/tmail/public_html/resources/views/frontend/themes/groot/components/page.blade.php ENDPATH**/ ?>