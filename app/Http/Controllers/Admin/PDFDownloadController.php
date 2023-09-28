<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResponKuisioner;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFDownloadController extends Controller
{
    // public function sebelum_bencana(Request $request)
    // {
    //     $laporan = Permohonan::where('tanggal', '>=', $request->mulai)->where('tanggal', '<=', $request->akhir)->get();
    //     $lap = [
    //         'data' => $laporan
    //     ];
    //     $tanggal = [
    //         'mulai' => $request->mulai,
    //         'akhir' => $request->akhir
    //     ];

    //     $pdf = PDF::loadView('admin.laporan.pdf-laporan', $lap, $tanggal)->setPaper(array(0, 0, 609.4488, 935.433), 'landscape');
    //     return $pdf->download('Laporan Permohonan Informasi.pdf');
    // }

    public function sebelum_bencana()
    {
        $judul = 'LAPORAN SEBELUM BENCANA';
        $riwayats = ResponKuisioner::whereHas('pertanyaan', function ($query) {
            $query->where('kategori_pertanyaan', 'Sebelum Bencana');
            })
            ->groupBy('group_id')
            ->get()->toArray();;

        $jumlahData = count($riwayats);

        $pdf = PDF::loadView('admin.laporan.sebelum_bencana', compact('riwayats', 'jumlahData', 'judul'))
            ->setPaper(array(0, 0, 609.4488, 935.433), 'portrait');

        return $pdf->download('Rekapitulasi Laporan Sebelum Bencana.pdf');
    }
    public function sesudah_bencana()
    {
        $judul = 'LAPORAN SESUDAH BENCANA';
        $riwayats = ResponKuisioner::whereHas('pertanyaan', function ($query) {
            $query->where('kategori_pertanyaan', 'Sesudah Bencana');
            })
            ->groupBy('group_id')
            ->get()->toArray();;

        $jumlahData = count($riwayats);

        $pdf = PDF::loadView('admin.laporan.sebelum_bencana', compact('riwayats', 'jumlahData', 'judul'))
            ->setPaper(array(0, 0, 609.4488, 935.433), 'portrait');

        return $pdf->download('Rekapitulasi Laporan Sesudah Bencana.pdf');
    }
    public function terjadi_bencana()
    {
        $judul = 'LAPORAN TERJADI BENCANA';
        $riwayats = ResponKuisioner::whereHas('pertanyaan', function ($query) {
            $query->where('kategori_pertanyaan', 'Terjadi Bencana');
            })
            ->groupBy('group_id')
            ->get()->toArray();;

        $jumlahData = count($riwayats);

        $pdf = PDF::loadView('admin.laporan.sebelum_bencana', compact('riwayats', 'jumlahData', 'judul'))
            ->setPaper(array(0, 0, 609.4488, 935.433), 'portrait');

        return $pdf->download('Rekapitulasi Laporan Terjadi Bencana.pdf');
    }
}
