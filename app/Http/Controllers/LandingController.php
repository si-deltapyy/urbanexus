<?php

namespace App\Http\Controllers;

use App\Charts\BarChart;
use App\Models\Penduduk;
use App\Models\Agenda;
use App\Models\News;
use App\Charts\TestChart;
use App\Charts\KelompokUmur;
use Illuminate\Http\Request;
use App\Charts\ByCategoriesChart;
use App\Charts\GenderPendudukChart;
use App\Charts\StatusPendudukChart;
use App\Models\Tampilan;
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
        $agenda = Agenda::all();
        $news = News::all();


        $responseCuaca = Http::get('https://www.depok.go.id/api/cuacaBMKG');
        $responseKomoditas = Http::get('https://www.depok.go.id/api/harga-komoditas');

        $angkaPenduduk = [
            'keluarga' => $penduduk->groupBy('no_kk')->count(),
            'penduduk' => $penduduk->where('nama')->count(),
            'kematian' => $penduduk->where('status', 'Meninggal')->count()
        ];

        $jenis_kelamin = [
            'Perempuan' => $penduduk->where('jenis_kelamin', 'Perempuan')->count(),
            'Laki-laki' => $penduduk->where('jenis_kelamin', 'Laki-laki')->count()
        ];

        $umur = [
            'balita' => $penduduk->filter(function ($p) {
                return $p->umur >= 1 && $p->umur <= 5 && $p->status == 'Hidup';
            })->count(),

            'anak_anak' => $penduduk->filter(function ($p) {
                return $p->umur >= 6 && $p->umur <= 12 && $p->status == 'Hidup';
            })->count(),

            'remaja' => $penduduk->filter(function ($p) {
                return $p->umur >= 13 && $p->umur <= 20 && $p->status == 'Hidup';
            })->count(),

            'dewasa' => $penduduk->filter(function ($p) {
                return $p->umur >= 21 && $p->umur <= 50 && $p->status == 'Hidup';
            })->count(),

            'lansia' => $penduduk->filter(function ($p) {
                return $p->umur > 50 && $p->status == 'Hidup';
            })->count()
        ];


        $cuaca = $responseCuaca->json();
        $data = $responseKomoditas->json();

        return view('welcome-3', compact('tampilan', 'cuaca', 'news', 'agenda', 'umur', 'data', 'jenis_kelamin', 'angkaPenduduk'));
    }
}