<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResponKuisioner;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class PDFDownloadController extends Controller
{
    public function sebelum_bencana()
    {
        $judul = 'LAPORAN SEBELUM BENCANA';
        $riwayats = ResponKuisioner::whereHas('pertanyaan', function ($query) {
            $query->where('kategori_pertanyaan', 'Sebelum Bencana');
        })
            ->groupBy('group_id')
            ->get()->toArray();

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
            ->get()->toArray();

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
            ->get()->toArray();

        $jumlahData = count($riwayats);

        $pdf = PDF::loadView('admin.laporan.sebelum_bencana', compact('riwayats', 'jumlahData', 'judul'))
            ->setPaper(array(0, 0, 609.4488, 935.433), 'portrait');

        return $pdf->download('Rekapitulasi Laporan Terjadi Bencana.pdf');
    }
    public function data_table()
    {
        $judul = 'REKAPITULASI LAPORAN';
        $laporan = ResponKuisioner::join('users', 'respon_kuisioner.user_id', '=', 'users.id')
            ->join('pertanyaan', 'respon_kuisioner.pertanyaan_id', '=', 'pertanyaan.id')
            ->select(
                'respon_kuisioner.id',
                'user_id',
                'name',
                DB::raw('SUM(jawaban) as total_jawaban'),
                DB::raw('(SELECT jawaban FROM respon_kuisioner WHERE pertanyaan_id = 91 AND user_id = users.id LIMIT 1) as jawaban_91'),
                'respon_kuisioner.created_at as timestamp'
            )
            ->whereIn('pertanyaan_id', [2, 3])
            ->groupBy('user_id', 'name', 'timestamp')
            ->get()->toArray();

        $jumlahData = count($laporan);

        $pdf = PDF::loadView('admin.laporan.rekapitulasi', compact('laporan', 'jumlahData', 'judul'))
            ->setPaper(array(0, 0, 609.4488, 935.433), 'portrait');

        return $pdf->download('Rekapitulasi Laporan.pdf');
    }
}
