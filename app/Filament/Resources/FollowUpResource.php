<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FollowUpResource\Pages;
use App\Models\FollowUp;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FollowUpResource extends Resource
{
    protected static ?string $model = FollowUp::class;

    protected static ?string $navigationGroup = 'Resources';
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    public static function query(): Builder
    {
        return FollowUp::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('user_id')->label('User ID'),
                Tables\Columns\TextColumn::make('payment_id')->label('Payment ID'),
                Tables\Columns\TextColumn::make('phone_number')->label('Phone Number'),
                Tables\Columns\TextColumn::make('contact_date')->label('Contact Date')->dateTime(),
                Tables\Columns\TextColumn::make('followup_date')->label('Follow-up Date')->dateTime(),
                Tables\Columns\TextColumn::make('comments')->label('Comments')->limit(50),
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
                \Filament\Forms\Components\TextInput::make('user_id')->label('User ID')->required()->numeric(),
                \Filament\Forms\Components\TextInput::make('payment_id')->label('Payment ID')->numeric(),
                \Filament\Forms\Components\TextInput::make('phone_number')->label('Phone Number')->required(),
                \Filament\Forms\Components\DateTimePicker::make('contact_date')->label('Contact Date')->required(),
                \Filament\Forms\Components\DateTimePicker::make('followup_date')->label('Follow-up Date')->required(),
                \Filament\Forms\Components\Textarea::make('comments')->label('Comments')->required(),
                \Filament\Forms\Components\TextInput::make('created_by')->label('Created By')->required(),
                \Filament\Forms\Components\TextInput::make('modified_by')->label('Modified By'),
                \Filament\Forms\Components\DateTimePicker::make('created_at')->label('Created At'),
                \Filament\Forms\Components\DateTimePicker::make('updated_at')->label('Updated At'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFollowUps::route('/'),
            'create' => Pages\CreateFollowUp::route('/create'),
            'edit' => Pages\EditFollowUp::route('/{record}/edit'),
        ];
    }
}
