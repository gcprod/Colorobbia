<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citizendatas;
use App\Models\Qrcitizendatas;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Chart\Chart;
use PhpOffice\PhpSpreadsheet\Chart\DataSeries;
use PhpOffice\PhpSpreadsheet\Chart\DataSeriesValues;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;

class ExportController extends Controller
{
    public function exportPDFbydate(Request $request)
    {
        $tanggalMulai = $request->input('tanggal_mulai');
        $tanggalSelesai = $request->input('tanggal_selesai');

        $data = Citizendatas::whereDate('created_at', '>=', Carbon::parse($tanggalMulai)->startOfDay())
            ->whereDate('created_at', '<=', Carbon::parse($tanggalSelesai)->endOfDay())
            ->get();

        $dompdf = new Dompdf();

        $html = view('pdf.export_pdf', ['data' => $data])->render();

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        return $dompdf->stream('data_wargabydate.pdf');
    }
    public function exportPDFbyrtrw(Request $request)
    {
        $rt = $request->input('rt');
        $rw = $request->input('rw');

        $data = Citizendatas::where('rt', $rt)
            ->where('rw', $rw)
            ->get();

        $dompdf = new Dompdf();

        $html = view('pdf.export_pdf', ['data' => $data])->render();

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        return $dompdf->stream('data_wargabyrtrw.pdf');
    }



    // ...



    // ...


}
