<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservedroom;
use App\Models\Reservation;


class Tenantreservedrooms extends Controller
{
    
    public function create(reservedroom $reservedroom)
        {
            return view('reservations.create', compact('reservedroom'))->with('id', $reservedroom->id);
        }
        
    public function store(Request $request, reservedroom $reservedroom)
    {
        $request->validate([
            'start_date' => 'required|date',
            'guest_name' => 'required',
            'guest_email' => 'required|email|unique:reservations,guest_email',
            'guest_phone_number' => 'required',
        ]);


        $reservation = Reservation::create($request->all());
    $reservedroom->tenant()->save($reservation);
        
        $reservedroom = reservedroom::findOrFail($request->get('room_id'));
        $reservedroom->is_reserved = true;
        $reservedroom->save();

        return redirect()->route('reservations.create')->with('success', 'reservation has been added for the room.');
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $reservation->update($request->all());
        return redirect()->route('reservedroom.index');
    }

    public function destroy(Reservation $reservation)
    {
        $room_id = $reservation->room_id;
        $reservation->delete();

        $reservedroom = reservedroom::findOrFail($room_id);
        $reservedroom->is_reserved = false;
        $reservedroom->save();

        return redirect()->route('reservedroom.index');
    }
}
