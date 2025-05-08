<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubTopicResource\Pages;
use App\Models\SubTopic;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class SubTopicResource extends Resource
{
    protected static ?string $model = SubTopic::class;

    protected static ?string $navigationGroup = 'Lesson Management';
    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function query(): Builder
    {
        return SubTopic::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('topic_id')->label('Topic ID'),
                Tables\Columns\TextColumn::make('description')->label('Description')->limit(50),
                Tables\Columns\TextColumn::make('metadescription')->label('Meta Description')->limit(50),
                Tables\Columns\TextColumn::make('alias')->label('Alias'),
                Tables\Columns\TextColumn::make('created_by')->label('Created By'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At')->dateTime(),
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
                \Filament\Forms\Components\TextInput::make('topic_id')->label('Topic ID')->required(),
                \Filament\Forms\Components\Textarea::make('description')->label('Description')->required(),
                \Filament\Forms\Components\Textarea::make('metadescription')->label('Meta Description')->required(),
                \Filament\Forms\Components\TextInput::make('alias')->label('Alias')->required(),
                \Filament\Forms\Components\TextInput::make('created_by')->label('Created By')->required(),
                \Filament\Forms\Components\TextInput::make('status')->label('Status')->required(),
                \Filament\Forms\Components\DateTimePicker::make('created_at')->label('Created At'),
                \Filament\Forms\Components\DateTimePicker::make('updated_at')->label('Updated At'),
                \Filament\Forms\Components\TextInput::make('modified_by')->label('Modified By')->required(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubTopics::route('/'),
            'create' => Pages\CreateSubTopic::route('/create'),
            'edit' => Pages\EditSubTopic::route('/{record}/edit'),
        ];
    }
}
