<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'phone_number',
        'status',
        'room_id',
    ];

    public function ReservedRoom()
    {
        return $this->belongsTo(ReservedRoom::class);
    }



    

}
