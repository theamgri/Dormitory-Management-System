<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\HomeController;

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
Route::get('/reservations', [ReservationsController::class, 'index'])->name('reservations.index');
Route::post('/reservations', [ReservationsController::class, 'store'])->name('reservations.store');
Route::get('/reservations/{reservation}/edit', [ReservationsController::class, 'edit'])->name('reservations.edit');
Route::put('/reservations/{reservation}', [ReservationsController::class, 'update'])->name('reservations.update');
Route::delete('/reservations/{reservation}', [ReservationsController::class, 'destroy'])->name('reservations.destroy');

