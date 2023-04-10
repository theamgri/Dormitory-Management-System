@extends('layouts.app')

@section('content')
<h1>Pending Contracts</h1>
<div class="mt-4 relative overflow-x-auto shadow-md sm:rounded-lg" style="background-color:#22215B;">
    
    <table id="table1" class="w-full text-sm text-left" style="background-color: #ADDDD0">
      
      <thead class="text-md text-center">
        
         
          <tr><th scope="col" class="px-6 py-3">
            File Name
      </th>
        <th scope="col" class="px-6 py-3">
            Date Issued
        </th>
        <th scope="col" class="px-6 py-3">
          Date Expired
        </th>
        <th scope="col" class="px-6 py-3">
          Action
        </th>
       </tr>
      </thead>
    
      <tbody style="background-color:#22215B; color:aliceblue;">
        @foreach ($pendingContracts as $contract)
            <tr>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;"><a href="{{ url('storage/contracts/' . $contract->file) }}" target="_blank">{{ $contract->name }}.pdf</a></td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">{{ $contract->date_issued }}</td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">{{ $contract->date_expired }}</td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">
                <form action="{{ route('pendingcontracts.approve', $contract->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Approve</button>
                </form>
                <form action="{{ route('pendingcontracts.disapprove', $contract->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Disapprove</button>
                </form></td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
</div>
Approved Contracts
<div class="mt-4 relative overflow-x-auto shadow-md sm:rounded-lg" style="background-color:#22215B;">
<table id="table1" class="w-full text-sm text-left" style="background-color: #ADDDD0">
      
    <thead class="text-md text-center">
      
       
        <tr><th scope="col" class="px-6 py-3">
          File Name
    </th>
      <th scope="col" class="px-6 py-3">
          Date Issued
      </th>
      <th scope="col" class="px-6 py-3">
        Date Expired
      </th>
      <th scope="col" class="px-6 py-3">
        Status
      </th>
     </tr>
    </thead>
  
    <tbody style="background-color:#22215B; color:aliceblue;">
      @foreach ($approvedContracts as $contract)
          <tr>
              <td style="font-size: 1rem;
              font-family: Lucida Console, Courier New, monospace;
              text-align: center;"><a href="{{ asset('storage/contracts/' . $contract->file) }}" target="_blank">{{ $contract->name }}.pdf</a></td>
              <td style="font-size: 1rem;
              font-family: Lucida Console, Courier New, monospace;
              text-align: center;">{{ $contract->date_issued }}</td>
              <td style="font-size: 1rem;
              font-family: Lucida Console, Courier New, monospace;
              text-align: center;">{{ $contract->date_expired }}</td>
              <td style="font-size: 1rem;
              font-family: Lucida Console, Courier New, monospace;
              text-align: center;">Approved</td>
          </tr>
      @endforeach
  </tbody>
</table>
    </div>
@endsection