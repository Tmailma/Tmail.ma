<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((["disabled" => false, "prefix" => ""]));

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

foreach (array_filter((["disabled" => false, "prefix" => ""]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="flex items-center mt-1 w-full border overflow-hidden border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus-within:outline-2 focus-within:outline-offset-2 focus-within:ring-1 focus-within:border-indigo-500 dark:focus-within:border-indigo-600 focus-within:ring-indigo-500 dark:focus-within:ring-indigo-600 rounded-md shadow-sm">
    <div class="ps-3 py-2 text-gray-500"><?php echo e($prefix); ?></div>
    <input <?php echo e($disabled ? "disabled" : ""); ?> <?php echo $attributes->merge(["class" => "ps-0 bg-transparent flex-1 border-0 focus:outline-0 focus:shadow-none focus:ring-0"]); ?> />
</div>
<?php /**PATH /home/tmail/public_html/resources/views/components/input-prefix.blade.php ENDPATH**/ ?>