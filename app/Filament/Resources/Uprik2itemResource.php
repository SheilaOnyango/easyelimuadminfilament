<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Uprik2itemResource\Pages;
use App\Models\Uprik2item;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class Uprik2itemResource extends Resource
{
    protected static ?string $model = Uprik2item::class;

    protected static ?string $navigationGroup = 'Upri K2 Items';

    public static function query(): Builder
    {
        return Uprik2item::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('title')->label('Title'),
                Tables\Columns\TextColumn::make('alias')->label('Alias'),
                Tables\Columns\TextColumn::make('catid')->label('Category ID'),
                Tables\Columns\TextColumn::make('published')->label('Published'),
                Tables\Columns\TextColumn::make('introtext')->label('Intro Text')->limit(50),
                Tables\Columns\TextColumn::make('metadesc')->label('Meta Description')->limit(50),
                Tables\Columns\TextColumn::make('trash')->label('Trash'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At')->dateTime(),
            ])
            ->filters([])
            ->actions([])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function form(\Filament\Forms\Form $form): \Filament\Forms\Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\TextInput::make('title')->label('Title')->required(),
                \Filament\Forms\Components\TextInput::make('alias')->label('Alias')->required(),
                \Filament\Forms\Components\TextInput::make('catid')->label('Category ID')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('published')->label('Published')->required(),
                \Filament\Forms\Components\Textarea::make('introtext')->label('Intro Text')->required(),
                \Filament\Forms\Components\Textarea::make('metadesc')->label('Meta Description')->required(),
                \Filament\Forms\Components\TextInput::make('trash')->label('Trash')->required(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUprik2items::route('/'),
            'create' => Pages\CreateUprik2item::route('/create'),
            'edit' => Pages\EditUprik2item::route('/{record}/edit'),
        ];
    }
}
