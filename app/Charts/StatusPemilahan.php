<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Citizendatas; // Tambahkan model Status
use Carbon\Carbon;

class StatusPemilahan
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = new LarapexChart;
    }

    public function build($tanggalMulai, $tanggalSelesai): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $data = Citizendatas::whereDate('created_at', '>=', Carbon::parse($tanggalMulai)->startOfDay())
            ->whereDate('created_at', '<=', Carbon::parse($tanggalSelesai)->endOfDay())
            ->get();

        $countMemilahSampah = $data->where('status', 'Memilah Sampah')->count();
        $countTidakMemilahSampah = $data->where('status', 'Tidak Memilah Sampah')->count();

        $labels = [
            'Memilah Sampah',
            'Tidak Memilah Sampah'
        ];

        return $this->chart->pieChart()
            ->setTitle('Status Pemilahan Sampah')
            ->setSubtitle($tanggalMulai . ' - ' . $tanggalSelesai)
            ->addData([$countMemilahSampah, $countTidakMemilahSampah])
            ->setLabels($labels);
    }
}
