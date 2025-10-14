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
                TextInput::make('kode_laporan')
                    ->label('Kode Laporan')
                    ->disabled()
                    ->dehydrated(false)
                    ->columnSpanFull(),

                TextInput::make('judul')
                    ->label('Judul')
                    ->required(),

                Select::make('kategori_id')
                    ->label('Kategori')
                    ->options(KategoriLaporan::pluck('nama_kategori', 'id'))
                    ->required(),

                TextInput::make('nomor_wa')
                    ->label('Nomor Pelapor')
                    ->disabled(),

                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->rows(4)
                    ->disabled(),

                TextInput::make('lokasi')
                    ->label('Lokasi')
                    ->disabled(),

                FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->directory('laporan')
                    ->disk('public')
                    ->visibility('public')
                    ->disabled(),

                Select::make('status')
                    ->label('Status Laporan')
                    ->options([
                        'pending' => 'Pending',
                        'proses' => 'Proses',
                        'selesai' => 'Selesai',
                    ])
                    ->default('pending')
                    ->required()
                    ->helperText('Ubah status laporan untuk menandai progres.'),
            ]);
    }
}
