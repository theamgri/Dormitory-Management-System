@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Reservation</h1>
    <hr>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reservation.update', $reservation) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" class="form-control" id="start_date" value="{{ old('start_date', $reservation->start_date) }}">
        </div>

        <div class="form-group">
            <label for="guest_name">Guest Name</label>
            <input type="text" name="guest_name" class="form-control" id="guest_name" value="{{ old('guest_name', $reservation->guest_name) }}">
        </div>@extends('layouts.app')

        @section('content')
        <div class="sm:ml-30">
            <div class="w-screen h-screen bg-scroll bg-cover bg-bottom" style="background-image: url(/assets/background.png);" >
               
              <h1 class="font-Montserrat text-center font-bold leading-tight text-4xl mt-0 mb-2" style=" color: #22215B; padding-top:2%;">Tenant Profile</h1>
        
           
              <form style="float:center" class="text-center" method="POST" action="{{ route('reservation.update', $reservation->id) }}">
            @csrf
            @method('PUT')
            <div class="inline-block mt-4">
                <label for="first_name" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">First Name</label>
                <input type="text" name="first_name" value="{{ $reservation->first_name }}" style="pointer-events: none; height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400">
            </div>
            <div class="inline-block mt-4 ml-4">
                <label for="last_name"  class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Last Name</label>
                <input type="text" name="last_name" value="{{ $reservation->last_name }}" style="pointer-events: none; height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400">
            </div>
            <div></div>
            <div class="inline-block mt-4">
                <label for="email" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Email</label>
                <input type="email" name="email" value="{{ $reservation->email }}" style="pointer-events: none; height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400">
            </div>
            
            <div class="inline-block mt-4 ml-4">
                <label for="address" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Address</label>
                <input type="text" name="address" value="{{ $reservation->address }}" style="pointer-events: none; height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400">
            </div>
            <div></div>
            <div class="inline-block mt-4">
                <label for="phone_number" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Phone Number</label>
                <input type="text" name="phone_number" value="{{ $reservation->phone_number }}" style="pointer-events: none; height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400">
            </div>
            <div class="inline-block mt-4 ml-4">
                <label for="status" class="text-l font-semibold font-Montserrat" style="margin-left: 0rem; color: #888888">Status</label>
                <input type="text" name="status" value="{{ $reservation->status }}" style="pointer-events: none; height: 3rem; width:20rem;" class="mt-4 drop-shadow-xl block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400">
            </div>
            <div class="block mt-8">
                <button type="submit" class="drop-shadow-2xl mt-6 text-xl text-white bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-full text-md px-10 py-2.5 sm:text-center " style="background-color:#22215B; height: 3.5rem; width: 50rem;">Update</button>
            </div>
        </form>
        
        <form method="POST" action="{{ route('reservedroom.destroy', $reservation->id) }}">
            @csrf
            @method('DELETE')
            <div class="block text-center">
                <button type="submit" class="drop-shadow-2xl mt-6 text-xl text-white bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-full text-md px-10 py-2.5 sm:text-center " style="background-color:#22215B; height: 3.5rem; width: 50rem;">Delete</button>
           
        </form>
        </div>
        </div>
        @endsection

        <div class="form-group">
            <label for="guest_email">Guest Email</label>
            <input type="email" name="guest_email" class="form-control" id="guest_email" value="{{ old('guest_email', $reservation->guest_email) }}">
        </div>

        <div class="form-group">
            <label for="guest_phone_number">Guest Phone Number</label>
            <input type="text" name="guest_phone_number" class="form-control" id="guest_phone_number" value="{{ old('guest_phone_number', $reservation->guest_phone_number) }}">
        </div