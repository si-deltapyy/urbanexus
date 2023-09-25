<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\Rw;
use App\Models\ResponsKuisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = Rw::where('user_id', $user->id)->first();
        $rt = Rt::where('user_id', $user->id)->first();
        $bencana = Auth::table('respons_kuisioner')->get();
        
        // dd($data);
        return view('dashboard', compact('data', 'rt', 'bencana'));
    }
}
