<?php

namespace App\Http\Controllers;
use App\Models\LeaveContract;
use Illuminate\Http\Request;

class LeaveContractController extends Controller
{
    public function index()
{
    $contracts = LeaveContract::all();

    return view('leavecontracts.index', ['contracts' => $contracts]);
}
    public function create()
    {
        return view('leavecontracts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'date_vacancy' => 'required|date',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $fileName = $request->name . ' leave.' . $request->file('file')->getClientOriginalExtension();
        $filePath = $request->file('file')->storeAs('public/contracts', $fileName);

        $contract = new LeaveContract;
        $contract->name = $validatedData['name'];
        $contract->date_vacancy = $validatedData['date_vacancy'];
        $contract->file = $filePath;
        $contract->save();


        $message = "Successfully uploaded contract!\n\nName: " . $contract->name . "\nDate of Vacancy: " . $contract->date_vacancy;
        session()->flash('success', $message);

        return redirect()->route('landing.index');
    }
}
