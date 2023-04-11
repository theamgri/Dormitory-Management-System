<?php

namespace App\Http\Controllers;
use App\Models\reservedroom;
use Illuminate\Http\Request;

class Reserved extends Controller
{
    public function index()
{
    $reservedroom = reservedroom ::with('Reservations')->get();
    return view('reservedroom.index', compact('reservedroom'));
}
}

