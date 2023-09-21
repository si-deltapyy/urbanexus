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
        Schema::create('kuisioner_respons', function (Blueprint $table) {
            $table->id();
            $table->integer('code_pertanyaan');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('rw_id')->constrained('rw');
            $table->foreignId('rt_id')->constrained('rt');
            $table->text('resp1');
            $table->text('resp2');
            $table->text('resp3');
            $table->text('resp4');
            $table->text('resp5');
            $table->text('resp6');
            $table->text('resp7');
            $table->text('resp8');
            $table->text('resp9');
            $table->text('resp10');
            $table->text('resp11');
            $table->text('resp12');
            $table->text('resp13');
            $table->text('resp14');
            $table->text('resp15');
            $table->text('resp16');
            $table->text('resp17');
            $table->text('resp18');
            $table->text('resp19');
            $table->text('resp20');
            $table->text('resp21');
            $table->text('resp22');
            $table->text('resp23');
            $table->text('resp24');
            $table->text('resp25');
            $table->text('resp26');
            $table->text('resp27');
            $table->text('resp28');
            $table->text('resp29');
            $table->text('resp30');
            $table->text('resp31');
            $table->text('resp32');
            $table->text('resp33');
            $table->text('resp34');
            $table->text('resp35');
            $table->text('resp36');
            $table->text('resp37');
            $table->text('resp38');
            $table->text('resp39');
            $table->text('resp40');
            $table->text('resp41');
            $table->text('resp42');
            $table->text('resp43');
            $table->text('resp44');
            $table->text('resp45');
            $table->text('resp46');
            $table->text('resp47');
            $table->text('resp48');
            $table->text('resp49');
            $table->text('resp50');
            $table->text('resp51');
            $table->text('resp52');
            $table->text('resp53');
            $table->text('resp54');
            $table->text('resp55');
            $table->text('resp56');
            $table->text('resp57');
            $table->text('resp58');
            $table->text('resp59');
            $table->text('resp60');
            $table->text('resp61');
            $table->text('resp62');
            $table->text('resp63');
            $table->text('resp64');
            $table->text('resp65');
            $table->text('resp66');
            $table->text('resp67');
            $table->text('resp68');
            $table->text('resp69');
            $table->text('resp70');
            $table->text('resp71');
            $table->text('resp72');
            $table->text('resp73');
            $table->text('resp74');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuisioner_respons');
    }
};
