<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'timezone_utc_offset',
    ];

    public function scopeAllNames($query)
    {
        return $query->pluck('name');
    }
}
