<a href="<?php echo e(Util::localizeRoute("home")); ?>">
    <?php if(config("app.settings.logo") && Illuminate\Support\Facades\Storage::disk("local")->has(config("app.settings.logo"))): ?>
        <img class="w-56" src="<?php echo e(url("storage/" . config("app.settings.logo"))); ?>" alt="logo" />
    <?php elseif(Illuminate\Support\Facades\Storage::disk("local")->has("public/images/custom-logo.png")): ?>
        <img class="max-w-56" src="<?php echo e(url("storage/images/custom-logo.png")); ?>" alt="logo" />
    <?php else: ?>
        <img class="max-w-56" src="<?php echo e(asset("images/logo.png")); ?>" alt="logo" />
    <?php endif; ?>
</a>
<?php /**PATH /home/tmail/public_html/resources/views/components/authentication-card-logo.blade.php ENDPATH**/ ?>