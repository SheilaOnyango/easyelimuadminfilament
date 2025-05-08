<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopicSubscriptionResource\Pages;
use App\Models\TopicSubscription;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class TopicSubscriptionResource extends Resource
{
    protected static ?string $model = TopicSubscription::class;

    protected static ?string $navigationGroup = 'Lesson Management';

    public static function query(): Builder
    {
        return TopicSubscription::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('topic_id')->label('Topic ID'),
                Tables\Columns\TextColumn::make('payment_id')->label('Payment ID'),
                Tables\Columns\TextColumn::make('user_id')->label('User ID'),
                Tables\Columns\TextColumn::make('start_date')->label('Start Date')->dateTime(),
                Tables\Columns\TextColumn::make('end_date')->label('End Date')->dateTime(),
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
                \Filament\Forms\Components\TextInput::make('topic_id')->label('Topic ID')->required(),
                \Filament\Forms\Components\TextInput::make('payment_id')->label('Payment ID')->required(),
                \Filament\Forms\Components\TextInput::make('user_id')->label('User ID')->required(),
                \Filament\Forms\Components\DateTimePicker::make('start_date')->label('Start Date')->required(),
                \Filament\Forms\Components\DateTimePicker::make('end_date')->label('End Date')->required(),
                \Filament\Forms\Components\DateTimePicker::make('created_at')->label('Created At'),
                \Filament\Forms\Components\DateTimePicker::make('updated_at')->label('Updated At'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTopicSubscriptions::route('/'),
            'create' => Pages\CreateTopicSubscription::route('/create'),
            'edit' => Pages\EditTopicSubscription::route('/{record}/edit'),
        ];
    }
}
