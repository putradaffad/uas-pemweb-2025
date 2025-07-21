<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TransaksiResource\Pages;
use App\Models\Transaksi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrows-right-left'; // ganti dari arrow-left-right
    protected static ?string $navigationGroup = 'Manajemen Stok';
    protected static ?string $navigationLabel = 'Transaksi';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('barang_id')
                ->relationship('barang', 'nama')
                ->label('Nama Barang')
                ->required(),

            Select::make('jenis')
                ->options([
                    'masuk' => 'Masuk',
                    'keluar' => 'Keluar',
                ])
                ->required(),

            TextInput::make('jumlah')
                ->numeric()
                ->required()
                ->label('Jumlah'),

            DatePicker::make('tanggal')
                ->required(),

            TextInput::make('keterangan')
                ->maxLength(255)
                ->label('Keterangan')
                ->placeholder('Opsional'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('barang.nama')->label('Nama Barang'),
            Tables\Columns\TextColumn::make('jenis')->badge(),
            Tables\Columns\TextColumn::make('jumlah'),
            Tables\Columns\TextColumn::make('tanggal')->date(),
            Tables\Columns\TextColumn::make('keterangan')->limit(30),
            Tables\Columns\TextColumn::make('created_at')->since()->label('Dibuat'),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}
