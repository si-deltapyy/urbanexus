<?php

namespace Database\Seeders;

use App\Models\OpsiJawaban;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpsiJawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OpsiJawaban::create([
            'pertanyaan_id' => '80',
            'opsi_jawaban' => '1'
        ]);

        OpsiJawaban::create([
            'pertanyaan_id' => '80',
            'opsi_jawaban' => '2'
        ]);

        OpsiJawaban::create([
            'pertanyaan_id' => '80',
            'opsi_jawaban' => '3'
        ]);

        OpsiJawaban::create([
            'pertanyaan_id' => '80',
            'opsi_jawaban' => '4'
        ]);

        OpsiJawaban::create([
            'pertanyaan_id' => '80',
            'opsi_jawaban' => '5'
        ]);

        OpsiJawaban::create([
            'pertanyaan_id' => '80',
            'opsi_jawaban' => '6'
        ]);

        OpsiJawaban::create([
            'pertanyaan_id' => '80',
            'opsi_jawaban' => '7'
        ]);

        OpsiJawaban::create([
            'pertanyaan_id' => '80',
            'opsi_jawaban' => '8'
        ]);

        OpsiJawaban::create([
            'pertanyaan_id' => '80',
            'opsi_jawaban' => '9'
        ]);

        OpsiJawaban::create([
            'pertanyaan_id' => '80',
            'opsi_jawaban' => '10'
        ]);

        $opsiJawabanJenisBencana = [
            'Tanah Longsor',
            'Angin Ribut',
            'Gempa',
            'Kekeringan',
            'Banjir Bandang',
            'Kerusuhan Sosial',
            'Kebakaran',
            'Cuaca Ekstrim',
            'Lainnya',
        ];
        
        foreach ($opsiJawabanJenisBencana as $opsi) {
            OpsiJawaban::create([
                'pertanyaan_id' => '76',
                'opsi_jawaban' => $opsi,
            ]);
        }

        $opsiJawabanTanggapDarurat = [
            'Kebutuhan Mendesak',
            'Pencarian dan Penyelamatan',
            'Pengungsian dan Perlindungan',
            'Kesehatan',
            'Logistik',
            'Sarana dan Prasarana',
            'Pendidikan',
            'Peran serta Masyarakat',
            'Posko dan Posyan',
            'Tes COVID-19',
            'Tracing COVID-19',
            'Treatment COVID-19',
            'Lainnya'
        ];

        foreach ($opsiJawabanTanggapDarurat as $opsi) {
            OpsiJawaban::create([
                'pertanyaan_id' => '104',
                'opsi_jawaban' => $opsi,
            ]);
        }

        $opsiJawabanStatus = [
        'RENCANA',
	    'PERSETUJUAN',
		'PELAKSANAAN',
		'SELESAI',
		'BATAL'
        ];

        foreach ($opsiJawabanStatus as $opsi1) {
            OpsiJawaban::create([
                'pertanyaan_id' => '146',
                'opsi_jawaban' => $opsi1,
            ]);
        }
        foreach ($opsiJawabanStatus as $opsi1) {
            OpsiJawaban::create([
                'pertanyaan_id' => '153',
                'opsi_jawaban' => $opsi1,
            ]);
        }
        foreach ($opsiJawabanStatus as $opsi1) {
            OpsiJawaban::create([
                'pertanyaan_id' => '161',
                'opsi_jawaban' => $opsi1,
            ]);
        }
        foreach ($opsiJawabanStatus as $opsi1) {
            OpsiJawaban::create([
                'pertanyaan_id' => '169',
                'opsi_jawaban' => $opsi1,
            ]);
        }

    }
}
