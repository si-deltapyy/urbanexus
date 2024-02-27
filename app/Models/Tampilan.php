<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tampilan extends Model
{
    use HasFactory;
    public $table = 'slider';
    public $timestamps = true;
    protected $guarded = ['id'];
}
