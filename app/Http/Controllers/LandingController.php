<?php

namespace App\Http\Controllers;

use App\Charts\BarChart;
use App\Models\Penduduk;
use App\Charts\TestChart;
use App\Charts\KelompokUmur;
use Illuminate\Http\Request;
use App\Charts\ByCategoriesChart;
use App\Charts\GenderPendudukChart;
use App\Charts\StatusPendudukChart;

class LandingController extends Controller
{
    public function index(GenderPendudukChart $GenderPendudukChart, KelompokUmur $KelompokUmur, StatusPendudukChart $StatusPendudukChart)
    {

        $penduduk = Penduduk::all();
        $totalkeluarga = $penduduk->where('no_kk')->count();
        $totalpenduduk = $penduduk->where('nama')->count();


        $GenderPendudukChart = $GenderPendudukChart->build();
        $KelompokUmur = $KelompokUmur->build();
        $StatusPendudukChart = $StatusPendudukChart->build();

        return view('welcome', compact('GenderPendudukChart', 'KelompokUmur', 'StatusPendudukChart', 'totalkeluarga', 'totalpenduduk'));
    }
}
