<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'judul_laporan',
        'deskripsi',
    ];

    public function kategoris()
    {
        return $this->belongsToMany(Kategori::class, 'kategori_laporan', 'laporan_id', 'kategori_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
