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
            ->setTitle('San Francisco vs Boston.')
            ->setSubtitle('Wins during season 2021.')
            ->addData('San Francisco', $data)
            ->addData('Boston', [7, 3, 8, 2, 6, 4])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
