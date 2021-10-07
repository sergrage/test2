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

    public function scopeSalesEfficiency($query, $year, $month, $flags)
    {
        return $query->join('sale_routes', 'exports.sale_route_id', '=', 'sale_routes.id')
    		->join('offices', 'sale_routes.office_id', '=', 'offices.id')
    		->join('meeting_statuses', 'exports.meeting_status_id', '=', 'meeting_statuses.id')
            ->whereNotIn('flags', $flags)
            ->where('sign', '=', 'sale')
            ->whereYear('closed_at', '=', $year)
            ->whereMonth('closed_at', '=', $month)
            ->select('offices.name', 'exports.total_max', 'exports.total')
            ->get();
    }

}
