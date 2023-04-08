<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationTenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_name',
        'fathers_name',
        'mothers_name',
        'email',
        'address',
        'phone_number',
        'status',
        'start_date',
        'end_date'
    ];

    public function room()
    {
        return $this->belongsTo(reservation::class);
    }
}