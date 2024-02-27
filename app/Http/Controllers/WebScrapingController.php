<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebScrapingController extends Controller
{
    public function show()
    {
        $response = Http::post('https://dsw.depok.go.id/Html/get_harga_depok', [
            'kategori' => 'kategori_value',
            'selisih' => 'selisih_value',
        ]);

        $data = $response->json();

        return view('komoditas-depok', compact('data'));
    }
}
