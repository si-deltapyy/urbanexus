<?php

namespace App\Http\Controllers\rw;

use App\Http\Controllers\Controller;
use App\Models\Pertanyaan;
use App\Models\ResponKuisioner;
use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesudahBencanaRwController extends Controller
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

        $riwayats = ResponKuisioner::where('user_id', $user->id)->groupBy('group_id')->get();

        // dd($riwayats);
        return view('user.rw.sesudah_bencana.index', compact( 'data', 'riwayats'));
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
        $rt = Rt::where('user_id', $user->id)->first();
        $pertanyaans = Pertanyaan::where('kategori_pertanyaan', 'Sesudah Bencana')->get();
        return view('user.rw.sesudah_bencana.create', compact('pertanyaans', 'user', 'data', 'rt'));
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
        
        $groupId = rand();

        foreach ($request->pertanyaan_id as $index => $pertanyaanId) {
            $responKuisioner = new ResponKuisioner([
                'user_id' => $user->id,
                'pertanyaan_id' => $pertanyaanId,
                'group_id' => $groupId, 
            ]);

            if (isset($request->jawaban[$index])) {
                $jawaban = $request->jawaban[$index];
                
                // Check if it's a file upload
                if ($request->hasFile("jawaban.{$index}")) {
                    $file_dokumen = $request->file("jawaban.{$index}")->getClientOriginalName();
                    $filename_dokumen = pathinfo($file_dokumen, PATHINFO_FILENAME);
                    $ext_dokumen = $request->file("jawaban.{$index}")->getClientOriginalExtension();
                    $filename_dokumen = $filename_dokumen . '.' . $ext_dokumen;
                    $file = $request->file("jawaban.{$index}")->storeAs('public/jawaban', $filename_dokumen);

                    $jawaban = $file;
                }
                
                $responKuisioner->jawaban = $jawaban;
            }

            $responKuisioner->save();
        }

        return redirect()->route('rw.kuisioner_sdb.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($group_id)
    {
        $user = Auth::user();
        $data = Rw::where('user_id', $user->id)->first();
        $respons = ResponKuisioner::where('group_id', $group_id)->get();
        // dd($respons);
        return view('user.rw.sesudah_bencana.detail', compact('user', 'data', 'respons'));
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