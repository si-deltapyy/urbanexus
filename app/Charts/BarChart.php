<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class BarChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $responden = DB::table('respon_kuisioner')
            ->join('users', 'respon_kuisioner.user_id', '=', 'users.id')
            ->select('users.id')
            ->groupBy('users.id')
            ->get();

        $data = [
            $responden->count(),
        ];

        return $this->chart->barChart()
            ->setTitle('')
            ->addData('Responden', [9, 2, 1, 6, 2, 8])
            ->addData('Laporan', [7, 3, 8, 2, 6, 4])
            ->addData('Warga Terdampak', [3, 3, 2, 10, 1, 2])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
