<?php

namespace App\Filament\Resources\KategoriLaporans;

use App\Filament\Resources\KategoriLaporans\Pages\CreateKategoriLaporan;
use App\Filament\Resources\KategoriLaporans\Pages\EditKategoriLaporan;
use App\Filament\Resources\KategoriLaporans\Pages\ListKategoriLaporans;
use App\Filament\Resources\KategoriLaporans\Pages\ViewKategoriLaporan;
use App\Filament\Resources\KategoriLaporans\Schemas\KategoriLaporanForm;
use App\Filament\Resources\KategoriLaporans\Schemas\KategoriLaporanInfolist;
use App\Filament\Resources\KategoriLaporans\Tables\KategoriLaporansTable;
use App\Models\kategoriLaporan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KategoriLaporanResource extends Resource
{
    protected static ?string $model = kategoriLaporan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTag;


    protected static ?string $recordTitleAttribute = 'Kategori Laporan';

    protected static ?string $navigationLabel = 'Kategori Laporan';
    protected static ?string $pluralModelLabel = 'Kategori Laporan';
    protected static ?string $modelLabel = 'Kategori Laporan';

    public static function form(Schema $schema): Schema
    {
        return KategoriLaporanForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return KategoriLaporanInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KategoriLaporansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKategoriLaporans::route('/'),
            'create' => CreateKategoriLaporan::route('/create'),
            'view' => ViewKategoriLaporan::route('/{record}'),
            'edit' => EditKategoriLaporan::route('/{record}/edit'),
        ];
    }
}
