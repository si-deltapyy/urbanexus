<?php

namespace App\Charts;

use App\Models\Penduduk;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class GenderPendudukChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $penduduk = Penduduk::all();
        $data = [
            $penduduk->where('jenis_kelamin', 'Laki-laki')->count(),
            $penduduk->where('jenis_kelamin', 'Perempuan')->count()
        ];

        $label = [
            'Laki-Laki',
            'Perumpuan'
        ];
        return $this->chart->pieChart()
            ->setTitle('Jenis Kelamin Penduduk')
            ->setSubtitle('Terdata 2023.')
            ->addData($data)
            ->setLabels($label);
    }
}
