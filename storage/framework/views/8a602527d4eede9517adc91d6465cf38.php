<main class="py-10 px-3 sm:px-6 lg:px-8">
    <?php if(Laravel\Fortify\Features::canUpdateProfileInformation()): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("profile.update-profile-information-form");

$__html = app('livewire')->mount($__name, $__params, 'lw-3017887320-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <div class="my-10"></div>
    <?php endif; ?>

    <?php if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords())): ?>
        <div class="mt-10 sm:mt-0">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("profile.update-password-form");

$__html = app('livewire')->mount($__name, $__params, 'lw-3017887320-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
        <div class="my-10"></div>
    <?php endif; ?>

    <?php if(Laravel\Fortify\Features::canManageTwoFactorAuthentication()): ?>
        <div class="mt-10 sm:mt-0">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("profile.two-factor-authentication-form");

$__html = app('livewire')->mount($__name, $__params, 'lw-3017887320-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
        <div class="my-10"></div>
    <?php endif; ?>

    <div class="mt-10 sm:mt-0">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("profile.logout-other-browser-sessions-form");

$__html = app('livewire')->mount($__name, $__params, 'lw-3017887320-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>

    <?php if(Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures()): ?>
        <div class="my-10"></div>
        <div class="mt-10 sm:mt-0">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split("profile.delete-user-form");

$__html = app('livewire')->mount($__name, $__params, 'lw-3017887320-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    <?php endif; ?>
</main>
<?php /**PATH /home/tmail/public_html/resources/views/frontend/common/profile.blade.php ENDPATH**/ ?>