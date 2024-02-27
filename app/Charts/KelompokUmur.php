<?php

namespace App\Charts;

use App\Models\Penduduk;
use Illuminate\Support\Carbon;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class KelompokUmur
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $penduduk = Penduduk::all();

        $balita = $penduduk->filter(function ($p) {
            return $p->umur >= 1 && $p->umur <= 5 && $p->status == 'Hidup';
        })->count();

        $anak_anak = $penduduk->filter(function ($p) {
            return $p->umur >= 6 && $p->umur <= 12 && $p->status == 'Hidup';
        })->count();

        $remaja = $penduduk->filter(function ($p) {
            return $p->umur >= 13 && $p->umur <= 20 && $p->status == 'Hidup';
        })->count();

        $dewasa = $penduduk->filter(function ($p) {
            return $p->umur >= 21 && $p->umur <= 50 && $p->status == 'Hidup';
        })->count();

        $lansia = $penduduk->filter(function ($p) {
            return $p->umur > 50 && $p->status == 'Hidup';
        })->count();

        $Kelompok = [
            $balita,
            $anak_anak,
            $remaja,
            $dewasa,
            $lansia
        ];

        $label = [
            'Balita',
            'Anak-Anak',
            'Remaja',
            'Dewasa',
            'Lansia'
        ];

        return $this->chart->barChart()
            ->setTitle('Pengelompokan Berdasarkan Umur')
            ->addData('Jumlah', $Kelompok)
            ->setXAxis($label);
    }

}
