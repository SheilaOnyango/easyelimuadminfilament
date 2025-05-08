<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FollowUpSubscriptionResource\Pages;
use App\Models\FollowUpSubscription;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FollowUpSubscriptionResource extends Resource
{
    protected static ?string $model = FollowUpSubscription::class;

    protected static ?string $navigationGroup = 'Resources';
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    

    public static function query(): Builder
    {
        return FollowUpSubscription::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('followup_id')->label('Follow-Up ID'),
                Tables\Columns\TextColumn::make('payment_id')->label('Payment ID'),
                Tables\Columns\TextColumn::make('subscription_id')->label('Subscription ID'),
                Tables\Columns\TextColumn::make('created_by')->label('Created By'),
                Tables\Columns\TextColumn::make('modified_by')->label('Modified By'),
                Tables\Columns\TextColumn::make('phone_number')->label('Phone Number'),
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
                \Filament\Forms\Components\TextInput::make('followup_id')->label('Follow-Up ID')->required()->numeric(),
                \Filament\Forms\Components\TextInput::make('payment_id')->label('Payment ID')->numeric(),
                \Filament\Forms\Components\TextInput::make('subscription_id')->label('Subscription ID')->required()->numeric(),
                \Filament\Forms\Components\TextInput::make('created_by')->label('Created By')->required()->numeric(),
                \Filament\Forms\Components\TextInput::make('modified_by')->label('Modified By')->numeric(),
                \Filament\Forms\Components\TextInput::make('phone_number')->label('Phone Number')->required(),
                \Filament\Forms\Components\TextInput::make('published')->label('Published')->required(),

            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFollowUpSubscriptions::route('/'),
            'create' => Pages\CreateFollowUpSubscription::route('/create'),
            'edit' => Pages\EditFollowUpSubscription::route('/{record}/edit'),
        ];
    }
}
