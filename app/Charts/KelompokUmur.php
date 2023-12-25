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

        foreach ($penduduk as $p) {
            $tanggal_lahir = Carbon::parse($p->tanggal_lahir);
            $umur = $tanggal_lahir->age;
            $p->umur = $umur;
            $p->save();
        }
        $balita = Penduduk::whereBetween('umur', [1, 5])->where('status', 'Hidup')->count();
        $anak_anak = Penduduk::whereBetween('umur', [6, 12])->where('status', 'Hidup')->count();
        $remaja = Penduduk::whereBetween('umur', [13, 20])->where('status', 'Hidup')->count();
        $dewasa = Penduduk::whereBetween('umur', [21, 50])->where('status', 'Hidup')->count();
        $lansia = Penduduk::where('umur', '>', 50)->where('status', 'Hidup')->count();

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
