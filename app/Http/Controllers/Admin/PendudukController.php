<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Carbon\Carbon;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduk = Penduduk::all();

        foreach ($penduduk as $p) {
            $tanggal_lahir = Carbon::parse($p->tanggal_lahir);
            $umur = $tanggal_lahir->age;
            $p->umur = $umur;
            $p->save();
        }
        $balita = Penduduk::whereBetween('umur', [1, 5])->where('status', 'Hidup')->count();
        $anak_anak = Penduduk::whereBetween('umur', [6, 12])->where('status', 'Hidup')->count();
        $remaja = Penduduk::whereBetween('umur', [13, 20])->where('status', 'Hidup')->count();
        $dewasa = Penduduk::whereBetween('umur', [21, 50])->where('status', 'Hidup')->count();
        $lansia = Penduduk::where('umur', '>', 50)->where('status', 'Hidup')->count();

        return view('pages.penduduk.index', compact('penduduk', 'balita', 'anak_anak', 'remaja', 'dewasa', 'lansia'));
    }

    public function create()
    {
        return view('pages.penduduk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:penduduk',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_rt' => 'required|integer|min:1',
            'no_rw' => 'required|integer|min:1',
            'status' => 'required',
            'no_kk' => 'required'
        ]);

        $penduduk = new Penduduk();
        $penduduk->nama = $request->nama;
        $penduduk->nik = $request->nik;
        $penduduk->no_kk = $request->no_kk;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->no_rw = $request->no_rw;
        $penduduk->no_rt = $request->no_rt;
        $penduduk->status = $request->status;
        $penduduk->agama = $request->agama;
        $penduduk->alamat = $request->alamat;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->gol_darah = $request->gol_darah;
        $penduduk->status_kawin = $request->status_kawin;
        $penduduk->umur = Carbon::parse($request->tanggal_lahir)->age;

        $penduduk->save();

        return redirect('/admin/penduduk')->with('success', 'Data penduduk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $penduduk = Penduduk::find($id);
        return view('pages.penduduk.edit', ['penduduk' => $penduduk]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:penduduk,nik,' . $id,
            'no_rt' => 'required|integer|min:1',
            'no_rw' => 'required|integer|min:1',
            'status' => 'required',
            'no_kk' => 'required'
        ]);

        $penduduk = Penduduk::find($id);
        $penduduk->nama = $request->nama;
        $penduduk->nik = $request->nik;
        $penduduk->no_kk = $request->no_kk;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->no_rw = $request->no_rw;
        $penduduk->no_rt = $request->no_rt;
        $penduduk->status = $request->status;
        $penduduk->agama = $request->agama;
        $penduduk->alamat = $request->alamat;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->gol_darah = $request->gol_darah;
        $penduduk->status_kawin = $request->status_kawin;
        $penduduk->umur = Carbon::parse($request->tanggal_lahir)->age;
        $penduduk->save();

        return redirect('/penduduk')->with('success', 'Data penduduk berhasil diupdate');
    }

    public function destroy($id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->delete();

        return redirect('/penduduk')->with('success', 'Data penduduk berhasil dihapus');
    }
}
