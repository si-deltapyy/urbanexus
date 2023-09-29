<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TestChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {

        $kategoriPertanyaan = DB::table('respon_kuisioner')
            ->join('pertanyaan', 'respon_kuisioner.pertanyaan_id', '=', 'pertanyaan.id')
            ->select('pertanyaan.kategori_pertanyaan')
            ->groupBy('pertanyaan.kategori_pertanyaan')
            ->get();

            $jenis = [
                $kategoriPertanyaan->where('kategori_pertanyaan', 'Sebelum Bencana')->count(),
                $kategoriPertanyaan->where('kategori_pertanyaan', 'Terjadi Bencana')->count(),
                $kategoriPertanyaan->where('kategori_pertanyaan', 'Sesudah Bencana')->count()
            ];

        $label =[
           'Sebelum Bencana',
           'Terjadi Bencana',
            'Sesudah Bencana'
        ];

        return $this->chart->pieChart()
            ->setTitle('Laporan Per Kategori')
            ->addData($jenis)
            ->setLabels($label);
    }
}
