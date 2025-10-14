<?php

namespace App\Filament\Resources\KategoriLaporans\Pages;

use App\Filament\Resources\KategoriLaporans\KategoriLaporanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKategoriLaporans extends ListRecords
{
    protected static string $resource = KategoriLaporanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
