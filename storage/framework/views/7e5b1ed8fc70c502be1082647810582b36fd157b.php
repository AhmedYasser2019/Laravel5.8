<?php $__env->startSection('title','Detail for '.$customer->name); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
           <h1>Details for <?php echo e($customer->name); ?></h1>
           <p><a href="<?php echo e($customer->id); ?>/edit">Edit</a> </p>
            <form action="/customers/<?php echo e($customer->id); ?>" method="POST">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <button class="btn-danger" type="submit">Delete</button>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p><strong>Name:</strong><?php echo e($customer->name); ?></p>
            <p><strong>Email:</strong><?php echo e($customer->email); ?></p>
            <p><strong>Company:</strong><?php echo e($customer->company->name); ?></p>
        </div>
    </div>

    <?php if($customer->image): ?>
        <div class="row col-12"><img src="<?php echo e(asset('storage/' . $customer->image)); ?>" alt="" class="img-thumbnail"></div>
    <?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvl5.8\resources\views/customers/show.blade.php ENDPATH**/ ?>