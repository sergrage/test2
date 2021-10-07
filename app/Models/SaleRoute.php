<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\MeetingStatus;
use App\Models\User;
use App\Models\Office;

class SaleRoute extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_id',
        'seller_user_id',
        'office_id',
        'closed_at',
    ];

    protected $dates = ['closed_at'];

    
    public function status() {
        return $this->hasOne(MeetingStatus::class, 'id', 'status_id');
    }

    public function user() {
        return $this->hasOne(User::class, 'id', 'seller_user_id');
    }

    public function office() {
        return $this->hasOne(Office::class, 'id', 'office_id');
    }
}
