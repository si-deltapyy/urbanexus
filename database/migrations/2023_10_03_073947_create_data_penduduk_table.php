<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penduduk', function (Blueprint $table) {
            $table->id();
            $table->text('no_kk');
            $table->text('nik');
            $table->text('name');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->date('tanggal_lahir');
            $table->text('gol_darah');
            $table->text('agama');
            $table->enum('status_kawin', ['Belum Kawin', 'Kawin']);
            $table->enum('pendidikan_terakhir', ['Tidak Sekolah','SD/sederajat', 'SMP/sederajat', 'SMA/sederajat', 'Diploma', 'Sarjana']);
            $table->text('pekerjaan');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_penduduk');
    }
};
