<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((["style" => "", "size" => "xs"]));

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

foreach (array_filter((["style" => "", "size" => "xs"]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $baseClasses = "inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150";

    $styleClasses = match ($style) {
        "primary" => "bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-500 dark:bg-indigo-400 dark:text-gray-900 dark:hover:bg-indigo-300 dark:focus:ring-indigo-300",
        "success" => "bg-green-600 text-white hover:bg-green-700 focus:ring-green-500 dark:bg-green-400 dark:text-gray-900 dark:hover:bg-green-300 dark:focus:ring-green-300",
        "error" => "bg-red-600 text-white hover:bg-red-700 focus:ring-red-500 dark:bg-red-400 dark:text-gray-900 dark:hover:bg-red-300 dark:focus:ring-red-300",
        "warning" => "bg-yellow-500 text-white hover:bg-yellow-600 focus:ring-yellow-400 dark:bg-yellow-300 dark:text-gray-900 dark:hover:bg-yellow-200 dark:focus:ring-yellow-200",
        "info" => "bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-500 dark:bg-blue-400 dark:text-gray-900 dark:hover:bg-blue-300 dark:focus:ring-blue-300",
        default => "bg-gray-800 text-white hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:ring-indigo-500 dark:bg-gray-200 dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white dark:active:bg-gray-300 dark:focus:ring-offset-gray-800",
    };

    $sizeClasses = match ($size) {
        "xs" => "text-xs",
        "sm" => "text-sm",
        "md" => "text-base",
        "lg" => "text-lg",
        "xl" => "text-xl",
        default => "",
    };
?>

<button <?php echo e($attributes->merge(["type" => "submit", "class" => "$baseClasses $styleClasses $sizeClasses"])); ?>>
    <?php echo e($slot); ?>

</button>
<?php /**PATH /home/tmail/public_html/resources/views/components/button.blade.php ENDPATH**/ ?>