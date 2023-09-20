<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kuisioner_1', function (Blueprint $table) {
            $table->id();
            $table->integer('code_pertanyaan');
            $table->text('pertanyaan');
            $table->enum('jenis_pertanyaan', ['radio', 'select', 'date', 'text', 'image']);
            $table->text('jawaban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuisioner_1');
    }
};
