<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MultipleChoiceResource\Pages;
use App\Models\MultipleChoice;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class MultipleChoiceResource extends Resource
{
    protected static ?string $model = MultipleChoice::class;

    protected static ?string $navigationGroup = 'Multiple Choices';

    public static function query(): Builder
    {
        return MultipleChoice::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('question_id')->label('Question ID'),
                Tables\Columns\TextColumn::make('value')->label('Value'),
                Tables\Columns\TextColumn::make('is_correct')->label('Is Correct'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('created_by')->label('Created By'),
                Tables\Columns\TextColumn::make('modified_by')->label('Modified By'),
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
                \Filament\Forms\Components\TextInput::make('question_id')->label('Question ID')->required(),
                \Filament\Forms\Components\TextInput::make('value')->label('Value')->required(),
                \Filament\Forms\Components\TextInput::make('is_correct')->label('Is Correct')->required(),
                \Filament\Forms\Components\TextInput::make('status')->label('Status')->required(),
                
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMultipleChoices::route('/'),
            'create' => Pages\CreateMultipleChoice::route('/create'),
            'edit' => Pages\EditMultipleChoice::route('/{record}/edit'),
        ];
    }
}
