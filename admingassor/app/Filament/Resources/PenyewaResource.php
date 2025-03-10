<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenyewaResource\Pages;
use App\Filament\Resources\PenyewaResource\RelationManagers;
use App\Models\Penyewa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenyewaResource extends Resource
{
    protected static ?string $model = Penyewa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no_identitas'),
                Forms\Components\TextInput::make('nama_penyewa'),
                Forms\Components\Select::make('gender')
                ->options([
                    'laki-laki' => 'Laki-Laki',
                    'perempuan' => 'Perempuan',
                ]),
                Forms\Components\TextInput::make('no_hp'),
                Forms\Components\TextInput::make('alamat'),
                Forms\Components\TextInput::make('restuid'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_identitas'),
                Tables\Columns\TextColumn::make('nama_penyewa')->searchable(),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('no_hp'),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('restuid')  ->sortable(),
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
            'index' => Pages\ListPenyewas::route('/'),
            'create' => Pages\CreatePenyewa::route('/create'),
            'edit' => Pages\EditPenyewa::route('/{record}/edit'),
        ];
    }
}
