<?php

namespace App\Filament\Resources\KategoriLaporans\Pages;

use App\Filament\Resources\KategoriLaporans\KategoriLaporanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKategoriLaporan extends EditRecord
{
    protected static string $resource = KategoriLaporanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
