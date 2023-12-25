<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\Rw;
use App\Charts\KelompokUmur;
use Illuminate\Http\Request;
use App\Models\ResponKuisioner;
use Illuminate\Support\Facades\DB;
use App\Charts\GenderPendudukChart;
use App\Charts\StatusPendudukChart;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = Rw::where('user_id', $user->id)->first();
        $rt = Rt::where('user_id', $user->id)->first();
        $responKuisioner = ResponKuisioner::all();

        $dataRt = ResponKuisioner::join('users', 'respon_kuisioner.user_id', '=', 'users.id')
            ->join('pertanyaan', 'respon_kuisioner.pertanyaan_id', '=', 'pertanyaan.id')
            ->select(
                'user_id',
                'name',
                DB::raw('SUM(jawaban) as total_jawaban'),
                DB::raw('(SELECT jawaban FROM respon_kuisioner WHERE pertanyaan_id = 91 AND user_id = users.id LIMIT 1) as jawaban_91'),
                'respon_kuisioner.created_at as timestamp'
            )
            ->whereIn('pertanyaan_id', [2, 3])
            ->where('respon_kuisioner.user_id', $user->id) //filter by user_id
            ->groupBy('user_id', 'name', 'timestamp')
            ->get();

        $user_ids_rt = DB::table('rw')
            ->where('rw.user_id', $user->id)
            ->join('rt', 'rw.id', '=', 'rt.rw_id')
            ->pluck('rt.user_id');

        $user_ids = array_merge([$user->id], $user_ids_rt->toArray());

        $dataRw = ResponKuisioner::join('users', 'respon_kuisioner.user_id', '=', 'users.id')
            ->join('pertanyaan', 'respon_kuisioner.pertanyaan_id', '=', 'pertanyaan.id')
            ->select(
                'user_id',
                'name',
                DB::raw('SUM(jawaban) as total_jawaban'),
                DB::raw('(SELECT jawaban FROM respon_kuisioner WHERE pertanyaan_id = 91 AND user_id = users.id LIMIT 1) as jawaban_91'),
                'respon_kuisioner.created_at as timestamp'
            )
            ->whereIn('pertanyaan_id', [2, 3])
            ->whereIn('respon_kuisioner.user_id', $user_ids) //filter by user_id
            ->groupBy('user_id', 'name', 'timestamp')
            ->get();

        $dataAdmin = ResponKuisioner::join('users', 'respon_kuisioner.user_id', '=', 'users.id')
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
        // dd($dataRw);


        return view('dashboard', compact('data', 'rt', 'responKuisioner', 'dataRt', 'dataRw', 'dataAdmin'));
    }
}
