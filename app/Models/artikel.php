<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;
    
    protected $table= 'artikel';

    protected $fillable = [
        'judul',
        'slug',
        'kategori_id',
        'user_id',
        'gambar_artikel',
        'file_dokumen',
        'is_active',
        'views',
        'body'
    ];

    protected $hidden = [];


    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
}
