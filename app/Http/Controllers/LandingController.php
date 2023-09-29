<?php

namespace App\Http\Controllers;

use App\Charts\BarChart;
use App\Charts\TestChart;
use Illuminate\Http\Request;
use App\Charts\ByCategoriesChart;

class LandingController extends Controller
{
    public function index(TestChart $TestChart, BarChart $BarChart)
    {

        return view('welcome', ['TestChart' => $TestChart->build(), 'BarChart' => $BarChart->build()]);
    }
}
