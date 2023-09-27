<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Jenis Bencana',
            'jenis_pertanyaan' => 'select'
        ]);
       Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Tanggal Kejadian Pertama DD/MM/YYYY',
            'jenis_pertanyaan' => 'date'
        ]);
       Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Waktu/Jam kejadian pertama',
            'jenis_pertanyaan' => 'date'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Kejadian susulan DD/MM/YYYY mm:hh',
            'jenis_pertanyaan' => 'date'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Kekuatan atau Intensitas bencana',
            'jenis_pertanyaan' => 'radio'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Lokasi kejadian bencana',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Deskripsi informasi kejadian',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Foto Kejadian atau Ancaman',
            'jenis_pertanyaan' => 'image'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Jumlah Dusun/RT RW/kepala keluarga yang terdampak',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Petunjuk lokasi dan ancar-ancar lokasi yang terdampak',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Jumlah korban meninggal',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Jumlah korban luka-luka',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Jumlah korban mengungsi',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Jumlah korban terdampak',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Tuliskan lokasi korban',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Tuliskan lokasi dan ancar-ancar penampungan korban jiwa, korban luka, pengungsian, dan kerusakan infrastruktur',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Foto lokasi terdampak, korban dan kerusakan sebagai Dampak Kejadian',
            'jenis_pertanyaan' => 'image'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Nama Lembaga/Instansi Responden',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Jumlah Seluruh Responden (orang)',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Bantuan Barang yang Sudah Datang',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Jenis barang dan jumlah/intensitas',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Bantuan Non Barang yang Sudah Datang',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Kebutuhan tanggap darurat',
            'jenis_pertanyaan' => 'select'
           
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Apa yang harus dilakukan para pihak untuk menangani atau kebutuhan tanggap darurat',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Permasalahan umum yang menghambat pelaksanaan pelayanan kesehatan pada masa bencana. (dari faktor pemberi layanan, penduduk, infrastruktur maupun bentang alam)',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Adakah indikasi penduduk trauma dalam menghadapi bencana?',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Berapa jumlah/persentase diantara mereka yang terindikasi mengalami trauma?',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Adakah program/kegiatan kesehatan masal dalam penanggulangan dampak bencana? 
Jelaskan',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Permasalahan kesehatan yang umum akibat bencana? Jelaskan',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Kegiatan yang dibutuhkan untuk pengurangan permasalahan tersebut',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Adakah program pemberian makanan tambahan untuk balita/ anak sekolah?Jelaskan',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Jumlah balita yang terdampak bencana',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Jelaskan dampak bencana terhadap balita',
            'jenis_pertanyaan' => 'text'
        ]);
        Pertanyaan::create([
            'kategori_pertanyaan' => 'Terjadi Bencana',
            'pertanyaan' => 'Kegiatan yang dibutuhkan untuk mengatasi dampak bencana terhadap balita',
            'jenis_pertanyaan' => 'text'
        ]);
    }
}
