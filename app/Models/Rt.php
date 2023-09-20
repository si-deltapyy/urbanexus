<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    use HasFactory;
    public $table = 'rt';
    public $timestamps = true;
    protected $guarded = [
        // 'id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function rw()
    {
        return $this->belongsTo(Rw::class);
    }
}
