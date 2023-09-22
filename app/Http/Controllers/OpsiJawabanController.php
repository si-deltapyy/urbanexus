<?php

namespace App\Http\Controllers;

use App\Models\OpsiJawaban;
use Illuminate\Http\Request;

class OpsiJawabanController extends Controller
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
        $request->validate([
            'pertanyaan_id' => 'required',
            'opsi_jawaban' => 'required',
        ]);

        OpsiJawaban::create([
            'pertanyaan_id' => $request->pertanyaan_id,
            'opsi_jawaban' => $request->opsi_jawaban,
        ]);

        return redirect()->route('admin.pertanyaan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OpsiJawaban  $opsiJawaban
     * @return \Illuminate\Http\Response
     */
    public function show(OpsiJawaban $opsiJawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OpsiJawaban  $opsiJawaban
     * @return \Illuminate\Http\Response
     */
    public function edit(OpsiJawaban $opsiJawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OpsiJawaban  $opsiJawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pertanyaan_id' => 'required',
            'opsi_jawaban' => 'required',
        ]);

        OpsiJawaban::where('id', $id)->update([
            'pertanyaan_id' => $request->pertanyaan_id,
            'opsi_jawaban' => $request->opsi_jawaban,
        ]);

        return redirect()->route('admin.pertanyaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OpsiJawaban  $opsiJawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OpsiJawaban::where('id', $id)->delete();

        return redirect(route('admin.pertanyaan.index'));
    }
}
