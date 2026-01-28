<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php if(config("app.settings.language_in_url")): ?>
        <?php $__currentLoopData = config("app.settings.languages"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($language["is_active"]): ?>
                <url>
                    <loc><?php echo e(config("app.url") . "/" . $code); ?></loc>
                    <lastmod><?php echo e(date(DATE_ATOM)); ?></lastmod>
                    <priority>1.0</priority>
                </url>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <url>
                <?php if($page->lang): ?>
                    <loc><?php echo e(config("app.url") . "/" . $page->lang . "/" . $page->slug); ?></loc>
                <?php else: ?>
                    <loc><?php echo e(config("app.url") . "/" . config("app.settings.language") . "/" . $page->slug); ?></loc>
                <?php endif; ?>
                <lastmod><?php echo e($page->updated_at->format("Y-m-d\TH:i:s.uP")); ?></lastmod>
                <priority>0.9</priority>
            </url>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <url>
                <?php if($post->lang): ?>
                    <loc><?php echo e(config("app.url") . "/" . $post->lang . "/blog/" . $post->slug); ?></loc>
                <?php else: ?>
                    <loc><?php echo e(config("app.url") . "/" . config("app.settings.language") . "/blog/" . $post->slug); ?></loc>
                <?php endif; ?>
                <lastmod><?php echo e($post->updated_at->format("Y-m-d\TH:i:s.uP")); ?></lastmod>
                <priority>0.8</priority>
            </url>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <url>
            <loc><?php echo e(route("home")); ?></loc>
            <lastmod><?php echo e(date(DATE_ATOM)); ?></lastmod>
            <priority>1.0</priority>
        </url>
        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <url>
                <loc><?php echo e(route("page", $page->slug)); ?></loc>
                <lastmod><?php echo e($page->updated_at->format("Y-m-d\TH:i:s.uP")); ?></lastmod>
                <priority>0.9</priority>
            </url>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <url>
                <loc><?php echo e(route("page", $post->slug)); ?></loc>
                <lastmod><?php echo e($post->updated_at->format("Y-m-d\TH:i:s.uP")); ?></lastmod>
                <priority>0.8</priority>
            </url>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</urlset>
<?php /**PATH /home/tmail/public_html/resources/views/frontend/common/sitemap.blade.php ENDPATH**/ ?>