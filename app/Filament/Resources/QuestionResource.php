<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionResource\Pages;
use App\Models\Question;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;

    protected static ?string $navigationGroup = 'Questions';

    public static function query(): Builder
    {
        return Question::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('full_question')->label('Full Question')->limit(50),
                Tables\Columns\TextColumn::make('is_multiple')->label('Is Multiple'),
                Tables\Columns\TextColumn::make('alias')->label('Alias'),
                Tables\Columns\TextColumn::make('is_free')->label('Is Free'),
                Tables\Columns\TextColumn::make('answer')->label('Answer')->limit(50),
                Tables\Columns\TextColumn::make('marks')->label('Marks'),
                Tables\Columns\TextColumn::make('created_by')->label('Created By'),
                Tables\Columns\TextColumn::make('modified_by')->label('Modified By'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At')->dateTime(),
                Tables\Columns\TextColumn::make('lesson_id')->label('Lesson ID'),
                Tables\Columns\TextColumn::make('ai_enabled')->label('AI Enabled'),
                Tables\Columns\TextColumn::make('ai_before_prompt')->label('AI Before Prompt')->limit(50),
                Tables\Columns\TextColumn::make('ai_after_prompt')->label('AI After Prompt')->limit(50),
                Tables\Columns\TextColumn::make('exam_subject_id')->label('Exam Subject ID'),
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
                \Filament\Forms\Components\Textarea::make('full_question')->label('Full Question')->required(),
                \Filament\Forms\Components\TextInput::make('is_multiple')->label('Is Multiple')->required(),
                \Filament\Forms\Components\TextInput::make('alias')->label('Alias')->required(),
                \Filament\Forms\Components\TextInput::make('is_free')->label('Is Free')->required(),
                \Filament\Forms\Components\Textarea::make('answer')->label('Answer')->required(),
                \Filament\Forms\Components\TextInput::make('marks')->label('Marks')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('created_by')->label('Created By')->required(),
                \Filament\Forms\Components\TextInput::make('modified_by')->label('Modified By')->required(),
                \Filament\Forms\Components\TextInput::make('status')->label('Status')->required(),
                \Filament\Forms\Components\TextInput::make('lesson_id')->label('Lesson ID')->required(),
                \Filament\Forms\Components\TextInput::make('ai_enabled')->label('AI Enabled')->required(),
                \Filament\Forms\Components\Textarea::make('ai_before_prompt')->label('AI Before Prompt')->required(),
                \Filament\Forms\Components\Textarea::make('ai_after_prompt')->label('AI After Prompt')->required(),
                \Filament\Forms\Components\TextInput::make('exam_subject_id')->label('Exam Subject ID')->required(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }
}
