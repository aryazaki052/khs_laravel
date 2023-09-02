<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $table = 'pengurus';
    protected $fillable = [
        'gambar_pengurus', 'nama_pengurus', 'jabatan'
    ];
    protected $hidden = [];
    use HasFactory;
}
