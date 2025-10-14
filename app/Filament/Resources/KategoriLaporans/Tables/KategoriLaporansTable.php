<?php

namespace App\Filament\Resources\KategoriLaporans\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KategoriLaporansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('nama_kategori')->label('Nama Kategori')->searchable()->sortable(),
                TextColumn::make('deskripsi')->label('Deskripsi')->limit(50)->searchable()->sortable(),
                TextColumn::make('nomor_petugas')->label('Nomor Petugas')->searchable()->sortable(),
                TextColumn::make('nomor_kades')->label('Nomor Kades')->searchable()->sortable(),
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
