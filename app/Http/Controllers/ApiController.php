<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChartHelpers\BuildsCharts;

class ApiController extends Controller
{
    public function userChartData(Request $request, BuildsCharts $chart)
    {
        return $chart->buildChart($request, ['users', 'widgets', 'gadgets']);
    }
}
