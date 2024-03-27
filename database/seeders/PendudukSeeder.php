<?php

namespace Database\Seeders;

use App\Models\Penduduk;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penduduk::create([
            'nama' => 'Mariyadi',
            'nik' => '3314092302120002',
            'no_kk' => '3345123412325556',
            'no_rt' =>  '1',
            'no_rw' => '3',
            'status' => 'Meninggal',
            'status_kawin' => 'Kawin',
            'agama' => 'Islam',
            'gol_darah' => 'A',
            'tanggal_lahir' => '2002-10-23',
            'tempat_lahir' => 'Karang Gede',
            'jenis_kelamin' => 'Perempuan',
            'pendidikan_terakhir' => 'Sarjana',
            'pekerjaan' => 'Guru',
            'alamat' => 'Jl. Adi Soemarmo no. 23, Laweyan, Surakarta',
            'umur' => 22
        ]);
        Penduduk::create([
            'nama' => 'Mariyadai',
            'nik' => '3314092302110002',
            'no_kk' => '3345123412325556',
            'no_rt' =>  '1',
            'no_rw' => '3',
            'status' => 'Hidup',
            'status_kawin' => 'Kawin',
            'agama' => 'Islam',
            'gol_darah' => 'A',
            'tanggal_lahir' => '2002-10-23',
            'tempat_lahir' => 'Karang Gede',
            'jenis_kelamin' => 'Laki-laki',
            'pendidikan_terakhir' => 'Sarjana',
            'pekerjaan' => 'Guru',
            'alamat' => 'Jl. Adi Soemarmo no. 23, Laweyan, Surakarta',
            'umur' => 12
        ]);
        Penduduk::create([
            'nama' => 'Mariyadai',
            'nik' => '3314092302110032',
            'no_kk' => '3345123412323556',
            'no_rt' =>  '1',
            'no_rw' => '3',
            'status' => 'Hidup',
            'status_kawin' => 'Kawin',
            'agama' => 'Islam',
            'gol_darah' => 'A',
            'tanggal_lahir' => '2002-10-23',
            'tempat_lahir' => 'Karang Gede',
            'jenis_kelamin' => 'Laki-laki',
            'pendidikan_terakhir' => 'Sarjana',
            'pekerjaan' => 'Guru',
            'alamat' => 'Jl. Adi Soemarmo no. 23, Laweyan, Surakarta',
            'umur' => 11
        ]);
        Penduduk::create([
            'nama' => 'Mariyadai',
            'nik' => '3314092302110202',
            'no_kk' => '3345323892325556',
            'no_rt' =>  '1',
            'no_rw' => '3',
            'status' => 'Hidup',
            'status_kawin' => 'Kawin',
            'agama' => 'Islam',
            'gol_darah' => 'A',
            'tanggal_lahir' => '2002-10-23',
            'tempat_lahir' => 'Karang Gede',
            'jenis_kelamin' => 'Laki-laki',
            'pendidikan_terakhir' => 'Sarjana',
            'pekerjaan' => 'Guru',
            'alamat' => 'Jl. Adi Soemarmo no. 23, Laweyan, Surakarta',
            'umur' => 18
        ]);
        Penduduk::create([
            'nama' => 'Mariyadai',
            'nik' => '3311092302110202',
            'no_kk' => '3345323892325556',
            'no_rt' =>  '1',
            'no_rw' => '3',
            'status' => 'Hidup',
            'status_kawin' => 'Kawin',
            'agama' => 'Islam',
            'gol_darah' => 'A',
            'tanggal_lahir' => '2002-10-23',
            'tempat_lahir' => 'Karang Gede',
            'jenis_kelamin' => 'Laki-laki',
            'pendidikan_terakhir' => 'Sarjana',
            'pekerjaan' => 'Guru',
            'alamat' => 'Jl. Adi Soemarmo no. 23, Laweyan, Surakarta',
            'umur' => 18
        ]);
        Penduduk::create([
            'nama' => 'Mariyadai',
            'nik' => '3314092322110202',
            'no_kk' => '3345323892325556',
            'no_rt' =>  '1',
            'no_rw' => '3',
            'status' => 'Hidup',
            'status_kawin' => 'Kawin',
            'agama' => 'Islam',
            'gol_darah' => 'A',
            'tanggal_lahir' => '2002-10-23',
            'tempat_lahir' => 'Karang Gede',
            'jenis_kelamin' => 'Laki-laki',
            'pendidikan_terakhir' => 'Sarjana',
            'pekerjaan' => 'Guru',
            'alamat' => 'Jl. Adi Soemarmo no. 23, Laweyan, Surakarta',
            'umur' => 18
        ]);
    }
}
