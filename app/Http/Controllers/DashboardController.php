<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = Rw::where('users_id', $user->id)->first();
        // dd($data);
        return view('dashboard', compact('data'));
    }
}
