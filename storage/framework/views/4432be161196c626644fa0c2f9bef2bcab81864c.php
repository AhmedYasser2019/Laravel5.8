<?php $__env->startSection('title','Contact Us'); ?>
<?php $__env->startSection('content'); ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <h1>Contact Us</h1>
    <?php if(! session()->has('message')): ?>
        <form action="<?php echo e(route('contact.store')); ?>" method="POST">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name"  value="<?php echo e(old('name')); ?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="text" name="email" id="email" value="<?php echo e(old('email')); ?>" class="form-control" />
            </div>
            <div class="form-group">
                <label for="Message">Message:</label>
                <textarea name="message" id="message" rows="10" cols="30" class="form-control">
                    <?php echo e(old('message')); ?>

                </textarea>
            </div>
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn-primary">Send Message</button>
        </form>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvl5.8\resources\views/contact/create.blade.php ENDPATH**/ ?>