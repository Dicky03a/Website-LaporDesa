<?php

namespace App\Filament\Resources\Notifikasis\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class NotifikasisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('laporan.judul')->label('Nama Pengirim')->limit(50)->wrap()->searchable(),
                TextColumn::make('pesan')->label('Pesan')->limit(50)->wrap()->searchable(),
                TextColumn::make('waktu_kirim')->label('Waktu Kirim')->dateTime('d M Y H:i')->sortable(),
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
