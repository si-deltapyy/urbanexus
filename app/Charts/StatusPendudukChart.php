<?php

namespace App\Charts;

use App\Models\Penduduk;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class StatusPendudukChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $penduduk = Penduduk::all();
        $data = [
            $penduduk->where('status', 'Hidup')->count(),
            $penduduk->where('status', 'Meninggal')->count()
        ];

        $label = [
            'Hidup',
            'Meninggal'
        ];
        return $this->chart->donutChart()
            ->setTitle('Status Penduduk')
            ->addData($data)
            ->setLabels($label);
    }
}
