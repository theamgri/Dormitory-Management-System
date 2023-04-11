<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('payments.store')); ?>">
    <?php echo csrf_field(); ?>

    <div class="relative font-mono" style="margin: 4rem; margin-top: 6rem; margin-left: 4rem; ">
        <h3 style="margin-bottom: -1rem;">Date:</h3>
        <input type="date" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-900" placeholder="Select date" style="color: #22215B; margin-top: 2rem;" required>
    </div>
   
    
        <div class="font-mono" style="margin-left:3rem; padding: 1rem; margin-top: -3rem;">  
        <h3 class="font-Montserrat" for="tenant_id">Tenant:</h3>
        <select name="tenant_id" id="tenant_id" class="form-control drop-shadow-2xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-2 p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="color: #22215B; margin-top: 1rem;">
            <option  value="">-- Select Tenant --</option>
            <?php $__currentLoopData = $tenants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tenant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($tenant->id); ?>"><?php echo e($tenant->first_name); ?> <?php echo e($tenant->last_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="inline-block font-mono" style="margin-left:3rem; padding: 1rem; margin-top: -1rem;">
        <h3 for="mode_of_payment">Mode of Payment:</h3>
        <select name="mode_of_payment" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-2 p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="color: #22215B; margin-top: 1rem;" required>
            <option value="Gcash">Gcash</option>
            <option value="Cash-Over the counter">Cash-Over the counter</option>
        </select>
    </div>

    <div class="inline-block font-mono" style="margin-left:3rem; margin-top: 1rem; padding: 1rem;">
        <h3 style="padding-bottom: 0.5rem" for="electricity">Electricity:</h3>
        <input type="number" name="electricity" step="0.01" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-50 pl-2 p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="color: #22215B;" placeholder="" oninput="calculateTotalAmount()" required>
    </div>

    <div class="inline-block font-mono" style="margin-left:0.5rem; margin-top: 1rem;">
        <h3 style="padding-bottom: 0.5rem" for="water">Water:</label>
        <input type="number" name="water" step="0.01" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-50 pl-2 p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="color: #22215B;" placeholder="" oninput="calculateTotalAmount()" required>
    </div>

    <div class="inline-block font-mono" style="margin-left:0.5rem; margin-top: 1rem;">
        <h3 style="padding-bottom: 0.5rem" for="rent">Rent:</label>
        <input type="number" name="rent" step="0.01" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-50 pl-2 p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="color: #22215B;" placeholder="" oninput="calculateTotalAmount()" required>
    </div>



    <div class="block font-mono" style="margin-left:3rem; margin-top: 1rem; padding: 1rem;">
        <h3 style="padding-bottom: 0.5rem" for="amount_paid">Amount Paid:</h3>
        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
              ₱
            </span>
        <input type="number" name="amount_paid" step="0.01" class="drop-shadow-2xl bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-50 pl-2 p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="color: #22215B;" required>
    </div>
</div>
    <div class="absolute top-15 md:top-20 lg:top-25 left-0 right-0" style="margin-top: 0rem;">
    <button type="submit" class="border-2 border-slate-700 drop-shadow-2xl mt-6 text-xl text-white bg-primary-600 font-medium rounded-xl text-md px-10 py-2.5 sm:text-center" style="color:#ffffff; margin-top: 2rem; background-color:#22215B; min-height: 3.5rem; width: 100vw;">Add Payment</button>
    </div>
</form>

<script>
    function calculateTotalAmount() {
  // get the values from the input fields
  var electricity = parseFloat(document.getElementById("electricity").value) || 0;
  var water = parseFloat(document.getElementById("water").value) || 0;
  var rent = parseFloat(document.getElementById("rent").value) || 0;

  // calculate the total amount
  var totalAmount = electricity + water + rent;

  // format the total amount to two decimal places and add the currency symbol
  var formattedTotalAmount = "₱ " + totalAmount.toFixed(2);

  // update the "Total Amount" textfield with the calculated total amount
  document.getElementById("totalamount").value = formattedTotalAmount;
}
  </script>

<div class="mt-4 relative overflow-x-auto shadow-md sm:rounded-lg" style="background-color:#22215B; width: 100vw;">
    <table id="table1" class="w-full mx-auto text-sm text-center" style="background-color: #ADDDD0; width: 100vw;">
      
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