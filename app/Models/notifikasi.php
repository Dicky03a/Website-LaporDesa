<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notifikasi extends Model
{
    protected $fillable = [
        'laporan_id',
        'pesan',
        'waktu_kirim',
    ];

    public function laporan()
    {
        return $this->belongsTo(laporan::class);
    }
}
