<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"  value="<?php echo e(old('name') ?? $customer->name); ?> " class="form-control"/>
</div>
<div class="form-group">
    <label for="email">E-Mail:</label>
    <input type="text" name="email" id="email" value="<?php echo e(old('email') ?? $customer->email); ?>" class="form-control" />
</div>
<div class="form-group">
    <label for="active">Status</label>
    <select class="form-control" name="active" id="active">
        <option value="" disabled>Select customer status</option>
        <?php $__currentLoopData = $customer->activeOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activeOptionKey => $activeOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($activeOptionKey); ?>"<?php echo e($customer->active == '$activeOptionValue' ? 'selected' : ''); ?>><?php echo e($activeOptionValue); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group">
    <label for="company_id">Company Name</label>
    <select class="form-control" name="company_id" id="company_id">
        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($company->id); ?>"<?php echo e($company->id == $customer->company_id ? 'selected' : ''); ?>><?php echo e($company->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group d-flex flex-column" >
    <label for="image">Profile Image</label>
    <input type="file"  name="image" class="py-2">
    <div><?php echo e($errors->first('image')); ?></div>
</div>
<?php echo csrf_field(); ?>
<?php /**PATH C:\xampp\htdocs\lvl5.8\resources\views/customers/form.blade.php ENDPATH**/ ?>