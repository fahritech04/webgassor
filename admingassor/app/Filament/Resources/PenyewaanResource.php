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
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\ImageEntry;


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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Detail Transaksi')
                    ->schema([
                        TextEntry::make('sewa_uuid')->label('UID'),
                        TextEntry::make('tanggal_sewa')->label('Tanggal Sewa')->dateTime(),
                        TextEntry::make('tanggal_kembali')->label('Tanggal Kembali')->dateTime(),
                        TextEntry::make('catatan')->label('Catatan'),
                        TextEntry::make('total_biaya')->label('Total Bayar')->money('idr', true),
                        TextEntry::make('status')->label('Status')
                    ])->columns(2),

                Section::make('Detail Motor')
                    ->schema([
                        TextEntry::make('motor.mtruid')->label('UID'),
                        TextEntry::make('motor.nama')->label('Nama Motor'),
                        TextEntry::make('motor.kategori')->label('Kategori'),
                        TextEntry::make('motor.catatan')->label('Catatan Penjual'),
                        TextEntry::make('motor.no_polisi')->label('Nomor Polisi'),
                        TextEntry::make('motor.harga')->label('Harga Sewa')->money('idr', true),
                        TextEntry::make('motor.status')->label('Status')
                    ])->columns(2),

                Section::make('Detail Penyewa')
                    ->schema([
                        TextEntry::make('penyewa.restuid')->label('UID'),
                        TextEntry::make('penyewa.no_identitas')->label('No Identitas'),
                        TextEntry::make('penyewa.nama_penyewa')->label('Nama'),
                        TextEntry::make('penyewa.gender')->label('Gender'),
                        TextEntry::make('penyewa.no_hp')->label('Nomor Telepon'),
                        TextEntry::make('penyewa.alamat')->label('Alamat')
                    ])->columns(2),
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
            'view' => Pages\ViewPenyewaan::route('/{record}'),
            'edit' => Pages\EditPenyewaan::route('/{record}/edit'),
        ];
    }
}
