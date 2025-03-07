<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Models\Feedback;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationGroup = 'Feedbacks';

    public static function query(): Builder
    {
        return Feedback::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('user_id')->label('User ID'),
                Tables\Columns\TextColumn::make('lesson_id')->label('Lesson ID'),
                Tables\Columns\TextColumn::make('parent_id')->label('Parent ID'),
                Tables\Columns\TextColumn::make('rating')->label('Rating'),
                Tables\Columns\TextColumn::make('message')->label('Message')->limit(50),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('edited')->label('Edited'),
                Tables\Columns\TextColumn::make('reported')->label('Reported'),
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
                \Filament\Forms\Components\TextInput::make('user_id')->label('User ID')->required()->numeric(),
                \Filament\Forms\Components\TextInput::make('lesson_id')->label('Lesson ID')->required()->numeric(),
                \Filament\Forms\Components\TextInput::make('parent_id')->label('Parent ID')->numeric(),
                \Filament\Forms\Components\TextInput::make('rating')->label('Rating')->required()->numeric(),
                \Filament\Forms\Components\TextInput::make('message')->label('Message')->required(),
                \Filament\Forms\Components\TextInput::make('status')->label('Status')->required(),
                \Filament\Forms\Components\Checkbox::make('edited')->label('Edited'),
                \Filament\Forms\Components\Checkbox::make('reported')->label('Reported'),
                \Filament\Forms\Components\DateTimePicker::make('created_at')->label('Created At'),
                \Filament\Forms\Components\DateTimePicker::make('updated_at')->label('Updated At'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFeedback::route('/'),
            'create' => Pages\CreateFeedback::route('/create'),
            'edit' => Pages\EditFeedback::route('/{record}/edit'),
        ];
    }
}
