<?php

namespace App\Filament\Resources\Laporans\Pages;

use App\Filament\Resources\Laporans\LaporanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Http;

class EditLaporan extends EditRecord
{
    protected static string $resource = LaporanResource::class;

    protected function afterSave(): void
    {
        $laporan = $this->record;

        // Kirim notifikasi jika status berubah ke 'selesai'
        if ($laporan->wasChanged('status') && $laporan->status === 'selesai') {
            $pesan = "*Laporan Anda Telah Selesai ✅*\n\n" .
                "Kode Laporan: {$laporan->kode_laporan}\n" .
                "Judul: {$laporan->judul}\n" .
                "Status: *Selesai*\n\n" .
                "Terima kasih telah melaporkan! 🙏";

            Http::withHeaders([
                'Authorization' => env('FONNTE_API_KEY'),
            ])->post('https://api.fonnte.com/send', [
                'target' => $laporan->nomor_wa,
                'message' => $pesan,
            ]);
        }
    }
}
