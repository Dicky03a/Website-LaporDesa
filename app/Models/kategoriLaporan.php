<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriLaporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
        'deskripsi',
        'nomor_petugas',
        'nomor_kades',
    ];

    public function laporans()
    {
        return $this->hasMany(laporan::class, 'kategori_id');
    }
}
