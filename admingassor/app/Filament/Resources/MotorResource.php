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
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\ImageEntry;

class MotorResource extends Resource
{
    protected static ?string $model = Motor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Data Motor';

    protected static ?string $navigationGroup = 'Manajemen Data';

    protected static ?string $pluralModelLabel = 'Data Motor';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image_motor')
                ->label('Gambar Motor')
                ->multiple()
                ->directory('images-motors'),
                Forms\Components\TextInput::make('nama')
                ->label('Nama Motor')
                ->required(),
                Forms\Components\TextInput::make('no_polisi')
                ->label('Nomor Polisi')
                ->required(),
                Forms\Components\Select::make('kategori')
                ->label('Kategori Motor')
                ->options([
                    'Motor Matik' => 'Motor Matik',
                    'Motor Bebek' => 'Motor Bebek',
                ])
                ->required(),
                Forms\Components\TextArea::make('catatan')
                ->label('Catatan')
                ->required(),
                Forms\Components\TextInput::make('harga')->numeric()
                ->label('Harga per-hari')
                ->required(),
                Forms\Components\TextInput::make('status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('mtruid')
                ->label('UID'),
                Tables\Columns\ImageColumn::make('image_motor')
                ->label('Gambar')
                ->circular(),
                Tables\Columns\TextColumn::make('nama')
                ->label('Nama Motor'),
                Tables\Columns\TextColumn::make('kategori')
                ->label('kategori Motor'),
                Tables\Columns\TextColumn::make('harga')
                ->label('Harga')->money('idr', true),
                Tables\Columns\TextColumn::make('no_polisi')
                ->label('No. Polisi'),
                Tables\Columns\TextColumn::make('status')
                ->label('Status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Detail Motor')
                    ->schema([
                        TextEntry::make('mtruid')->label('UID'),
                        TextEntry::make('nama')->label('Nama Motor'),
                        TextEntry::make('kategori')->label('Kategori'),
                        TextEntry::make('catatan')->label('Catatan Penjual'),
                        TextEntry::make('no_polisi')->label('Nomor Polisi'),
                        TextEntry::make('harga')->money('idr', true)->label('Harga Sewa'),
                        TextEntry::make('status')->label('Status'),
                        ImageEntry::make('image_motor')->label('Gambar Motor'),
                    ])->columns(2)
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
            'view' => Pages\ViewMotor::route('/{record}'),
            'edit' => Pages\EditMotor::route('/{record}/edit'),
        ];
    }
}
