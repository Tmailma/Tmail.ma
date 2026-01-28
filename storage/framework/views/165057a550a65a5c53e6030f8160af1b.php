<?php $__env->startComponent('mail::message'); ?>
# You have a new message

Name: <?php echo new \Illuminate\Support\EncodedHtmlString($name); ?>

Email: <?php echo new \Illuminate\Support\EncodedHtmlString($email); ?>

Message: <?php echo new \Illuminate\Support\EncodedHtmlString($message); ?>


Thanks,<br>
<?php echo new \Illuminate\Support\EncodedHtmlString(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/tmail/public_html/resources/views/emails/contact.blade.php ENDPATH**/ ?>