<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Reservation;
use App\Models\Reservations;
use App\Http\Controllers\Controller; // add this line

class ReservationsController extends Controller
{
    public function index()
    {
        $rooms = ReservationTenant::with('tenant')->get();
        return view('reservation.index', compact('rooms'));
    }

    public function create(ReservationTenant $room)
    {
        return view('reservations.create', compact('room'));
    }

    public function store(Request $request, ReservationTenant $room)
    {
        $request->validate([
            'tenant_name' => 'required',
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'email' => 'required|email|unique:reservation_tenants,email',
            'address' => 'required',
            'phone_number' => 'required',
            'status' => 'required',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $reservation = new Reservationtenant;
        $reservation->room_id = $request->room_id;
        $reservation->start_date = $request->start_date;
        $reservation->end_date = $request->end_date;
        $reservation->save();

        $tenant = new ReservationTenant;
        $tenant->tenant_name = $request->tenant_name;
        $tenant->fathers_name = $request->fathers_name;
        $tenant->mothers_name = $request->mothers_name;
        $tenant->email = $request->email;
        $tenant->address = $request->address;
        $tenant->phone_number = $request->phone_number;
        $tenant->status = $request->status;
        $tenant->start_date = $request->start_date;
        $tenant->end_date = $request->end_date;
        $tenant->save();

        $room->reservations()->save($reservation);
        $reservation->tenant()->save($tenant);

        $room->is_occupied = true;
        $room->save();

        return redirect()->route('reservations.index')->with('success', 'Tenant has been added to the room.');
    }

    public function edit(Reservationtenant $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservationtenant $reservation)
    {
        $reservation->room_id = $request->room_id;
        $reservation->start_date = $request->start_date;
        $reservation->end_date = $request->end_date;
        $reservation->save();
        return redirect()->route('reservations.index')->with('success', 'Reservation has been updated successfully.');
    }

    public function destroy(Reservationtenant $reservation)
    {
        $room_id = $reservation->room_id;

        $reservation->delete();

        $room = ReservationTenant::findOrFail($room_id);
        $room->is_occupied = false;
        $room->save();

        return redirect()->route('reservations.index')->with('success', 'Reservation has been deleted successfully.');
    }
}