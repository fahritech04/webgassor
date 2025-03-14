<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenyewaanResource\Pages;
use App\Filament\Resources\PenyewaanResource\RelationManagers;
use App\Models\Sewa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenyewaanResource extends Resource
{
    protected static ?string $model = Sewa::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';

    protected static ?string $navigationLabel = 'Penyewaan';

    protected static ?string $pluralModelLabel = 'Penyewaan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('penyewa_id')
                ->label('Nama Penyewa')
                ->relationship('penyewa', 'nama_penyewa')
                ->required(),
                Forms\Components\Select::make('motor_id')
                ->label('Jenis Motor')
                ->relationship('motor', 'nama')
                ->required(),
                Forms\Components\DatePicker::make('tanggal_sewa')
                ->label('Tanggal Sewa')
                ->required(),
                Forms\Components\DatePicker::make('tanggal_kembali')
                ->label('Tanggal Kembali')
                ->required(),
                Forms\Components\TextArea::make('catatan')
                ->label('Catatan')
                ->required(),
                Forms\Components\TextInput::make('total_biaya')->numeric()
                ->label('Total Biaya')
                ->required(),
                Forms\Components\TextInput::make('status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sewa_uuid')
                ->label('UID'),
                Tables\Columns\TextColumn::make('penyewa_id')
                ->label('ID Penyewa'),
                Tables\Columns\TextColumn::make('motor_id')
                ->label('ID Motor'),
                Tables\Columns\TextColumn::make('tanggal_sewa')
                ->label('Tanggal Sewa'),
                Tables\Columns\TextColumn::make('tanggal_kembali')
                ->label('Tanggal Kembali'),
                Tables\Columns\TextColumn::make('status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListPenyewaans::route('/'),
            'create' => Pages\CreatePenyewaan::route('/create'),
            'edit' => Pages\EditPenyewaan::route('/{record}/edit'),
        ];
    }
}
