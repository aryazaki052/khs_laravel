<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
    protected $table = 'proker';
    protected $fillable = [
        'gambar_proker', 'nama_proker', 'keterangan_proker'
    ];
    protected $hidden = [];
    use HasFactory;
    use HasFactory;
}
