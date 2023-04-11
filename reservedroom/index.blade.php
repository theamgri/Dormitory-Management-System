@extends('layouts.app')

@section('content')

@foreach($ReservedRoom as $ReservedRooms)
    <div>
        @if($room->is_occupied)
        <a href="{{ route('reservations.edit', $ReservedRoom->reservation->id) }}"><div class="pl-3 text-xl font-bold shadow-lg" style="height: 100%; background-color: #e4393944; border-radius: 1rem; margin-bottom: 1rem;"><button>Room {{ $ReservedRoom->room_number }}
            <p style="float:inline-end; margin-top:3rem; margin-right: 3rem; vertical-align: baseline; color:#dc1111">Reserved</p>
           <div class="block">
          <div class="inline-block font-normal font-mono content-baseline ml-4">
              
              <div class="inline-block">
                <div class="block">
                  <p class="inline-block">Occupant:</p>
                  <p class="inline-block float-right font-bold ml-4">{{ $ReservedRoom->reservation->first_name }} {{ $ReservedRoom->reservation->last_name }}</p>
                </div>
                
                
          </div>
          </div>
        </div>
    </button></div></a>

        @else

        <div class="pl-3 text-xl font-bold shadow-lg" style="height: 10rem; background-color:#39e4692f; border-radius: 1rem; margin-bottom: 1rem;">Room {{ $room->id }}
            <p style="float:inline-end; margin-right: 3rem;">Available</p>
            <a href="{{ route('reservations.create', ['reservedroom' => $ReservedRoom->id]) }}" class="btn btn-primary"><button type="button" class="text-white font-Montserrat font-medium font-xl rounded" style="float:right; margin-right: -5%; margin-top:2.5rem; background-color:#22215B; height:2rem; width: 7rem;">
              Add Reservation
          </button></a>
          </div>
        @endif
    </div>
@endforeach

@endsection