<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservedRoom;
use App\Models\Reservation;

class ReservedRoomController extends Controller

{
    public function index()
    {
        $ReservedRoom = ReservedRoom::with('Reservation')->get();
        return view('Reservedroom.index', compact('ReservationRoom'));
        
    }
}
