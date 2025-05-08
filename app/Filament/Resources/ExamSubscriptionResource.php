<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamSubscriptionResource\Pages;
use App\Models\ExamSubscription;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ExamSubscriptionResource extends Resource
{
    protected static ?string $model = ExamSubscription::class;

    protected static ?string $navigationGroup = 'Subs';
    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    public static function query(): Builder
    {
        return ExamSubscription::query()->latest();
        
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('subject_exam_id')->label('Subject Exam ID'),
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
                \Filament\Forms\Components\TextInput::make('subject_exam_id')->label('Subject Exam ID')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('payment_id')->label('Payment ID')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('user_id')->label('User ID')->numeric()->required(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExamSubscriptions::route('/'),
            'create' => Pages\CreateExamSubscription::route('/create'),
            'edit' => Pages\EditExamSubscription::route('/{record}/edit'),
        ];
    }
}
