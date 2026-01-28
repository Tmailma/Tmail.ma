<div>
    <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="flex justify-between items-center border-b px-6 py-4 text-sm dark:border-gray-700">
            <?php echo e(__("Emails Created")); ?>

            <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['size' => 'xs','wire:model' => 'filter','wire:change' => 'updateChartData']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'xs','wire:model' => 'filter','wire:change' => 'updateChartData']); ?>
                <option value="last_7_days"><?php echo e(__("Last 7 Days")); ?></option>
                <option value="last_6_weeks"><?php echo e(__("Last 6 Weeks")); ?></option>
                <option value="last_12_months"><?php echo e(__("Last 12 Months")); ?></option>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
        </div>
        <?php if (isset($component)) { $__componentOriginala4e3cdfb63b25ec09a1145c63b107720 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4e3cdfb63b25ec09a1145c63b107720 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.charts.area','data' => ['chartId' => $chartId,'chartData' => $chartData,'function' => 'updateChartData','color' => '#E7000B']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('charts.area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['chartId' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($chartId),'chartData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($chartData),'function' => 'updateChartData','color' => '#E7000B']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala4e3cdfb63b25ec09a1145c63b107720)): ?>
<?php $attributes = $__attributesOriginala4e3cdfb63b25ec09a1145c63b107720; ?>
<?php unset($__attributesOriginala4e3cdfb63b25ec09a1145c63b107720); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala4e3cdfb63b25ec09a1145c63b107720)): ?>
<?php $component = $__componentOriginala4e3cdfb63b25ec09a1145c63b107720; ?>
<?php unset($__componentOriginala4e3cdfb63b25ec09a1145c63b107720); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
</div>
<?php /**PATH /home/tmail/public_html/resources/views/backend/dashboard/emails-created.blade.php ENDPATH**/ ?>