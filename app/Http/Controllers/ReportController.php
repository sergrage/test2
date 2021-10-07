<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EfficienciesReport;

class ReportController extends Controller
{
    protected $report;

    public function __construct(EfficienciesReport $report) {
        $this->report = $report;
    }

    public function index()
    {
    	$reports = $this->report->get();
    	return view('welcome', compact('reports'));
    }
}
