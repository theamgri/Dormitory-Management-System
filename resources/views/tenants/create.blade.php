@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Tenant to Room {{ $room->id }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tenants.store', $room) }}" method="POST">
            @csrf

            <div class="form-group">
                <input type="hidden" name="room_id" value="{{ $room->id }}">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}" style=" border-style: solid;
                border-width: 2px;" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" style=" border-style: solid;
                border-width: 2px;" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" style=" border-style: solid;
                border-width: 2px;" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" style=" border-style: solid;
                border-width: 2px;" name="address" id="address" class="form-control" value="{{ old('address') }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" style=" border-style: solid;
                border-width: 2px;" name="phone_number" id="phone" class="form-control" value="{{ old('phone') }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="">Select status</option>
                    <option value="single" {{ old('status') === 'single' ? 'selected' : '' }}>Single</option>
                    <option value="married" {{ old('status') === 'married' ? 'selected' : '' }}>Married</option>
                    <option value="divorced" {{ old('status') === 'divorced' ? 'selected' : '' }}>Divorced</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Tenant</button>
        </form>
    </div>
@endsection