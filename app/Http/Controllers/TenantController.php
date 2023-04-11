<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Swift_Attachment;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Tenant;


class TenantController extends Controller
{
    public function create(Room $room)
{
    return view('tenants.create', compact('room'))->with('id', $room->id);
}
// TenantController.php
public function store(Request $request, Room $room)
{
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'address' => 'required',
        'phone_number' => 'required',
        'status' => 'required'
    ]);

    $tenant = Tenant::create($request->all());
    $room->tenant()->save($tenant);
    $email = $request->input('email');
    $data = [
        'title' => 'Contract',
        'body' => 'Please find attached contract.pdf',
    ];
    

    $room = Room::findOrFail($request->get('room_id'));
    $room->is_occupied = true;
    $room->save();

    return redirect()->route('rooms.index', $room)->with('success', 'Tenant has been added to the room.');
}

    public function edit(Tenant $tenant)
    {
        return view('tenants.edit', compact('tenant'));
    }

    public function update(Request $request, Tenant $tenant)
    {
        $tenant->update($request->all());
        return redirect()->route('rooms.index');
    }

    public function destroy(Tenant $tenant)
    {
        $room_id = $tenant->room_id;

        $tenant->delete();

        $room = Room::findOrFail($room_id);
        $room->is_occupied = false;
        $room->save();
    
        return redirect()->route('rooms.index');
    }
}
