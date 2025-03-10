<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MotorResource\Pages;
use App\Filament\Resources\MotorResource\RelationManagers;
use App\Models\Motor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MotorResource extends Resource
{
    protected static ?string $model = Motor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('mtruid'),
                Forms\Components\TextInput::make('image_motor'),
                Forms\Components\TextInput::make('nama'),
                Forms\Components\TextInput::make('kategori'),
                Forms\Components\TextInput::make('catatan'),
                Forms\Components\TextInput::make('harga'),
                Forms\Components\TextInput::make('no_polisi'),
                Forms\Components\TextInput::make('status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('mtruid'),
                Tables\Columns\TextColumn::make('image_motor'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('kategori'),
                Tables\Columns\TextColumn::make('catatan'),
                Tables\Columns\TextColumn::make('harga'),
                Tables\Columns\TextColumn::make('no_polisi'),
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
            'index' => Pages\ListMotors::route('/'),
            'create' => Pages\CreateMotor::route('/create'),
            'edit' => Pages\EditMotor::route('/{record}/edit'),
        ];
    }
}
