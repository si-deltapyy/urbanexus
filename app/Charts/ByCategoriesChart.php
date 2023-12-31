<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class ByCategoriesChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;

    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
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

        return $this->chart->barChart()
        ->setTitle('Total Pelaporan Bencana')
        ->setSubtitle('Laporan')
        ->addData(['Sebelum Bencana'], [$sebelum])
        ->addData(['Terjadi Bencana'], [$terjadi])
        ->addData(['Sesudah Bencana'], [$sesudah])
        ->setXAxis($label);

    }
}
