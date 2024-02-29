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
use App\Models\Tampilan;
use App\Models\News;
use Illuminate\Support\Facades\Http;

class LandingController extends Controller
{
    public function index(GenderPendudukChart $GenderPendudukChart, KelompokUmur $KelompokUmur, StatusPendudukChart $StatusPendudukChart)
    {

        $penduduk = Penduduk::all();
        $totalkeluarga = $penduduk->groupBy('no_kk')->count();
        $totalpenduduk = $penduduk->where('nama')->count();


        $GenderPendudukChart = $GenderPendudukChart->build();
        $KelompokUmur = $KelompokUmur->build();
        $StatusPendudukChart = $StatusPendudukChart->build();

        return view('welcome', compact('GenderPendudukChart', 'KelompokUmur', 'StatusPendudukChart', 'totalkeluarga', 'totalpenduduk'));
    }

    public function baru()
    {

        $tampilan = Tampilan::all();
        $penduduk = Penduduk::all();
        $news = News::all();

        $response = Http::post('https://dsw.depok.go.id/Html/get_harga_depok', [
            'kategori' => 'kategori_value',
            'selisih' => 'selisih_value',
        ]);

        $totalkeluarga = $penduduk->groupBy('no_kk')->count();
        $totalpenduduk = $penduduk->where('nama')->count();
        $totalkematian = $penduduk->where('status', 'Meninggal')->count();


        $data = $response->json();

        return view('welcome-3', compact('tampilan', 'data', 'totalkeluarga', 'totalpenduduk', 'totalkematian', 'news'));
    }
}
