<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik')->unique();
            $table->string('no_kk');
            $table->integer('no_rt');
            $table->integer('no_rw');
            $table->enum('status', ['Meninggal', 'Hidup']);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->enum('gol_darah', ['A', 'AB', 'O', 'B']);
            $table->enum('status_kawin', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu' . 'Budha', 'Konghucu']);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('pendidikan_terakhir', ['Tidak Sekolah', 'SD/sederajat', 'SMP/sederajat', 'SMA/sederajat', 'Diploma', 'Sarjana']);
            $table->text('pekerjaan');
            $table->text('alamat');
            $table->integer('umur')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}
