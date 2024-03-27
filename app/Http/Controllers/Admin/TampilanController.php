<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tampilan;


class TampilanController extends Controller
{
    public function index()
    {
        $tampilan = Tampilan::all();
        $data = $tampilan->where('id')->count();

        return view('admin.slider.index', compact('tampilan', 'data'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {

            $imageName = $request->file('gambar')->getClientOriginalName(); // Mendapatkan nama file asli
            $path = $request->file('gambar')->storeAs('public/slider/', $imageName); // Menyimpan dengan nama file asli

            Tampilan::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'path' => $path,
                'imgName' => $imageName,
            ]);

            return redirect()->route('admin.slider');
        } else {
            return back()->withInput()->withErrors(['gambar' => 'File gambar tidak valid.']);
        }
    }

    public function delete($id)
    {
        $tampilan = Tampilan::find($id);
    
        if ($tampilan) {
            // Hapus file gambar
            Storage::delete('public/slider/'.$tampilan->path);
    
            // Hapus data dari database
            $tampilan->delete();
    
            return redirect()->route('admin.slider')->with('success', 'Data slider berhasil dihapus');
        } else {
            return redirect()->route('admin.slider')->with('error', 'Data slider tidak ditemukan');
        }
    }
}
