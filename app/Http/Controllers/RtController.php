<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $rt = Rt::where('users_id', $user->id)->first();
        return view('rt.data', compact('rt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $rt = Rt::where('users_id', $user->id)->first();
        $rws = Rw::get();
        return view('rt.form', compact('user', 'rt', 'rws'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'rw_id' => 'required',
            'pekerjaan' => 'required',
            'alamat_kantor' => 'required',
            'alamat_rumah' => 'required',
        ]);

        $user = Auth::user();

        Rt::create([
            'id' => $request->id,
            'rw_id' => $request->rw_id,
            'users_id' => $user->id,
            'nama_rt' => $user->name,
            'email' => $user->email,
            'pekerjaan' => $request->pekerjaan,
            'alamat_kantor' => $request->alamat_kantor,
            'alamat_rumah' => $request->alamat_rumah,
        ]);

        return redirect()->route('rt.daftar_rt.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function show(Rt $rt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function edit(Rt $rt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rt $rt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rt $rt)
    {
        //
    }
}
