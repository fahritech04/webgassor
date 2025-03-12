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
use Filament\Forms\Components\Radio;

class PenyewaResource extends Resource
{
    protected static ?string $model = Penyewa::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    protected static ?string $navigationLabel = 'Data Penyewa';

    protected static ?string $navigationGroup = 'Manajemen Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no_identitas')
                ->label('Nomor Identitas'),
                Forms\Components\TextInput::make('nama_penyewa')
                ->label('Nama Penyewa'),
                Radio::make('gender')
                ->label('Jenis Kelamin')
                ->options([
                    'pria' => 'Pria',
                    'wanita' => 'Wanita'
                ]),
                Forms\Components\TextInput::make('no_hp')
                ->label('Nomor Telepon'),
                Forms\Components\TextInput::make('alamat')
                ->label('Alamat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('restuid')
                ->label('UID'),
                Tables\Columns\TextColumn::make('no_identitas')
                ->label('No. Identitas'),
                Tables\Columns\TextColumn::make('nama_penyewa')
                ->label('Nama'),
                Tables\Columns\TextColumn::make('gender')
                ->label('Jenis Kelamin'),
                Tables\Columns\TextColumn::make('no_hp')
                ->label('No. Telepon'),
                Tables\Columns\TextColumn::make('alamat')
                ->label('Alamat'),
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
