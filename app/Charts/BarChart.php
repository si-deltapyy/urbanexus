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
<<<<<<< HEAD
            ->setTitle('')
            ->addData('Responden', $data)
            ->addData('Laporan', [7, 3, 8, 2, 6, 4])
            ->addData('Warga Terdampak', [3, 3, 2, 10, 1, 2])
=======

            ->addData('Responden', [7, 3, 8, 2, 6, 4])
>>>>>>> 5731148477a5964caf5eab7f966011fca55fb6cb
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
