<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Citizendatas;
use App\Models\Qrcitizendatas;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;

use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;

class ExportController extends Controller
{
    public function exportPDFbydate(Request $request)
{
    $tanggalMulai = $request->input('tanggal_mulai');
    $tanggalSelesai = $request->input('tanggal_selesai');

    // Memfilter data berdasarkan rentang tanggal
    $data = Citizendatas::whereDate('created_at', '>=', Carbon::parse($tanggalMulai)->startOfDay())
                        ->whereDate('created_at', '<=', Carbon::parse($tanggalSelesai)->endOfDay())
                        ->get();

    // Inisialisasi objek Dompdf
    $dompdf = new Dompdf();

    // // Render tampilan blade ke dalam HTML
    $html = view('pdf.export_pdf', ['data' => $data])->render();

    // // Konversi HTML menjadi PDF
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();

    // // Mengirim respons PDF ke browser
    return $dompdf->stream('data_wargabydate.pdf');


}
public function exportPDFbyrtrw(Request $request)
{
    $rt = $request->input('rt');
    $rw = $request->input('rw');

    // Memfilter data berdasarkan RT dan RW
    $data = Citizendatas::where('rt', $rt)
                        ->where('rw', $rw)
                        ->get();

    // Inisialisasi objek Dompdf
    $dompdf = new Dompdf();

    // Render tampilan blade ke dalam HTML
    $html = view('pdf.export_pdf', ['data' => $data])->render();

    // Konversi HTML menjadi PDF
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();

    // Mengirim respons PDF ke browser
    return $dompdf->stream('data_wargabyrtrw.pdf');
}

}
