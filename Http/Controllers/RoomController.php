<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Tenant;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('tenant')->get();
        return view('rooms.index', compact('rooms'));
    }
}
