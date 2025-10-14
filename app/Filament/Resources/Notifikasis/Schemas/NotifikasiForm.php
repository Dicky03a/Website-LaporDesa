<?php

namespace App\Filament\Resources\Notifikasis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class NotifikasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('laporan_id')
                    ->label('Laporan ID')
                    ->required()
                    ->maxLength(255),
                TextInput::make('pesan')
                    ->label('Pesan Notifikasi')
                    ->required()
                    ->maxLength(65535),
                TextInput::make('waktu_kirim')
                    ->label('Waktu Kirim Notifikasi')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
