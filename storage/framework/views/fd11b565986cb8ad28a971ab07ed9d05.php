<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((["disabled" => false, "id" => "id"]));

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

foreach (array_filter((["disabled" => false, "id" => "id"]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="relative">
    <input <?php echo e($disabled ? "disabled" : ""); ?> id="<?php echo e($id); ?>" type="checkbox" <?php echo $attributes->merge(["class" => "hidden"]); ?> />
    <div class="toggle-path bg-gray-200 dark:bg-gray-600 w-9 h-5 rounded-full shadow-inner"></div>
    <div class="toggle-circle absolute w-3.5 h-3.5 bg-white rounded-full shadow inset-y-0 left-0"></div>
</div>
<?php /**PATH /home/tmail/public_html/resources/views/components/toggle.blade.php ENDPATH**/ ?>