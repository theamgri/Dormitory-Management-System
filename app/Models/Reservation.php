<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'guest_name',
        'guest_email',
        'guest_phone_number',
        'room_id'
    ];

    public function reservedroom()
    {
        return $this->belongsTo(Reservedroom::class);
    }
}