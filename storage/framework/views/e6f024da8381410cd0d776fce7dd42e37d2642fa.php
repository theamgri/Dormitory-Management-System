<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('payments.store')); ?>">
    <?php echo csrf_field(); ?>

    <div>
        <label for="date">Date:</label>
        <input type="date" name="date" required>
    </div>

    <div>
        <label for="tenant_id">Tenant:</label>
        <select name="tenant_id" id="tenant_id" class="form-control">
            <option value="">-- Select Tenant --</option>
            <?php $__currentLoopData = $tenants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tenant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($tenant->id); ?>"><?php echo e($tenant->first_name); ?> <?php echo e($tenant->last_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div>
        <label for="electricity">Electricity:</label>
        <input type="number" name="electricity" step="0.01" required>
    </div>

    <div>
        <label for="water">Water:</label>
        <input type="number" name="water" step="0.01" required>
    </div>

    <div>
        <label for="rent">Rent:</label>
        <input type="number" name="rent" step="0.01" required>
    </div>

    <div>
        <label for="mode_of_payment">Mode of Payment:</label>
        <select name="mode_of_payment" required>
            <option value="Gcash">Gcash</option>
            <option value="Cash-Over the counter">Cash-Over the counter</option>
        </select>
    </div>

    <div>
        <label for="amount_paid">Amount Paid:</label>
        <input type="number" name="amount_paid" step="0.01" required>
    </div>

    <button type="submit">Add Payment</button>
</form>

<div class="mt-4 relative overflow-x-auto shadow-md sm:rounded-lg" style="background-color:#22215B;">
    <table id="table1" class="w-full text-sm text-left" style="background-color: #ADDDD0">
      
      <thead class="text-md text-center">
        
         
          <tr><th scope="col" class="px-6 py-3">
            Date
      </th>
        <th scope="col" class="px-6 py-3">
            Name of Tenant
        </th>
        <th scope="col" class="px-6 py-3">
          Payment Detail
        </th>
        <th scope="col" class="px-6 py-3">
          Mode of Payment
        </th>
        <th scope="col" class="px-6 py-3">
          Total Amount
        </th>
        <th scope="col" class="px-6 py-3">
          Amount Paid
        </th>
       
       </tr>
      </thead>
     
    
  
      <tbody style="background-color:#22215B; color:aliceblue;">
        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;"><?php echo e($payment->date); ?></td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;"><?php echo e($payment->tenant->first_name); ?> <?php echo e($payment->tenant->last_name); ?></td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">
                    Electricity: <?php echo e($payment->electricity); ?><br>
                    Water: <?php echo e($payment->water); ?><br>
                    Rent: <?php echo e($payment->rent); ?>

                </td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;"><?php echo e($payment->mode_of_payment); ?></td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;"><?php echo e($payment->total_amount); ?></td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;"><?php echo e($payment->amount_paid); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FRANCIS ALLEN\Dormitory-Management-System-master\resources\views/payments/index.blade.php ENDPATH**/ ?>