@extends('layouts.app')

@section('content')


   
        <form action="{{ route('service_requests.store') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name"><br>
            <label for="tenant_id">Requested By:</label>
            <select name="tenant_id" id="tenant_id" class="form-control">
                @foreach ($tenants as $tenant)
                    <option value="{{ $tenant->id }}" data-room-id="{{ $tenant->room_id }}">{{ $tenant->first_name }} {{ $tenant->last_name }}</option>
                @endforeach
            </select>
            <br>
            <label for="room_id">Room</label>
            <input type="text" name="room_id" id="room_id" class="form-control">
            <button type="submit">Create Service Request</button>
        </form>



        @foreach ($serviceRequests as $serviceRequest)




        @if ($serviceRequest->status == 'in_progress')


        <div class="grid h-full place-items-center">
            <div class="sm:w-3/4 rounded overflow-hidden shadow-lg" style="background-color: #ee1a1a4a;">
              <div class="px-6 py-4">
                  <div class="border-b-2 font-bold text-sm mb-4" style="border-color: #B0A6A6">Service Request #{{ $serviceRequest->id }}: 
                  <div class="inline-block font-bold text-xl mb-8">{{ $serviceRequest->name }}</div>
                  <div class="float-right border-l-2 pl-4 inline-block font-bold text-xl mb-2" style="border-color: #B0A6A6">Status: 
              <p1 class="block" style="color: #F6980A;">{{ ucfirst(str_replace('_', ' ', $serviceRequest->status)) }}</p1></div>
              </div>
              <form action="{{ route('service_requests.progress_reports.store', $serviceRequest->id) }}" method="POST">
              <p1 class="font-mono font-medium text-md"style="color: #817171">PROGRESS:</p1>
              @csrf
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
                    @foreach ($serviceRequest->progressReports as $progressReport)
                    <tr class="p-3.5"><th class="font-normal">{{ $progressReport->date }}</th>
                      <th class="font-normal" style="border-color: #B0A6A6">{{ $progressReport->description }}</th>
                    </tr>
                    @endforeach
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
                    <h5 class="block uppercase font-semibold mb-2.5 text-gray-800">{{ $serviceRequest->tenant->first_name }} {{ $serviceRequest->tenant->last_name }}</h5></div>
                  
                    <div class="content-center font-mono border-l-2 pl-8 pr-8 text-center inline-block" style="border-color: #B0A6A6">
                      
                      <tr class="inline-block list-none mb-0">
                        
                        <th>
                          <a href="#!" class="font-medium text-gray-800" style="color: #817171">Room #</a>
                        </th>
                        <th>
                          <a href="#!" class="font-medium text-gray-800">{{ $serviceRequest->room_id }}</a>
                        </th>
                        
                      </tr>
                        
                          
                          </div>
          
                          <div class="content-center font-mono border-l-2 pl-8 pr-8 text-center inline-block" style="border-color: #B0A6A6">
                      
                            <tr class="inline-block list-none mb-0">
                              
                              <th>
                                <a href="#!" class="font-medium text-gray-800" style="color: #817171">Date Issued:</a>
                              </th>
                              <th>
                                <a href="#!" class="font-medium text-gray-800">{{ $serviceRequest->date_issued }}</a>
                              </th>
                              
                            </tr>
                              
                                
                                </div>
                                <div class="content-center font-mono border-l-2 pl-8 pr-8 text-center inline-block" style="border-color: #B0A6A6">
                      
                                  <tr class="inline-block list-none mb-0">
                                    <th>
                                     
                                    </th>
                                    <th>
                                        <form action="{{ route('service_requests.update', $serviceRequest->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="font-mono inline-block float-right shadow-xl text-black bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg font-normal text-sm px-2 sm:text-center " style="background-color:#ADDDD0; height: 2.5rem; width: 10rem;">Complete Request</button>
                                        </form>
                                    </th> 
                                  </tr>
                                    
                                      
                                      </div>
                          
              </div>
                </div>
            @else
            <div class="grid h-full place-items-center">
            <div class="mt-5 sm:w-3/4 rounded overflow-hidden shadow-lg" style="background-color: #39e46925">
                <div class="px-6 py-4">
                    <div class="border-b-2 font-bold text-sm mb-4" style="border-color: #B0A6A6">Service Request #{{ $serviceRequest->id }}:
                    <div class="inline-block font-bold text-xl mb-8">{{ $serviceRequest->name }}</div>
                    <div class="float-right border-l-2 pl-4 inline-block font-bold text-xl mb-2" style="border-color: #B0A6A6">Status: 
                
                <p1 class="block" style="color: #0A3EF6;">{{ ucfirst(str_replace('_', ' ', $serviceRequest->status)) }}</p1></div>
                </div>
               
                </div>
                  <div class="font-mono px-6 pt-2 pb-2">
                    <p1 class="font-medium text-md"style="color: #817171">Progress Report:</p1>
                    <table class="sm:w-full pb-4">
                    <th class="font-medium border-r-2 border-b-2" style="color: #817171; border-color: #B0A6A6">Date</th>
                    <th class="font-medium border-b-2" style="color: #817171;border-color: #B0A6A6">Description</th>
                  </div>
                  <tbody class="pt-8" >
                    @foreach ($serviceRequest->progressReports as $progressReport)
                    <tr class="p-3.5"><th class="font-normal">{{ $progressReport->date }}</th>
                      <th class="font-normal" style="border-color: #B0A6A6">{{ $progressReport->description }}</th>
                    </tr>
                    @endforeach
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
                    <h5 class="block uppercase font-semibold mb-2.5 text-gray-800">{{ $serviceRequest->tenant->first_name }} {{ $serviceRequest->tenant->last_name }}</h5></div>
                  
                    <div class="content-center font-mono border-l-2 pl-8 pr-8 text-center inline-block" style="border-color: #B0A6A6">
                      
                      <tr class="inline-block list-none mb-0">
                        
                        <th>
                          <a href="#!" class="font-medium text-gray-800" style="color: #817171">Room #</a>
                        </th>
                        <th>
                          <a href="#!" class="font-medium text-gray-800">{{ $serviceRequest->room_id }}</a>
                        </th>
                        
                      </tr>
                        
                          
                          </div>
          
                          <div class="content-center font-mono border-l-2 pl-8 pr-8 text-center inline-block" style="border-color: #B0A6A6">
                      
                            <tr class="inline-block list-none mb-0">
                              
                              <th>
                                <a href="#!" class="font-medium text-gray-800" style="color: #817171">Date Issued:</a>
                              </th>
                              <th>
                                <a href="#!" class="font-medium text-gray-800">{{ $serviceRequest->date_issued }}</a>
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
            @endif
        @endforeach

    <script>
        const tenantSelect = document.querySelector('#tenant_id');
        const roomInput = document.querySelector('#room_id');
        tenantSelect.addEventListener('change', (event) => {
            const selectedOption = event.target.selectedOptions[0];
            const roomId = selectedOption.dataset.roomId;
            roomInput.value = roomId;
        });
    </script>
    
@endsection