<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tenant_id',
        'room_id',
        'date_issued',
        'status',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function progressReports()
    {
        return $this->hasMany(ProgressReport::class);
    }
}