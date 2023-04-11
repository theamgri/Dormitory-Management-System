<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use App\Models\Tenant;
use App\Models\ProgressReport;



class ServiceRequestController extends Controller
{
    public function index()
{
    $serviceRequests = ServiceRequest::with('tenant')->orderBy('created_at', 'desc')->get();
    $tenants = Tenant::all();

    return view('servicerequests.index', compact('serviceRequests', 'tenants'));
}

    public function store(Request $request)
    {
        $serviceRequest = new ServiceRequest;
        $serviceRequest->name = $request->name;
        $serviceRequest->status = 'in_progress';
        $serviceRequest->tenant_id = $request->tenant_id;
        $serviceRequest->room_id = $request->room_id;
        $serviceRequest->date_issued = now();
        $serviceRequest->save();

        return redirect()->route('service_requests.index');
    }

    public function update(ServiceRequest $serviceRequest)
    {
        $serviceRequest->status = 'completed';
        $serviceRequest->save();

        return redirect()->route('service_requests.index');
    }

    public function addProgressReport(Request $request, ServiceRequest $serviceRequest)
    {
        $progressReport = new ProgressReport;
        $progressReport->service_request_id = $serviceRequest->id;
        $progressReport->description = $request->description;
        $progressReport->date = now();
        $progressReport->save();

        return redirect()->route('service_requests.index');
    }
}