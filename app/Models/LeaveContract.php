<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Storage;

class LeaveContract extends Model
{
    protected $fillable = ['name', 'date_vacancy', 'file'];
    public function getFilePathAttribute($value)
    {
        return Storage::url($value);
    }

    public function setFilePathAttribute($value)
{
    $fileName = str_replace(' ', '_', strtolower($this->name)) . '.' . $value->getClientOriginalExtension();
    $path = $value->storeAs('public/contracts', $fileName, 'local');

    // Handle potential conflicts with existing files
    $i = 1;
    while (Storage::disk('local')->exists($path)) {
        $fileName = str_replace('.' . $value->getClientOriginalExtension(), '', $fileName) . '_' . $i . '.' . $value->getClientOriginalExtension();
        $path = $value->storeAs('public/contracts', $fileName, 'local');
        $i++;
    }

    $this->attributes['file'] = $path;
}

}
