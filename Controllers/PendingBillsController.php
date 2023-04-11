<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\PendingBill;


class PendingBillsController extends Controller
{
    public function create(Room $room)
    {
        return view('pending-bills.create', compact('room'))->with('id', $room->id);
    }

    public function store(Request $request, Room $room)
    {
        $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
        ]);

        $pendingBill = PendingBill::create([
            'description' => $request->get('description'),
            'amount' => $request->get('amount'),
            'due_date' => $request->get('due_date'),
            'room_id' => $room->id,
        ]);

        $room->has_pending_bills = true;
        $room->save();

        return redirect()->route('rooms.index')->with('success', 'Pending bill has been added for the room.');
    }

    public function edit(PendingBill $pendingBill)
    {
        return view('pending-bills.edit', compact('pendingBill'));
    }

    public function update(Request $request, PendingBill $pendingBill)
    {
        $pendingBill->update($request->all());
        return redirect()->route('rooms.index');
    }

    public function destroy(PendingBill $pendingBill)
    {
        $room_id = $pendingBill->room_id;

        $pendingBill->delete();

        $room = Room::findOrFail($room_id);
        $room->has_pending_bills = false;
        $room->save();

        return redirect()->route('rooms.index');
    }
}
