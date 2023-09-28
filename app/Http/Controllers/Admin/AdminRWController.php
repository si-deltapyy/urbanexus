<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRWController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rws = Rw::all();
        $rts = Rt::all();

        return view('admin.users.index_admin', compact('rws', 'rts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $rt = Rt::where('user_id', $user->id)->first();
        $rw = Rw::where('id', $id)->first();
        return view('admin.edit_rw', compact('user', 'rt', 'rw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'pekerjaan' => 'required',
            'no_hp' => 'required',
            'alamat_kantor' => 'required',
            'alamat_rumah' => 'required',
        ]);

        $user = Auth::user();

        Rw::where('id', $id)->update([
            'id' => $request->id,
            // 'user_id' => $user->id,
            // 'nama_rw' => $user->name,
            // 'email' => $user->email,
            'no_hp' => $request->no_hp,
            'pekerjaan' => $request->pekerjaan,
            'alamat_kantor' => $request->alamat_kantor,
            'alamat_rumah' => $request->alamat_rumah,
        ]);

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rw::where('id', $id)->delete();

        return redirect(route('admin.users.index'));
    }
}
