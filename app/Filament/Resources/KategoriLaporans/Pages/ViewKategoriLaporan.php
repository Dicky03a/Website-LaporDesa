<?php

namespace App\Filament\Resources\KategoriLaporans\Pages;

use App\Filament\Resources\KategoriLaporans\KategoriLaporanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKategoriLaporan extends ViewRecord
{
    protected static string $resource = KategoriLaporanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
