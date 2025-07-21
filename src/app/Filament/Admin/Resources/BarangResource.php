<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BarangResource\Pages;
use App\Models\Barang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class BarangResource extends Resource
{
    protected static ?string $model = Barang::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';
    protected static ?string $navigationGroup = 'Manajemen Stok';
    protected static ?string $navigationLabel = 'Barang';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('kategori_barang_id')
                ->label('Kategori Barang')
                ->relationship('kategori', 'nama')
                ->searchable()
                ->required(),

            TextInput::make('nama')
                ->label('Nama Barang')
                ->required()
                ->maxLength(255),

            FileUpload::make('foto')
                ->label('Foto Barang')
                ->disk('public')
                ->directory('barang')
                ->multiple()
                ->image()
                ->reorderable()
                ->imageCropAspectRatio('1:1') // ✅ Cropper 1:1
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/jpg'])
                ->imagePreviewHeight('150')
                ->maxSize(4096)
                ->visibility('public')
                ->required(),



            TextInput::make('satuan')
                ->label('Satuan')
                ->default('unit')
                ->required(),

            TextInput::make('stok')
                ->label('Stok')
                ->numeric()
                ->default(0)
                ->required(),

            TextInput::make('stok_minimum')
                ->label('Stok Minimum')
                ->numeric()
                ->default(5)
                ->required(),

            Textarea::make('keterangan')
                ->label('Keterangan Produk')
                ->rows(3)
                ->maxLength(1000)
                ->nullable(), // opsional
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            ImageColumn::make('foto')
                ->disk('public')
                ->label('Foto')
                ->height(60)
                ->width(45)
                ->rounded(),

            TextColumn::make('nama')
                ->label('Nama Barang')
                ->searchable(),

            TextColumn::make('kategori.nama')
                ->label('Kategori'),

            TextColumn::make('stok')
                ->label('Stok'),

            TextColumn::make('stok_minimum')
                ->label('Stok Minimum')
                ->badge()
                ->color(fn ($record) => $record->stok < $record->stok_minimum ? 'danger' : 'gray'),

            TextColumn::make('keterangan')
                ->label('Keterangan')
                ->limit(50)
                ->toggleable(),

            TextColumn::make('created_at')
                ->label('Ditambahkan')
                ->dateTime('d M Y'),
        ])
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
            'index' => Pages\ListBarangs::route('/'),
            'create' => Pages\CreateBarang::route('/create'),
            'edit' => Pages\EditBarang::route('/{record}/edit'),
        ];
    }
}
