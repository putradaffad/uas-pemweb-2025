<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\KategoriBarangResource\Pages;
use App\Models\KategoriBarang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class KategoriBarangResource extends Resource
{
    protected static ?string $model = KategoriBarang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manajemen Stok';
    protected static ?string $navigationLabel = 'Kategori Barang';
    protected static ?string $pluralModelLabel = 'Kategori Barang';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nama')
                ->label('Nama Kategori')
                ->required()
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('nama')
                ->label('Nama Kategori')
                ->searchable()
                ->sortable(),

            TextColumn::make('created_at')
                ->label('Dibuat')
                ->date('d M Y')
                ->sortable(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKategoriBarangs::route('/'),
            'create' => Pages\CreateKategoriBarang::route('/create'),
            'edit' => Pages\EditKategoriBarang::route('/{record}/edit'),
        ];
    }
}
