<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class ByCategoriesChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $chart=ResponKuisioner::get();
        $responden = [
            $respon->user_id->count(),
            $komplainmerk->where('merk_barang', 'dell')->count(),
            $komplainmerk->where('merk_barang', 'lenovo')->count(),
            $komplainmerk->where('merk_barang', 'msi')->count(),
            $komplainmerk->where('merk_barang', 'samsung')->count(),
            $komplainmerk->where('merk_barang', 'apple')->count(),
            $komplainmerk->where('merk_barang', 'acer')->count(),
        ];


        $label =[
            'asus',
            'dell',
            'lenovo',
            'msi',
            'samsung',
            'apple',
            'acer',
        ];
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('San Francisco vs Boston.')
            ->setSubtitle('Wins during season 2021.')
            ->addData('San Francisco', [6, 9, 3, 4, 10, 8])
            ->addData('Boston', [7, 3, 8, 2, 6, 4])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
