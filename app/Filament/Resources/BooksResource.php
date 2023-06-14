<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BooksResource\Pages;
use App\Filament\Resources\BooksResource\RelationManagers;
use App\Models\Books;
use App\Models\Category;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BooksResource extends Resource
{
    protected static ?string $model = Books::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul_buku'),
                TextInput::make('penulis_buku'),
                TextInput::make('penerbit_buku'),
                DatePicker::make('tanggal_rilis'),
                Select::make('id_kategori')
                    ->label('Kategori Buku')
                    ->options(function (callable $get) {
                        return Category::all()->pluck('nama_kategori', 'id')->toArray();
                    })->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_buku'),
                TextColumn::make('penulis_buku'),
                TextColumn::make('penerbit_buku'),
                TextColumn::make('tanggal_rilis'),
                TextColumn::make('category.nama_kategori')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBooks::route('/create'),
            'edit' => Pages\EditBooks::route('/{record}/edit'),
        ];
    }    
}
