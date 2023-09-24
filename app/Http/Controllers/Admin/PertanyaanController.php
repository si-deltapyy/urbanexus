<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\OpsiJawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaans = Pertanyaan::get();
        $opsiJawabans = OpsiJawaban::get();
        // dd($petanyaans);
        return view('admin.kuisioner.index', compact('pertanyaans', 'opsiJawabans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kuisioner.create');
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
            'kategori_pertanyaan' => 'required',
            'pertanyaan' => 'required',
            'jenis_pertanyaan' => 'required',
        ]);

        Pertanyaan::create([
            'kategori_pertanyaan' => $request->kategori_pertanyaan,
            'pertanyaan' => $request->pertanyaan,
            'jenis_pertanyaan' => $request->jenis_pertanyaan,
        ]);

        return redirect()->route('admin.pertanyaan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::where('id', $id)->first();
        // dd($petanyaans);
        return view('admin.kuisioner.edit', compact('pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori_pertanyaan' => 'required',
            'pertanyaan' => 'required',
            'jenis_pertanyaan' => 'required',
        ]);

        Pertanyaan::where('id', $id)->update([
            'kategori_pertanyaan' => $request->kategori_pertanyaan,
            'pertanyaan' => $request->pertanyaan,
            'jenis_pertanyaan' => $request->jenis_pertanyaan,
        ]);

        return redirect()->route('admin.pertanyaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pertanyaan::where('id', $id)->delete();

        return redirect(route('admin.pertanyaan.index'));
    }
}
