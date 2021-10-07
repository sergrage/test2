<?php

namespace App\Exports;

use App\Interfaces\Report;

use App\Models\Export;
use App\Models\Office;

class EfficienciesReport implements Report
{

    public $titles = ['Подразделение',
        'Максимально возможная продажа, руб',
        'Фактическая продажа, руб',
        'Эффективность продаж, %'];


	public function get() : array
	{
        $result[] = $this->titles;

        $exports = Export::salesEfficiency('2021', '08', [132]);
        $officesNames = Office::allNames()->toArray();

        foreach ($officesNames as $name) {
            $total = $exports->where('name', '=', $name)->pluck('total')->sum();
            $totalMax = $exports->where('name', '=', $name)->pluck('total_max')->sum();
            array_push($result, [$name, $totalMax, $total, round($total/$totalMax*100)]);
        }

        return $result;
	}

}
