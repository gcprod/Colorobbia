<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Citizendatas; // Tambahkan model Status

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $data = [
            Citizendatas::where('status', 'Memilah Sampah')->count(),
            Citizendatas::where('status', 'Tidak Memilah Sampah')->count(),
        ];

        $labels = [
            'Memilah Sampah',
            'Tidak Memilah Sampah'
        ];

        return $this->chart->pieChart()
            ->setTitle('Status Pemilahan Sampah')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setLabels($labels);
    }
}
