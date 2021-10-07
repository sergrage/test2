<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\MeetingStatus;
use App\Models\SaleRoute;

class Export extends Model
{
    use HasFactory;


    protected $fillable = [
        'meeting_status_id',
        'flags',
        'sale_route_id',
        'cash',
        'discount',
        'total',
        'total_max',
    ];


    public function meetingStatus() {
        return $this->hasOne(MeetingStatus::class, 'id', 'meeting_status_id');
    }

    public function saleRoute() {
        return $this->hasOne(SaleRoute::class, 'id', 'sale_route_id');
    }

}
