<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
{
    $contracts = Contract::all();

    return view('contracts.index', ['contracts' => $contracts]);
}
    public function create()
    {
        return view('contracts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'date_issued' => 'required|date',
            'date_expired' => 'required|date|after:issued_at',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $contract = new Contract;
        $contract->name = $validatedData['name'];
        $contract->date_issued = $validatedData['date_issued'];
        $contract-> date_expired = $validatedData['date_expired'];
        $contract->file = $validatedData['file'];
        $contract->save();

        return redirect()->route('contracts.index');
    }
}
