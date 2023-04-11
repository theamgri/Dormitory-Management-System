<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingBill extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'amount',
        'due_date',
        'room_id',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
