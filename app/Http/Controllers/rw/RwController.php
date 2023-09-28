<?php

namespace App\Http\Controllers\rw;

use App\Http\Controllers\Controller;

use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = Rw::where('user_id', $user->id)->first();
        return view('rw.data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $data = Rw::where('user_id', $user->id)->first();
        return view('rw.form', compact('user', 'data'));
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
            'pekerjaan' => 'required',
            'no_hp' => 'required',
            'alamat_kantor' => 'required',
            'alamat_rumah' => 'required',
        ]);

        $user = Auth::user();

        Rw::create([
            'id' => $request->id,
            'user_id' => $user->id,
            'nama_rw' => $user->name,
            'email' => $user->email,
            'no_hp' => $request->no_hp,
            'pekerjaan' => $request->pekerjaan,
            'alamat_kantor' => $request->alamat_kantor,
            'alamat_rumah' => $request->alamat_rumah,
        ]);

        return redirect()->route('rw.daftar_rw.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show(Rw $rw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit(Rw $rw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rw $rw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rw $rw)
    {
        //
    }
}
