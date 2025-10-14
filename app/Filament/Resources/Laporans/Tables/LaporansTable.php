<?php

namespace App\Filament\Resources\Laporans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\RichEditor\TextColor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LaporansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('judul')->label('Nama Pelapor')->searchable()->sortable(),
                TextColumn::make('kategori.nama_kategori')->label('Kategori')->searchable()->sortable(),
                TextColumn::make('nomor_wa')->label('Nomor WhatsApp')->searchable()->sortable(),
                TextColumn::make('deskripsi')->label('Deskripsi Laporan')->searchable()->sortable(),
                TextColumn::make('lokasi')->label('Lokasi')->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
