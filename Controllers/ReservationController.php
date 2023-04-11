<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\ReservedRoom;


class TenantController extends Controller

{
    public function create(ReservedRoom $ReservedRoom)
    {
        return view('Reservations.create', compact('ReservedRoom'))->with('id', $ReservedRoom->id);
    }

   // ReservationController.php
public function store(Request $request, ReservedRoom $ReservedRoom)
{
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:ReservationGuest,email',
        'address' => 'required',
        'phone_number' => 'required',
        'status' => 'required'
    ]);

    $Reservation = Reservation::create($request->all());
    $ReservedRoom->Reservation()->save($Reservation);

    $ReservedRoom = ReservedRoom::findOrFail($request->get('ReservationRoom_id'));
    $ReservedRoom->is_occupied = true;
    $ReservedRoom->save();

    return redirect()->route('ReservedRooms.index', $ReservedRoom)->with('success', 'Reservation has been added to the room.');
}

    public function edit(Reservation $Reservation)
    {
        return view('Reservations.edit', compact('Reservation'));
    }

    public function update(Request $request, Reservation $Reservation)
    {
        $Reservation->update($request->all());
        return redirect()->route('ReservedRooms.index');
    }

    public function destroy(Reservation $Reservation)
    {
        $ReservedRoom_id = $Reservation->ReservedRoom_id;

        $Reservation->delete();

        $ReservedRoom = ReservedRoom::findOrFail($ReservedRoom_id);
        $ReservedRoom->is_occupied = false;
        $ReservedRoom->save();
    
        return redirect()->route('Reservedroom.index');
    }
    public function index()
    {
        $ReservedRoom = ReservedRoom::with('Reservations')->get();
        return view('reservedroom.index', compact('ReservedRooms'));
    }
 

   
}
