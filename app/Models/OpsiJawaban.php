<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpsiJawaban extends Model
{
    use HasFactory;
    public $table = 'opsi_jawaban';
    public $timestamps = true;
    protected $guarded = ['id'];

    public function kuisioner()
    {
        return $this->belongsTo(Pertanyaan::class);
    }
}
