<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
    ];

    public function laporans()
    {
        return $this->belongsToMany(Laporan::class, 'kategori_laporan', 'kategori_id', 'laporan_id');
    }
}
