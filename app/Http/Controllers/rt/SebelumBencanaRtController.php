<?php

namespace App\Http\Controllers\rt;

use App\Http\Controllers\Controller;
use App\Models\ImageUpload;
use App\Models\Pertanyaan;
use App\Models\ResponKuisioner;
use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SebelumBencanaRtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $rt = Rt::where('user_id', $user->id)->first();
        $pertanyaans = Pertanyaan::with(['respon_kuisioner' => function ($query) use ($user) {
            $query->where('user_id', $user->id)->orderBy('created_at');
        }])->get();

        $riwayats = ResponKuisioner::where('user_id', $user->id)->groupBy('group_id')->get();

        // dd($riwayats);
        return view('user.rt.sebelum_bencana.index', compact('rt', 'riwayats'));
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
        $pertanyaans = Pertanyaan::where('kategori_pertanyaan', 'Sebelum Bencana')->get();
        return view('user.rt.sebelum_bencana.create', compact('pertanyaans', 'user', 'data', 'rt'));
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

        // Loop untuk tabel ResponKuisioner
        foreach ($request->pertanyaan_id as $index => $pertanyaanId) {
            $responKuisioner = new ResponKuisioner([
                'user_id' => $user->id,
                'pertanyaan_id' => $pertanyaanId,
                'group_id' => $groupId,
            ]);

            if (isset($request->jawaban[$index])) {
                $jawaban = $request->jawaban[$index];
                $responKuisioner->jawaban = $jawaban;
            }

            $responKuisioner->save();
        }

        // Penyimpanan data gambar
        if ($request->hasFile('images')) {
            $imageFiles = $request->file('images');

            foreach ($request->pertanyaan_image_id as $index => $pertanyaanImageId) {
                if (isset($imageFiles[$index]) && $imageFiles[$index]->isValid()) {
                    $file_dokumen = $imageFiles[$index]->getClientOriginalName();
                    $filename_dokumen = pathinfo($file_dokumen, PATHINFO_FILENAME);
                    $ext_dokumen = $imageFiles[$index]->getClientOriginalExtension();
                    $filename_dokumen = $filename_dokumen . '.' . $ext_dokumen;
                    $file = $imageFiles[$index]->storeAs('public/jawaban', $filename_dokumen);

                    $image = $file;

                    $responKuisioner = new ResponKuisioner([
                        'user_id' => $user->id,
                        'pertanyaan_id' => $pertanyaanImageId,
                        'group_id' => $groupId,
                        'jawaban' => $image, 
                    ]);

                    $responKuisioner->save();
                }
            }
        }

        return redirect()->route('rt.kuisioner_sb.index');
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
        $rt = Rt::where('user_id', $user->id)->first();
        $respons = ResponKuisioner::where('group_id', $group_id)->get();
        // dd($respons);
        return view('user.rt.sebelum_bencana.detail', compact('user', 'data', 'respons', 'rt'));
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
