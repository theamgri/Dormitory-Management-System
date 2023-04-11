<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendingBillsController;
use App\Http\Controllers\TenantReservationsController;
use App\Http\Controllers\ReservedroomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{room}/tenants/create', [TenantController::class, 'create'])->name('tenants.create');
Route::post('/rooms/{room}/tenants', [TenantController::class, 'store'])->name('tenants.store');
Route::get('/tenants/{tenant}/edit', [TenantController::class, 'edit'])->name('tenants.edit');
Route::put('/tenants/{tenant}', [TenantController::class, 'update'])->name('tenants.update');
Route::delete('/tenants/{tenant}', [TenantController::class, 'destroy'])->name('tenants.destroy');
Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
Route::get('/service_requests', [ServiceRequestController::class, 'index'])->name('service_requests.index');
Route::post('/service_requests', [ServiceRequestController::class, 'store'])->name('service_requests.store');
Route::put('/service_requests/{serviceRequest}', [ServiceRequestController::class, 'update'])->name('service_requests.update');
Route::post('/service_requests/{serviceRequest}/progress_reports', [ServiceRequestController::class, 'addProgressReport'])->name('service_requests.progress_reports.store');
Route::get('/contracts', [ContractController::class, 'index'])->name('contracts.index');
Route::get('/contracts/create', [ContractController::class, 'create'])->name('contracts.create');
Route::post('/contracts', [ContractController::class, 'store'])->name('contracts.store');


Route::get('/reservedroom', [ReservedRoomController::class, 'index'])->name('reservedroom.index');
Route::get('/reservedroom/{reservedroom}', [ReservedRoomController::class, 'show'])->name('reservedroom.show');
Route::get('/reservation/create/{reservedroom}', [TenantReservationsController::class, 'create'])->name('reservation.create');
Route::post('/reservation/store/{reservedroom}', [TenantReservationsController::class, 'store'])->name('reservation.store');
Route::get('/reservation/{reservation}/edit', [TenantReservationsController::class, 'edit'])->name('reservation.edit');
Route::put('/reservation/{reservation}', [TenantReservationsController::class, 'update'])->name('reservation.update');
Route::delete('/reservation/{reservation}', [TenantReservationsController::class, 'destroy'])->name('reservation.destroy');

Route::get('rooms/{room}/pending-bills/create', [PendingBillsController::class, 'create'])->name('pending-bills.create');
Route::post('rooms/{room}/pending-bills', [PendingBillsController::class, 'store'])->name('pending-bills.store');
Route::get('pending-bills/{pendingBill}/edit', [PendingBillsController::class, 'edit'])->name('pending-bills.edit');
Route::put('pending-bills/{pendingBill}', [PendingBillsController::class, 'update'])->name('pending-bills.update');
Route::delete('pending-bills/{pendingBill}', [PendingBillsController::class, 'destroy'])->name('pending-bills.destroy');
