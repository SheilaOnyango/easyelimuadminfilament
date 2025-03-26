<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationGroup = 'Users';

    public static function query(): Builder
    {
        return User::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('email_verified_at')->label('Email Verified At')->dateTime(),
                Tables\Columns\TextColumn::make('password')->label('Password')->hidden(),
                Tables\Columns\TextColumn::make('remember_token')->label('Remember Token')->hidden(),
                Tables\Columns\TextColumn::make('permissions')->label('Permissions')->limit(50),
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
                \Filament\Forms\Components\TextInput::make('name')->label('Name')->required(),
                \Filament\Forms\Components\TextInput::make('email')->label('Email')->email()->required(),
                \Filament\Forms\Components\DateTimePicker::make('email_verified_at')->label('Email Verified At'),
                \Filament\Forms\Components\TextInput::make('password')->label('Password')->password()->required(),
                \Filament\Forms\Components\TextInput::make('remember_token')->label('Remember Token')->hidden(),
                \Filament\Forms\Components\Textarea::make('permissions')->label('Permissions')->required(),
                \Filament\Forms\Components\DateTimePicker::make('created_at')->label('Created At'),
                \Filament\Forms\Components\DateTimePicker::make('updated_at')->label('Updated At'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
