<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    protected $fillable = [
        'judul',
        'kategori_id',
        'nomor_wa',
        'deskripsi',
        'lokasi',
        'foto',
    ];

    public function kategori()
    {
        return $this->belongsTo(kategoriLaporan::class, 'kategori_id');
    }

    public function notifikasis()
    {
        return $this->hasMany(notifikasi::class);
    }
}
