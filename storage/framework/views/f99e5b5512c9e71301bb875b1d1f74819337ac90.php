<?php $__env->startSection('content'); ?>

    <div class="h-screen w-screen" style="background-color: #ADDDD0;">
    <div class="self-center text-center p-4">
    <h1 class="mb-4 text-4xl font-Montserrat font-base tracking-tight md:text-5xl" style="color: #7D7F88">Welcome,</h1>
    <h1 class="mb-4 text-4xl font-medium tracking-tight text-gray-900 md:text-5xl">Admin</h1>
</div>

<div class="items-center py-10 text-center mx-6 font-Montserrat">
  <div onclick="location.href='pendbilltenants.html'" class="inline-block md:w-32 lg:w-60 sm:mx-6 mt-3 max-w-sm rounded overflow-hidden shadow-lg" style="background-color: #ffffff";>
    <img style="padding: 2rem;" src="assets/wallet.png" alt="Pending Bills">
    <div class="px-6 py-4">
      
      <p class="font-semibold text-gray-900 text-base">
       Pending Bills
      </p>
    </div>
    
  </div>

  <a href="<?php echo e(route('payments.index')); ?>">
  <div onclick="location.href='paymentactivity.html'" class="inline-block md:w-32 lg:w-60 sm:mx-6 sm:mt-3 sm:max-w-sm rounded overflow-hidden shadow-lg" style="background-color: #ffffff";>
    <img style="padding: 2rem;" src="/assets/eye.png" alt="Payment Activity">
    <div class="px-6 py-4">
      
      <p class="font-semibold text-gray-900 text-base">
        Payment Activity
      </p>
    </div>
</a>
    
  </div>
  <a href="<?php echo e(route('service_requests.index')); ?>">
  <div onclick="location.href='servicerequest.html'" class="inline-block md:w-32 lg:w-60 sm:mx-6 sm:mt-2 sm:max-w-sm rounded overflow-hidden shadow-lg" style="background-color: #ffffff">
    <img style="padding: 2rem;" src="/assets/servicereq.png" alt="Pending Registration">
    <div class="px-6 py-4">
      <p class="font-semibold text-gray-900 text-base">
        Pending Service Request
      </p>
    </div>
  </div>
</a>


  <div onclick="location.href='pencontracts.html'" class="inline-block md:w-32 lg:w-60 sm:mx-6 sm:mt-3 sm:max-w-sm rounded overflow-hidden shadow-lg" style="background-color: #ffffff">
    <img style="padding: 2rem;" src="/assets/penreg.png" alt="Pending Contracts">
    <div class="px-6 py-4">
      <p class="font-semibold text-gray-900 text-base">
        Pending Contracts
      </p>
    </div>
  </div>

  
  </div>
  <a href="<?php echo e(route('rooms.index')); ?>">
<div class="items-center py-10 text-center mx-6 font-Montserrat">
  <div onclick="location.href='Rooms.html'" class="inline-block md:w-32 lg:w-60 sm:mx-6 sm:mt-3 sm:max-w-sm rounded overflow-hidden shadow-lg" style="background-color: #ffffff">
    <img style="padding: 2rem;" src="/assets/tenant.png" alt="Tenants">
    <div class="px-6 py-4">
      
      <p class="font-semibold text-gray-900 text-base">
       Tenants
      </p>
    </div>
  </div>
</a>

  <div onclick="location.href='reqleave.html'" class="inline-block md:w-32 lg:w-60 sm:mx-6 sm:mt-3 sm:max-w-sm rounded overflow-hidden shadow-lg" style="background-color: #ffffff">
    <img style="padding: 2rem;" src="/assets/leave.png" alt="Sunset in the mountains">
    <div class="px-6 py-4">
      
      <p class="font-semibold text-gray-900 text-base">
        Tenant Request to Leave
      </p>
    </div>
    
  </div>

  <div onclick="location.href='logstatus.html'" class="inline-block md:w-32 lg:w-60 sm:mx-6 sm:mt-3 sm:max-w-sm rounded overflow-hidden shadow-lg" style="background-color: #ffffff">
    <img style="padding: 2rem;" src="/assets/logstatus.png" alt="Pending Registration">
    <div class="px-6 py-4">
      <p class="font-semibold text-gray-900 text-base">
        Tenant Log Status
      </p>
    </div>
  </div>



  <div onclick="location.href='archive.html'" class="inline-block md:w-32 lg:w-60 sm:mx-6 sm:mt-3 sm:max-w-sm rounded overflow-hidden shadow-lg" style="background-color: #ffffff">
    <img style="padding: 2rem;" src="/assets/archive.png" alt="Pending Registration">
    <div class="px-6 py-4">
      <p class="font-semibold text-gray-900 text-base">
        Archive
      </p>
    </div>
  </div>


  
</div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FRANCIS ALLEN\Dormitory-Management-System-master\resources\views/home/index.blade.php ENDPATH**/ ?>