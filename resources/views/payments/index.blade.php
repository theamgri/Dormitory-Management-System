@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('payments.store') }}">
    @csrf

    <div>
        <label for="date">Date:</label>
        <input type="date" name="date" required>
    </div>

    <div>
        <label for="tenant_id">Tenant:</label>
        <select name="tenant_id" id="tenant_id" class="form-control">
            <option value="">-- Select Tenant --</option>
            @foreach($tenants as $tenant)
                <option value="{{ $tenant->id }}">{{ $tenant->first_name}} {{ $tenant->last_name}}</option>
            @endforeach
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
        @foreach ($payments as $payment)
            <tr>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">{{ $payment->date }}</td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">{{ $payment->tenant->first_name }} {{ $payment->tenant->last_name }}</td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">
                    Electricity: {{ $payment->electricity }}<br>
                    Water: {{ $payment->water }}<br>
                    Rent: {{ $payment->rent }}
                </td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">{{ $payment->mode_of_payment }}</td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">{{ $payment->total_amount }}</td>
                <td style="font-size: 1rem;
                font-family: Lucida Console, Courier New, monospace;
                text-align: center;">{{ $payment->amount_paid }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection