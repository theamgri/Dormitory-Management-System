<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Add Tenant to Room <?php echo e($room->id); ?></h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('tenants.store', $room)); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <input type="hidden" name="room_id" value="<?php echo e($room->id); ?>">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo e(old('first_name')); ?>" style=" border-style: solid;
                border-width: 2px;" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" style=" border-style: solid;
                border-width: 2px;" name="last_name" id="last_name" class="form-control" value="<?php echo e(old('last_name')); ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" style=" border-style: solid;
                border-width: 2px;" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" style=" border-style: solid;
                border-width: 2px;" name="address" id="address" class="form-control" value="<?php echo e(old('address')); ?>" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" style=" border-style: solid;
                border-width: 2px;" name="phone_number" id="phone" class="form-control" value="<?php echo e(old('phone')); ?>" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="">Select status</option>
                    <option value="single" <?php echo e(old('status') === 'single' ? 'selected' : ''); ?>>Single</option>
                    <option value="married" <?php echo e(old('status') === 'married' ? 'selected' : ''); ?>>Married</option>
                    <option value="divorced" <?php echo e(old('status') === 'divorced' ? 'selected' : ''); ?>>Divorced</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Tenant</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FRANCIS ALLEN\Dormitory-Management-System-master\resources\views/tenants/create.blade.php ENDPATH**/ ?>