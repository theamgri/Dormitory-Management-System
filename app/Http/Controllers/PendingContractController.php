<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;

class PendingContractController extends Controller
{
    public function index()
    {
        $pendingContracts = Contract::where('is_approved', false)->get();
        $approvedContracts = Contract::where('is_approved', true)->get();
        return view('pendingcontracts.index', compact('pendingContracts', 'approvedContracts'));

    }

    public function approve($id)
    {
        $contract = Contract::find($id);
        $contract->is_approved = true;
        $contract->save();

        return redirect()->back();
    }

    public function disapprove($id)
    {
        $contract = Contract::find($id);
        $filename = $contract->filename;
        $contract->delete();

        // Delete the file from storage
        \Storage::delete($filename);

        return redirect()->back();
    }
}
