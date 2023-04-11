<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservedRoom extends Model
{
    use HasFactory;

    public function ReservedRoom()
    {
        return $this->hasOne(Reservation::class);
     
    }
}

