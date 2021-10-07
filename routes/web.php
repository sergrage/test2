<?php

use Illuminate\Support\Facades\Route;

use App\Models\Export;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\ReportController::class, 'index'])->name('home');


//Route::get('/', function () {
	// $expStatusSing = Export::find(1)->meetingStatus->sign;
	// $expSaleRouteStatusSing = Export::find(1)->saleRoute->status->sign;
	// $expOfficeName = Export::find(1)->saleRoute->office->name;
	// $expUserLastName = Export::find(1)->saleRoute->user->lastname;
    // $exp = DB::table('exports')
    //         ->join('sale_routes', 'exports.sale_route_id', '=', 'sale_routes.id')
    //         ->get();

//    $result = [
//    	['Подразделение', 'Максимально возможная продажа, руб', 'Фактическая продажа, руб', 'Эффективность продаж, %'],
//    ];
//
//    dd(Export::salesEfficiency()->toArray());

//    $exp = DB::table('exports')
//    		->join('sale_routes', 'exports.sale_route_id', '=', 'sale_routes.id')
//    		->join('offices', 'sale_routes.office_id', '=', 'offices.id')
//    		->join('meeting_statuses', 'exports.meeting_status_id', '=', 'meeting_statuses.id')
//    		->where('flags', '=', 0)
//    		->where('sign', '=', 'sale')
//			->whereYear('closed_at', '=', '2021')
//            ->whereMonth('closed_at', '=', '08')
//            ->select('offices.name', 'exports.total_max', 'exports.total')
//    		->get()->toArray();
//
//    foreach($exp as $e) {
//    	array_push($result, [$e->name, $e->total_max, $e->total, $e->total_max/$e->total_max*100]);
//    }
//
////    return $result;
//});

