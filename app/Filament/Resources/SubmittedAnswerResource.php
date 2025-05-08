<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubmittedAnswerResource\Pages;
use App\Models\SubmittedAnswer;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class SubmittedAnswerResource extends Resource
{
    protected static ?string $model = SubmittedAnswer::class;

    protected static ?string $navigationGroup = 'Submitted Answers';

    public static function query(): Builder
    {
        return SubmittedAnswer::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('user_id')->label('User ID'),
                Tables\Columns\TextColumn::make('question_id')->label('Question ID'),
                Tables\Columns\TextColumn::make('user_response')->label('User Response')->limit(50),
                Tables\Columns\TextColumn::make('choice_id')->label('Choice ID'),
                Tables\Columns\TextColumn::make('is_user_correct_answer')->label('Is Correct'),
                Tables\Columns\TextColumn::make('marking_scheme_answer')->label('Marking Scheme Answer')->limit(50),
                Tables\Columns\TextColumn::make('chat_gpt_answer')->label('ChatGPT Answer')->limit(50),
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
                \Filament\Forms\Components\TextInput::make('user_id')->label('User ID')->required(),
                \Filament\Forms\Components\TextInput::make('question_id')->label('Question ID')->required(),
                \Filament\Forms\Components\Textarea::make('user_response')->label('User Response')->required(),
                \Filament\Forms\Components\TextInput::make('choice_id')->label('Choice ID')->required(),
                \Filament\Forms\Components\TextInput::make('is_user_correct_answer')->label('Is Correct')->required(),
                \Filament\Forms\Components\Textarea::make('marking_scheme_answer')->label('Marking Scheme Answer')->required(),
                \Filament\Forms\Components\Textarea::make('chat_gpt_answer')->label('ChatGPT Answer')->required(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubmittedAnswers::route('/'),
            'create' => Pages\CreateSubmittedAnswer::route('/create'),
            'edit' => Pages\EditSubmittedAnswer::route('/{record}/edit'),
        ];
    }
}
