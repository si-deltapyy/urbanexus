<?php

namespace Database\Seeders;

use App\Models\Kuisioner3;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Kuisioner3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Berapa jumlah dampak yang mengenai Dusun / RT RW /Kepala Keluarga?',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Lengkapi dengan petunjuk lokasi dan ancar-ancar lokasi yang terdampak?',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Jumlah Korban Meninggal?',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Jumlah Korban Luka - Luka?',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Jumlah Orang Mengungsi?',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Jumlah Warga Terdampak?',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Tuliskan Lokasi Korban',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Tuliskan lokasi dan ancar-ancar penampungan korban jiwa, korban luka, 
pengungsian, dan kerusakan infrastruktur',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Foto lokasi terdampak, korban dan kerusakan sebagai Dampak Kejadian
',
            'jenis_pertanyaan' => 'image',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Nama Lembaga/Instansi Responden',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Jumlah Seluruh Responden (orang)',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Bantuan Barang yang Sudah Datang',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Sebutkan jenis barang dan jumlah/intensitas',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '3',
            'pertanyaan' => 'Bantuan Non Barang yang Sudah Datang',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '4',
            'pertanyaan' => 'Rencana Kegiatan',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '4',
            'pertanyaan' => 'Sumber Dana',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '4',
            'pertanyaan' => 'Luaran',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '4',
            'pertanyaan' => 'Target/Jumlah Luaran yang direncanakan',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '4',
            'pertanyaan' => 'Waktu',
            'jenis_pertanyaan' => 'date',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '4',
            'pertanyaan' => 'Status',
            'jenis_pertanyaan' => 'select',
            'jawaban' => '	RENCANA
				            PERSETUJUAN
				            PELAKSANAAN
				            SELESAI
				            BATAL'
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '5',
            'pertanyaan' => 'Rencana Kegiatan',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '5',
            'pertanyaan' => 'Sumber Dana',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '5',
            'pertanyaan' => 'Luaran',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '5',
            'pertanyaan' => 'Target/Jumlah Luaran yang direncanakan',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '5',
            'pertanyaan' => 'Waktu',
            'jenis_pertanyaan' => 'date',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '5',
            'pertanyaan' => 'Status',
            'jenis_pertanyaan' => 'select',
            'jawaban' => 'RENCANA
				          PERSETUJUAN
				          PELAKSANAAN
				          SELESAI
				          BATAL'
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '6',
            'pertanyaan' => 'Rencana Kegiatan',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '6',
            'pertanyaan' => 'Sumber Dana',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '6',
            'pertanyaan' => 'Luaran',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '6',
            'pertanyaan' => 'Target/Jumlah Luaran yang direncanakan',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '6',
            'pertanyaan' => 'Waktu',
            'jenis_pertanyaan' => 'date',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '6',
            'pertanyaan' => 'Status',
            'jenis_pertanyaan' => 'select',
            'jawaban' => 'RENCANA
				          PERSETUJUAN
				          PELAKSANAAN
				          SELESAI
				          BATAL'
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '7',
            'pertanyaan' => 'Rencana Kegiatan',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '7',
            'pertanyaan' => 'Sumber Dana',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '7',
            'pertanyaan' => 'Luaran',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '7',
            'pertanyaan' => 'Target/Jumlah Luaran yang direncanakan',
            'jenis_pertanyaan' => 'text',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '7',
            'pertanyaan' => 'Waktu',
            'jenis_pertanyaan' => 'date',
            'jawaban' => ''
            ]);
        Kuisioner3::create([
            'code_pertanyaan' => '7',
            'pertanyaan' => 'Status',
            'jenis_pertanyaan' => 'select',
            'jawaban' => 'RENCANA
				          PERSETUJUAN
				          PELAKSANAAN
				          SELESAI
				          BATAL'
            ]);
    }
}
