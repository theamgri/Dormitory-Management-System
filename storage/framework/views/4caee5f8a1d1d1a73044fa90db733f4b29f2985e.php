<?php $__env->startSection('content'); ?>


   
        <form action="<?php echo e(route('service_requests.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="name">Name:</label>
            <input type="text" name="name"><br>
            <label for="tenant_id">Requested By:</label>
            <select name="tenant_id" id="tenant_id" class="form-control">
                <?php $__currentLoopData = $tenants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tenant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tenant->id); ?>" data-room-id="<?php echo e($tenant->room_id); ?>"><?php echo e($tenant->first_name); ?> <?php echo e($tenant->last_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <br>
            <label for="room_id">Room</label>
            <input type="text" name="room_id" id="room_id" class="form-control">
            <button type="submit">Create Service Request</button>
        </form>



        <?php $__currentLoopData = $serviceRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceRequest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>




        <?php if($serviceRequest->status == 'in_progress'): ?>


        <div class="grid h-full place-items-center">
            <div class="sm:w-3/4 rounded overflow-hidden shadow-lg" style="background-color: #ee1a1a4a;">
              <div class="px-6 py-4">
                  <div class="border-b-2 font-bold text-sm mb-4" style="border-color: #B0A6A6">Service Request #<?php echo e($serviceRequest->id); ?>: 
                  <div class="inline-block font-bold text-xl mb-8"><?php echo e($serviceRequest->name); ?></div>
                  <div class="float-right border-l-2 pl-4 inline-block font-bold text-xl mb-2" style="border-color: #B0A6A6">Status: 
              <p1 class="block" style="color: #F6980A;"><?php echo e(ucfirst(str_replace('_', ' ', $serviceRequest->status))); ?></p1></div>
              </div>
              <form action="<?php echo e(route('service_requests.progress_reports.store', $serviceRequest->id)); ?>" method="POST">
              <p1 class="font-mono font-medium text-md"style="color: #817171">PROGRESS:</p1>
              <?php echo csrf_field(); ?>
              <input type="text" name="description" style="height: 3rem; width:20rem;" placeholder="Type Description of Service Request" class="block border-2  font-mono mt-1 ml-4 mb-4 p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl dark:bg-gray-100 dark:placeholder-gray-400">
                <button type="submit" class="font-mono inline-block float-right shadow-xl text-black bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg font-normal text-sm px-2 sm:text-center " style="background-color:#ADDDD0; height: 2.5rem; width: 10rem;">Update Progress</button>
            </form>
              </div>
                <div class="font-mono px-6 pt-2 pb-2">
                  <p1 class="font-medium text-md"style="color: #817171">Progress Report:</p1>
                  <table class="sm:w-full pb-4">
                  <th class="font-medium border-r-2 border-b-2" style="color: #817171; border-color: #B0A6A6">Date</th>
                  <th class="font-medium border-b-2" style="color: #817171;border-color: #B0A6A6">Description</th>
                </div>
                  <tbody class="pt-8" >
                    <?php $__currentLoopData = $serviceRequest->progressReports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $progressReport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="p-3.5"><th class="font-normal"><?php echo e($progressReport->date); ?></th>
                      <th class="font-normal" style="border-color: #B0A6A6"><?php echo e($progressReport->description); ?></th>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  
                  </table>
                  
          
                  
                  <div class="content-center text-center inline-block ">
                  
                    <ul class="inline-block list-none ">
                      <li>
                        <img class="inline-block mt-2 "src="/assets/fade.jfif" style="border-radius: 10rem; height: 5rem; width: 5rem;">
                      </li>
                    </ul>
                    
                  </div>
                  <div class="content-center font-mono pl-4 pr-4 pt-0 inline-block"><h5 class="block uppercase font-medium text-gray-500" style="color: #817171">Requested By:</h5>
                    <h5 class="block uppercase font-semibold mb-2.5 text-gray-800"><?php echo e($serviceRequest->tenant->first_name); ?> <?php echo e($serviceRequest->tenant->last_name); ?></h5></div>
                  
                    <div class="content-center font-mono border-l-2 pl-8 pr-8 text-center inline-block" style="border-color: #B0A6A6">
                      
                      <tr class="inline-block list-none mb-0">
                        
                        <th>
                          <a href="#!" class="font-medium text-gray-800" style="color: #817171">Room #</a>
                        </th>
                        <th>
                          <a href="#!" class="font-medium text-gray-800"><?php echo e($serviceRequest->room_id); ?></a>
                        </th>
                        
                      </tr>
                        
                          
                          </div>
          
                          <div class="content-center font-mono border-l-2 pl-8 pr-8 text-center inline-block" style="border-color: #B0A6A6">
                      
                            <tr class="inline-block list-none mb-0">
                              
                              <th>
                                <a href="#!" class="font-medium text-gray-800" style="color: #817171">Date Issued:</a>
                              </th>
                              <th>
                                <a href="#!" class="font-medium text-gray-800"><?php echo e($serviceRequest->date_issued); ?></a>
                              </th>
                              
                            </tr>
                              
                                
                                </div>
                                <div class="content-center font-mono border-l-2 pl-8 pr-8 text-center inline-block" style="border-color: #B0A6A6">
                      
                                  <tr class="inline-block list-none mb-0">
                                    <th>
                                     
                                    </th>
                                    <th>
                                        <form action="<?php echo e(route('service_requests.update', $serviceRequest->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <button type="submit" class="font-mono inline-block float-right shadow-xl text-black bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg font-normal text-sm px-2 sm:text-center " style="background-color:#ADDDD0; height: 2.5rem; width: 10rem;">Complete Request</button>
                                        </form>
                                    </th> 
                                  </tr>
                                    
                                      
                                      </div>
                          
              </div>
                </div>
            <?php else: ?>
            <div class="grid h-full place-items-center">
            <div class="mt-5 sm:w-3/4 rounded overflow-hidden shadow-lg" style="background-color: #39e46925">
                <div class="px-6 py-4">
                    <div class="border-b-2 font-bold text-sm mb-4" style="border-color: #B0A6A6">Service Request #<?php echo e($serviceRequest->id); ?>:
                    <div class="inline-block font-bold text-xl mb-8"><?php echo e($serviceRequest->name); ?></div>
                    <div class="float-right border-l-2 pl-4 inline-block font-bold text-xl mb-2" style="border-color: #B0A6A6">Status: 
                
                <p1 class="block" style="color: #0A3EF6;"><?php echo e(ucfirst(str_replace('_', ' ', $serviceRequest->status))); ?></p1></div>
                </div>
               
                </div>
                  <div class="font-mono px-6 pt-2 pb-2">
                    <p1 class="font-medium text-md"style="color: #817171">Progress Report:</p1>
                    <table class="sm:w-full pb-4">
                    <th class="font-medium border-r-2 border-b-2" style="color: #817171; border-color: #B0A6A6">Date</th>
                    <th class="font-medium border-b-2" style="color: #817171;border-color: #B0A6A6">Description</th>
                  </div>
                  <tbody class="pt-8" >
                    <?php $__currentLoopData = $serviceRequest->progressReports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $progressReport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="p-3.5"><th class="font-normal"><?php echo e($progressReport->date); ?></th>
                      <th class="font-normal" style="border-color: #B0A6A6"><?php echo e($progressReport->description); ?></th>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  
                  </table>
                  
          
                  
                  <div class="content-center text-center inline-block ">
                  
                    <ul class="inline-block list-none ">
                      <li>
                        <img class="inline-block mt-2 "src="/assets/fade.jfif" style="border-radius: 10rem; height: 5rem; width: 5rem;">
                      </li>
                    </ul>
                    
                  </div>
                  <div class="content-center font-mono pl-4 pr-4 pt-0 inline-block"><h5 class="block uppercase font-medium text-gray-500" style="color: #817171">Requested By:</h5>
                    <h5 class="block uppercase font-semibold mb-2.5 text-gray-800"><?php echo e($serviceRequest->tenant->first_name); ?> <?php echo e($serviceRequest->tenant->last_name); ?></h5></div>
                  
                    <div class="content-center font-mono border-l-2 pl-8 pr-8 text-center inline-block" style="border-color: #B0A6A6">
                      
                      <tr class="inline-block list-none mb-0">
                        
                        <th>
                          <a href="#!" class="font-medium text-gray-800" style="color: #817171">Room #</a>
                        </th>
                        <th>
                          <a href="#!" class="font-medium text-gray-800"><?php echo e($serviceRequest->room_id); ?></a>
                        </th>
                        
                      </tr>
                        
                          
                          </div>
          
                          <div class="content-center font-mono border-l-2 pl-8 pr-8 text-center inline-block" style="border-color: #B0A6A6">
                      
                            <tr class="inline-block list-none mb-0">
                              
                              <th>
                                <a href="#!" class="font-medium text-gray-800" style="color: #817171">Date Issued:</a>
                              </th>
                              <th>
                                <a href="#!" class="font-medium text-gray-800"><?php echo e($serviceRequest->date_issued); ?></a>
                              </th>
                              
                            </tr>
                              
                                
                                </div>
                                <div class="content-center font-mono border-l-2 pl-8 pr-8 text-center inline-block" style="border-color: #B0A6A6">
                      
                                  <tr class="inline-block list-none mb-0">
                                    <th>
                                     
                                    </th> 
                                  </tr>
                                    
                                    </div>
                        
            
              </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <script>
        const tenantSelect = document.querySelector('#tenant_id');
        const roomInput = document.querySelector('#room_id');
        tenantSelect.addEventListener('change', (event) => {
            const selectedOption = event.target.selectedOptions[0];
            const roomId = selectedOption.dataset.roomId;
            roomInput.value = roomId;
        });
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FRANCIS ALLEN\Dormitory-Management-System-master\resources\views/servicerequests/index.blade.php ENDPATH**/ ?>