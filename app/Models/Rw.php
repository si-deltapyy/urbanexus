<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;
    public $table = 'rw';
    public $timestamps = true;
    protected $guarded = [
        // 'id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function rt()
    {
        return $this->hasMany(Rt::class);
    }
}
