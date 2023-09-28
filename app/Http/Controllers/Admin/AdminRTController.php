<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $rt = Rt::where('id', $id)->first();
        $rws = Rw::get();
        return view('admin.edit_rt', compact('user', 'rt', 'rws'));
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

        Rt::where('id', $id)->update([
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
        Rt::where('id', $id)->delete();

        return redirect(route('admin.users.index'));
    }
}
