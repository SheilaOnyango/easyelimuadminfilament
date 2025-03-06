<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamSubscriptionResource\Pages;
use App\Filament\Resources\ExamSubscriptionResource\RelationManagers;
use App\Models\ExamSubscription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamSubscriptionResource extends Resource
{
    protected static ?string $model = ExamSubscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
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
