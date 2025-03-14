<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SessionResource\Pages;
use App\Models\Session;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class SessionResource extends Resource
{
    protected static ?string $model = Session::class;

    protected static ?string $navigationGroup = 'Sessions';

    public static function query(): Builder
    {
        return Session::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('user_id')->label('User ID'),
                Tables\Columns\TextColumn::make('ip_address')->label('IP Address'),
                Tables\Columns\TextColumn::make('user_agent')->label('User Agent'),
                Tables\Columns\TextColumn::make('payload')->label('Payload'),
                Tables\Columns\TextColumn::make('last_activity')->label('Last Activity')->dateTime(),
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
                \Filament\Forms\Components\TextInput::make('ip_address')->label('IP Address')->required(),
                \Filament\Forms\Components\TextInput::make('user_agent')->label('User Agent')->required(),
                \Filament\Forms\Components\Textarea::make('payload')->label('Payload')->required(),
                \Filament\Forms\Components\DateTimePicker::make('last_activity')->label('Last Activity'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSessions::route('/'),
            'create' => Pages\CreateSession::route('/create'),
            'edit' => Pages\EditSession::route('/{record}/edit'),
        ];
    }
}
