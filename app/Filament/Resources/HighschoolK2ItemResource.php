<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HighschoolK2ItemResource\Pages;
use App\Models\HighschoolK2Item;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class HighschoolK2ItemResource extends Resource
{
    protected static ?string $model = HighschoolK2Item::class;

    protected static ?string $navigationGroup = 'Highschool K2 Items';

    public static function query(): Builder
    {
        return HighschoolK2Item::query()->latest();
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
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At')->dateTime(),
                Tables\Columns\TextColumn::make('trash')->label('Trash'),
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
                \Filament\Forms\Components\DateTimePicker::make('created_at')->label('Created At'),
                \Filament\Forms\Components\DateTimePicker::make('updated_at')->label('Updated At'),
                \Filament\Forms\Components\TextInput::make('trash')->label('Trash')->required(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHighschoolK2Items::route('/'),
            'create' => Pages\CreateHighschoolK2Item::route('/create'),
            'edit' => Pages\EditHighschoolK2Item::route('/{record}/edit'),
        ];
    }
}
