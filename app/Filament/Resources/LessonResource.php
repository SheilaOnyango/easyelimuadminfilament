<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonResource\Pages;
use App\Models\Lesson;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class LessonResource extends Resource
{
    protected static ?string $model = Lesson::class;

    protected static ?string $navigationGroup = 'Lessons';

    public static function query(): Builder
    {
        return Lesson::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('title')->label('Title'),
                Tables\Columns\TextColumn::make('lesson_objectives')->label('Lesson Objectives')->limit(50),
                Tables\Columns\TextColumn::make('lesson_notes')->label('Lesson Notes')->limit(50),
                Tables\Columns\TextColumn::make('video_url')->label('Video URL'),
                Tables\Columns\TextColumn::make('animation_ur')->label('Animation URL'),
                Tables\Columns\TextColumn::make('alias')->label('Alias'),
                Tables\Columns\TextColumn::make('is_free')->label('Is Free'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('created_by')->label('Created By'),
                Tables\Columns\TextColumn::make('modified_by')->label('Modified By'),
                Tables\Columns\TextColumn::make('sub_topic_id')->label('Sub Topic ID'),
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
                \Filament\Forms\Components\Textarea::make('lesson_objectives')->label('Lesson Objectives')->required(),
                \Filament\Forms\Components\Textarea::make('lesson_notes')->label('Lesson Notes')->required(),
                \Filament\Forms\Components\TextInput::make('video_url')->label('Video URL')->required(),
                \Filament\Forms\Components\TextInput::make('animation_ur')->label('Animation URL')->required(),
                \Filament\Forms\Components\TextInput::make('alias')->label('Alias')->required(),
                \Filament\Forms\Components\TextInput::make('is_free')->label('Is Free')->required(),
                \Filament\Forms\Components\TextInput::make('status')->label('Status')->required(),
                \Filament\Forms\Components\TextInput::make('created_by')->label('Created By')->required(),
                \Filament\Forms\Components\TextInput::make('modified_by')->label('Modified By')->required(),
                \Filament\Forms\Components\TextInput::make('sub_topic_id')->label('Sub Topic ID')->required(),
                \Filament\Forms\Components\DateTimePicker::make('created_at')->label('Created At'),
                \Filament\Forms\Components\DateTimePicker::make('updated_at')->label('Updated At'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLessons::route('/'),
            'create' => Pages\CreateLesson::route('/create'),
            'edit' => Pages\EditLesson::route('/{record}/edit'),
        ];
    }
}
