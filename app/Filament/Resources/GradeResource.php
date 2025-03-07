<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GradeResource\Pages;
use App\Models\Grade;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class GradeResource extends Resource
{
    protected static ?string $model = Grade::class;

    protected static ?string $navigationGroup = 'Grades';

    public static function query(): Builder
    {
        return Grade::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('type')->label('Type'),
                Tables\Columns\TextColumn::make('alias')->label('Alias'),
                Tables\Columns\TextColumn::make('level_id')->label('Level ID'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At')->dateTime(),
                Tables\Columns\TextColumn::make('description')->label('Description')->limit(50),
                Tables\Columns\TextColumn::make('metadescription')->label('Meta Description')->limit(50),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('created_by')->label('Created By'),
                Tables\Columns\TextColumn::make('modified_by')->label('Modified By'),
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
                \Filament\Forms\Components\TextInput::make('type')->label('Type')->required(),
                \Filament\Forms\Components\TextInput::make('alias')->label('Alias')->required(),
                \Filament\Forms\Components\TextInput::make('level_id')->label('Level ID')->required()->numeric(),
                \Filament\Forms\Components\Textarea::make('description')->label('Description')->required(),
                \Filament\Forms\Components\Textarea::make('metadescription')->label('Meta Description')->required(),
                \Filament\Forms\Components\TextInput::make('status')->label('Status')->required(),
                \Filament\Forms\Components\TextInput::make('created_by')->label('Created By')->required()->numeric(),
                \Filament\Forms\Components\TextInput::make('modified_by')->label('Modified By')->numeric(),
                \Filament\Forms\Components\TextInput::make('created_at')->label('Created At')->dateTime()->disabled(),
                \Filament\Forms\Components\TextInput::make('updated_at')->label('Updated At')->dateTime()->disabled(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGrades::route('/'),
            'create' => Pages\CreateGrade::route('/create'),
            'edit' => Pages\EditGrade::route('/{record}/edit'),
        ];
    }
}
