<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuizResponseResource\Pages;
use App\Models\QuizResponse;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class QuizResponseResource extends Resource
{
    protected static ?string $model = QuizResponse::class;

    protected static ?string $navigationGroup = 'Quiz Responses';

    public static function query(): Builder
    {
        return QuizResponse::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('question_id')->label('Question ID'),
                Tables\Columns\TextColumn::make('choice_id')->label('Choice ID'),
                Tables\Columns\TextColumn::make('is_user_correct_answer')->label('Is User Correct Answer'),
                Tables\Columns\TextColumn::make('user_id')->label('User ID'),
                Tables\Columns\TextColumn::make('lesson_id')->label('Lesson ID'),
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
                \Filament\Forms\Components\TextInput::make('choice_id')->label('Choice ID')->required(),
                \Filament\Forms\Components\TextInput::make('is_user_correct_answer')->label('Is User Correct Answer')->required(),
                \Filament\Forms\Components\TextInput::make('user_id')->label('User ID')->required(),
                \Filament\Forms\Components\TextInput::make('lesson_id')->label('Lesson ID')->required(),
                \Filament\Forms\Components\DateTimePicker::make('created_at')->label('Created At'),
                \Filament\Forms\Components\DateTimePicker::make('updated_at')->label('Updated At'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuizResponses::route('/'),
            'create' => Pages\CreateQuizResponse::route('/create'),
            'edit' => Pages\EditQuizResponse::route('/{record}/edit'),
        ];
    }
}
