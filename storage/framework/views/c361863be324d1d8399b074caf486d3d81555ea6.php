<?php $__env->startSection('title','Customers'); ?>

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
    <div class="row">
        <div class="cal-12" >
            <h1>Customers</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12" >

            <form action="customers" method="POST" >
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name"  value="<?php echo e(old('name')); ?> " class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="email">E-Mail:</label>
                    <input type="text" name="email" id="email" value="<?php echo e(old('email')); ?>" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="active">Status</label>
                    <select class="form-control" name="active" id="active">
                        <option value="" disabled>Select customer status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="company_id">Company Name</label>
                    <select class="form-control" name="company_id" id="company_id">
                        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($company->id); ?>"><?php echo e($company->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add customer</button>
                <?php echo csrf_field(); ?>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Active Customers</h3>
            <ul>
                <?php $__currentLoopData = $activecustomers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($customer->name); ?><span class="text-muted">(<?php echo e($customer->company->name); ?>)</span> </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <div class="col-6">
            <h3>Inactive Customers</h3>
            <ul>
                <?php $__currentLoopData = $inactivecustomers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($customer->name); ?><span class="text-muted">(<?php echo e($customer->company->name); ?>)</span> </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <div class="col-12">
            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3><?php echo e($company->name); ?> Company</h3>
                <ul>

                    <?php $__currentLoopData = $company->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($customer->name); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lvl5.8\resources\views/customers.blade.php ENDPATH**/ ?>