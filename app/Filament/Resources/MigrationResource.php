<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MigrationResource\Pages;
use App\Models\Migration;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class MigrationResource extends Resource
{
    protected static ?string $model = Migration::class;

    protected static ?string $navigationGroup = 'Migrations';

    public static function query(): Builder
    {
        return Migration::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('migration')->label('Migration'),
                Tables\Columns\TextColumn::make('batch')->label('Batch'),
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
                \Filament\Forms\Components\TextInput::make('migration')->label('Migration')->required(),
                \Filament\Forms\Components\TextInput::make('batch')->label('Batch')->required(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMigrations::route('/'),
            'create' => Pages\CreateMigration::route('/create'),
            'edit' => Pages\EditMigration::route('/{record}/edit'),
        ];
    }
}
