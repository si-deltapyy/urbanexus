<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\ResponKuisioner;
use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SebelumBencanaController extends Controller
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
        $user = Auth::user();
        $data = Rw::where('user_id', $user->id)->first();
        $pertanyaans = Pertanyaan::where('kategori_pertanyaan', 'Sebelum Bencana')->get();
        return view('user.sebelum_bencana.create', compact('pertanyaans', 'user', 'data'));
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
            'jawaban' => 'required|array',
            'jawaban.*' => 'required',
            'pertanyaan_id' => 'required|array',
            'pertanyaan_id.*' => 'required|integer',
        ]);

        $user = Auth::user();

        foreach ($request->pertanyaan_id as $index => $pertanyaanId) {
            ResponKuisioner::create([
                'user_id' => $user->id,
                'pertanyaan_id' => $pertanyaanId,
                'jawaban' => $request->jawaban[$index],
            ]);
        }

        return redirect()->route('rw.kuisioner_sb.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
