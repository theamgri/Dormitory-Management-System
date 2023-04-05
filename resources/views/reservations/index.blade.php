@extends('layouts.app')

@section('content')

@foreach($reservations as $reservation)
    <div>
        @if($reservation->room->is_occupied)
            <a href="{{ route('reservation.edit', $reservation->id) }}">
                <div class="pl-3 text-xl font-bold shadow-lg" style="height: 100%; background-color: #e4393944; border-radius: 1rem; margin-bottom: 1rem;">
                    <button>Room {{ $reservation->room->room_number }}
                        <p style="float:inline-end; margin-top:3rem; margin-right: 3rem; vertical-align: baseline; color:#DC1111">Occupied</p>
                        <div class="block">
                            <div class="inline-block font-normal font-mono content-baseline ml-4">
                                <div class="inline-block">
                                    <div class="block">
                                        <p class="inline-block">reserved to:</p>
                                        <p class="inline-block float-right font-bold ml-4">{{ $reservation->room->tenant->first_name }} {{ $reservation->room->tenant->last_name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </a>
        @else
            <div class="pl-3 text-xl font-bold shadow-lg" style="height: 10rem; background-color:#39e4692f; border-radius: 1rem; margin-bottom: 1rem;">
                Room {{ $reservation->room->id }}
                <p style="float:inline-end; margin-right: 3rem;">Available</p>
                <a href="{{ route('tenants.create', $reservation) }}" class="btn btn-primary">
                    <button type="button" class="text-white font-Montserrat font-medium font-xl rounded" style="float:right; margin-right: -5%; margin-top:2.5rem; background-color:#22215B; height:2rem; width: 7rem;">
                        Add Reservation
                    </button>
                </a>
            </div>
        @endif
    </div>
@endforeach

@endsection