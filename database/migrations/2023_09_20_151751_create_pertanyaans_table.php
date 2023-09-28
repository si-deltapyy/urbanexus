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
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori_pertanyaan', ['Sebelum Bencana', 'Terjadi Bencana', 'Sesudah Bencana']);
            $table->text('pertanyaan');
            $table->enum('jenis_pertanyaan', ['Radio', 'Select', 'Date', 'Text', 'Image', 'Title', 'Time']);
            // $table->text('jawaban');
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
        Schema::dropIfExists('pertanyaan');
    }
};
