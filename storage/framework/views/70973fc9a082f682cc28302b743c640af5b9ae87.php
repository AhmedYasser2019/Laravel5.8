<?php $__env->startComponent('mail::message'); ?>
    #Thank you for the message
    <strong>Name:</strong><?php echo e($data['name']); ?>

    <strong>Email:</strong><?php echo e($data['email']); ?>

    <strong>Message:</strong>
    <?php echo e($data['message']); ?>


<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\lvl5.8\resources\views/emails/contact/contact-form.blade.php ENDPATH**/ ?>