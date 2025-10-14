<?php

namespace App\Filament\Resources\Laporans\Schemas;

use App\Models\kategoriLaporan;
use Faker\Core\File;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LaporanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->label('Judul Laporan')
                    ->required()
                    ->maxLength(255),
                Select::make('kategori_id')
                    ->options(kategoriLaporan::pluck('nama_kategori', 'id')->toArray())
                    ->required(),
                TextInput::make('nomor_wa')
                    ->label('Nomor WhatsApp')
                    ->required()
                    ->maxLength(255),
                Textarea::make('deskripsi')
                    ->label('Deskripsi Laporan')
                    ->required()
                    ->maxLength(255),
                TextInput::make('lokasi')
                    ->label('Lokasi')
                    ->maxLength(255),
                FileUpload::make('foto')
                    ->label('Foto')
                    ->required()
                    ->maxSize(1024)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),
            ]);
    }
}
