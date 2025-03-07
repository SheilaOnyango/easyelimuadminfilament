<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HighschoolCategoryResource\Pages;
use App\Models\HighschoolCategory;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class HighschoolCategoryResource extends Resource
{
    protected static ?string $model = HighschoolCategory::class;

    protected static ?string $navigationGroup = 'Highschool Categories';

    public static function query(): Builder
    {
        return HighschoolCategory::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('alias')->label('Alias'),
                Tables\Columns\TextColumn::make('description')->label('Description')->limit(50),
                Tables\Columns\TextColumn::make('parent_id')->label('Parent ID'),
                Tables\Columns\TextColumn::make('published')->label('Published'),
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
                \Filament\Forms\Components\TextInput::make('name')->label('Name')->required(),
                \Filament\Forms\Components\TextInput::make('alias')->label('Alias')->required(),
                \Filament\Forms\Components\Textarea::make('description')->label('Description')->required(),
                \Filament\Forms\Components\TextInput::make('parent_id')->label('Parent ID')->numeric(),
                \Filament\Forms\Components\TextInput::make('published')->label('Published')->required(),
                \Filament\Forms\Components\TextInput::make('created_at')->label('Created At')->dateTime()->disabled(),
                \Filament\Forms\Components\TextInput::make('updated_at')->label('Updated At')->dateTime()->disabled(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHighschoolCategories::route('/'),
            'create' => Pages\CreateHighschoolCategory::route('/create'),
            'edit' => Pages\EditHighschoolCategory::route('/{record}/edit'),
        ];
    }
}
