<?php

namespace App\Http\Controllers;

use App\Charts\TestChart;
use Illuminate\Http\Request;
use App\Charts\ByCategoriesChart;

class LandingController extends Controller
{
    public function index(TestChart $TestChart)
    {

        return view('welcome', ['TestChart' => $TestChart->build()]);
    }
}
