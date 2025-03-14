<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengembalianResource\Pages;
use App\Filament\Resources\PengembalianResource\RelationManagers;
use App\Models\Sewa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengembalianResource extends Resource
{
    protected static ?string $model = Sewa::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';

    protected static ?string $navigationLabel = 'Pengembalian';

    protected static ?string $pluralModelLabel = 'Pengembalian';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sewa_uuid')->label('UID'),
                Tables\Columns\TextColumn::make('penyewa_id')->label('ID Penyewa'),
                Tables\Columns\TextColumn::make('motor_id')->label('ID Motor'),
                Tables\Columns\TextColumn::make('tanggal_sewa')->label('Tanggal Sewa'),
                Tables\Columns\TextColumn::make('tanggal_kembali')->label('Tanggal Kembali'),
                Tables\Columns\TextColumn::make('total_biaya')->label('Total Bayar')->money('idr', true)
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePengembalians::route('/'),
        ];
    }
}
