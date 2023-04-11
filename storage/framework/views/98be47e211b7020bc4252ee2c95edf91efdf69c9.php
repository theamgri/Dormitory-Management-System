<?php $__env->startSection('content'); ?>

    <div class="w-screen h-screen bg-scroll bg-cover bg-bottom" style="background-image: url(/assets/background.png);" >
       
      <h1 class="font-Montserrat text-center font-bold leading-tight text-4xl mt-0 mb-2" style=" color: #22215B; padding-top:2%;">Add Tenant to Room <?php echo e($room->id); ?></h1>
    <div class="container">
        

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="sm:ml-64">
        <form style="float:center" class="text-center" action="<?php echo e(route('tenants.store', $room)); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group inline-block mt-4">
                <input type="hidden" name="room_id" value="<?php echo e($room->id); ?>">
                <label for="first_name" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">First Name</label>
                <input type="text" name="first_name" id="first_name" style="height: 3rem; width:20rem;" class="form-control mt-4 drop-shadow-xl block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400" value="<?php echo e(old('first_name')); ?>" style=" border-style: solid;
                border-width: 2px;" required>
            </div>

            <div class="form-group inline-block mt-4 ml-4">
                <label for="last_name" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Last Name</label>
                <input type="text" style="height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400" name="last_name" id="last_name" class="form-control" value="<?php echo e(old('last_name')); ?>" required>
            </div>
            <div></div>
            <div class="form-group inline-block mt-4">
                <label for="email" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Email</label>
                <input type="email" style="height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>" required>
            </div>
            
            <div class="form-group inline-block mt-4">
                <label for="address" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Address</label>
                <input type="text" style="height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400" name="address" id="address" class="form-control" value="<?php echo e(old('address')); ?>" required>
            </div>
            <div></div>
            <div class="form-group inline-block mt-4">
                <label for="phone" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Phone Number</label>
                <input type="tel" style="height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400" name="phone_number" id="phone" class="form-control" value="<?php echo e(old('phone')); ?>" required>
            </div>
            
            <div class="form-group inline-block mt-4 ml-4">
                <label for="status" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Status</label>
                <select name="status" id="status" class="form-control drop-shadow-2xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-2 p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="color: #22215B; margin-top: 1rem;" required>
                    <option value="">Select status</option>
                    <option value="single" <?php echo e(old('status') === 'single' ? 'selected' : ''); ?>>Single</option>
                    <option value="married" <?php echo e(old('status') === 'married' ? 'selected' : ''); ?>>Married</option>
                    <option value="divorced" <?php echo e(old('status') === 'divorced' ? 'selected' : ''); ?>>Divorced</option>
                </select>
            </div>
            <div>
            <button type="submit" class="drop-shadow-2xl mt-8 text-xl text-white bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-full text-md px-10 py-2.5 sm:text-center " style="background-color:#22215B; height: 3.5rem; width: 50rem;">Add Tenant</button>
            <div>
        </form>
    </div>
</h1>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FRANCIS ALLEN\Dormitory-Management-System-master\resources\views/tenants/create.blade.php ENDPATH**/ ?>