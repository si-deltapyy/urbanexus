<?php

namespace Database\Seeders;

use App\Models\Kuisioner2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Kuisioner2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Jenis Bencana',
            'jenis_pertanyaan' => 'select',
            'jawaban' => '	Banjir
							Tanah Longsor
							Angin Ribut
							Gempa
							Kekeringan
							Banjir Bandang
							Kerusuhan Sosial
							Kebakaran
							Cuaca Ekstrim
							Lainnya'
        ]);
       Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Tanggal Kejadian Pertama DD/MM/YYYY',
            'jenis_pertanyaan' => 'date',
            'jawaban' => ''
        ]);
       Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Waktu/Jam kejadian pertama',
            'jenis_pertanyaan' => 'date',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Kejadian susulan DD/MM/YYYY mm:hh',
            'jenis_pertanyaan' => 'date',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Kekuatan atau Intensitas bencana',
            'jenis_pertanyaan' => 'radio',
            'jawaban' => '12345678910'
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Lokasi kejadian bencana',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Deskripsi informasi kejadian',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Foto Kejadian atau Ancaman',
            'jenis_pertanyaan' => 'image',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Jumlah Dusun/RT RW/kepala keluarga yang terdampak',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Petunjuk lokasi dan ancar-ancar lokasi yang terdampak',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Jumlah korban meninggal',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Jumlah korban luka-luka',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Jumlah korban mengungsi',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Jumlah korban terdampak',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Tuliskan lokasi korban',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Tuliskan lokasi dan ancar-ancar penampungan korban jiwa, korban luka, pengungsian, dan kerusakan infrastruktur',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Foto lokasi terdampak, korban dan kerusakan sebagai Dampak Kejadian',
            'jenis_pertanyaan' => 'image',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Nama Lembaga/Instansi Responden',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Jumlah Seluruh Responden (orang)',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Bantuan Barang yang Sudah Datang',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Jenis barang dan jumlah/intensitas',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Bantuan Non Barang yang Sudah Datang',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Kebutuhan tanggap darurat',
            'jenis_pertanyaan' => 'select',
            'jawaban' => '	Kebutuhan Mendesak
							Pencarian dan Penyelamatan
							Pengungsian dan Perlindungan
							Kesehatan
							Logistik
							Sarana dan Prasarana
							Pendidikan
							Peran serta Masyarakat
							Posko dan Posyan
							Tes COVID-19
							Tracing COVID-19
							Treatment COVID-19
							Lainnya, Sebutkan
							Kebutuhan Lainnya'
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Apa yang harus dilakukan para pihak untuk menangani atau kebutuhan tanggap darurat',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Permasalahan umum yang menghambat pelaksanaan pelayanan kesehatan pada masa bencana. (dari faktor pemberi layanan, penduduk, infrastruktur maupun bentang alam)',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Adakah indikasi penduduk trauma dalam menghadapi bencana?',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Berapa jumlah/persentase diantara mereka yang terindikasi mengalami trauma?',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Adakah program/kegiatan kesehatan masal dalam penanggulangan dampak bencana? 
Jelaskan',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Permasalahan kesehatan yang umum akibat bencana? Jelaskan',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Kegiatan yang dibutuhkan untuk pengurangan permasalahan tersebut',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Adakah program pemberian makanan tambahan untuk balita/ anak sekolah?Jelaskan',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Jumlah balita yang terdampak bencana',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Jelaskan dampak bencana terhadap balita',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
        Kuisioner2::create([
            'code_pertanyaan' => '2',
            'pertanyaan' => 'Kegiatan yang dibutuhkan untuk mengatasi dampak bencana terhadap balita',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
        ]);
    }
}
