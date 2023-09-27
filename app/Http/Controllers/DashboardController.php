<?php

namespace App\Http\Controllers;

use App\Models\ResponKuisioner;
use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = Rw::where('user_id', $user->id)->first();
        $rt = Rt::where('user_id', $user->id)->first();
        $responKuisioner = ResponKuisioner::all();

        // dd($data);
        return view('dashboard', compact('data', 'rt', 'responKuisioner'));
    }
}
