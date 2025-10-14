<?php

namespace App\Filament\Resources\KategoriLaporans\Schemas;

use Dom\Text;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KategoriLaporanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_kategori')
                    ->label('Nama Kategori')
                    ->required()
                    ->maxLength(255),
                TextInput::make('deskripsi')
                    ->label('Deskripsi')
                    ->maxLength(65535),
                TextInput::make('nomor_petugas')
                    ->label('Nomor Petugas')
                    ->maxLength(255),
                TextInput::make('nomor_kades')
                    ->label('Nomor Kades')
                    ->maxLength(255),
            ]);
    }
}
