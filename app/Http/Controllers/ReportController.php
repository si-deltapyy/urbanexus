<?php

namespace App\Http\Controllers;

use App\Models\ResponKuisioner;
use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = Rw::where('user_id', $user->id)->first();
        $laporan = ResponKuisioner::join('users', 'respon_kuisioner.user_id', '=', 'users.id')
        ->join('pertanyaan', 'respon_kuisioner.pertanyaan_id', '=', 'pertanyaan.id')
        ->select(
            'user_id',
            'name',
            DB::raw('SUM(jawaban) as total_jawaban'),
            DB::raw('(SELECT jawaban FROM respon_kuisioner WHERE pertanyaan_id = 91 AND user_id = users.id LIMIT 1) as jawaban_91'),
            'respon_kuisioner.created_at as timestamp'
        )
        ->whereIn('pertanyaan_id', [2, 3])
        ->groupBy('user_id', 'name', 'timestamp')
        ->get();

        // dd($laporan);

        return view('pages.report-pages', compact('laporan', 'data'));
    }
}
