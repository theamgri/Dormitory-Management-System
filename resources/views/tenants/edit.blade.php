@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('tenants.update', $tenant->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="{{ $tenant->first_name }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="{{ $tenant->last_name }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $tenant->email }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" value="{{ $tenant->address }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" value="{{ $tenant->phone_number }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <label for="status">Status</label>
        <input type="text" name="status" value="{{ $tenant->status }}" style=" border-style: solid;
        border-width: 2px;">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>

<form method="POST" action="{{ route('tenants.destroy', $tenant->id) }}">
    @csrf
    @method('DELETE')
    <div>
        <button type="submit">Delete</button>
   
</form>

@endsection