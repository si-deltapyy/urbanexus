<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    public $table = 'pertanyaan';
    public $timestamps = true;
    protected $guarded = ['id'];

    public function opsi_jawaban()
    {
        return $this->hasMany(OpsiJawaban::class);
    }
    public function respon_kuisioner()
    {
        return $this->hasMany(ResponKuisioner::class);
    }
}
