<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Models\Package;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationGroup = 'Resources';
    protected static ?string $navigationIcon = 'heroicon-o-lock-closed';


    public static function query(): Builder
    {
        return Package::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('package_name')->label('Package Name'),
                Tables\Columns\TextColumn::make('amount')->label('Amount')->money('USD'),
                Tables\Columns\TextColumn::make('package_description')->label('Description')->limit(50),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('time_value')->label('Time Value'),
                Tables\Columns\TextColumn::make('duration')->label('Duration'),
                Tables\Columns\TextColumn::make('items_limit')->label('Items Limit'),
                Tables\Columns\TextColumn::make('PDF_downloads_limit')->label('PDF Downloads Limit'),
                Tables\Columns\TextColumn::make('pages_downloads_limit')->label('Pages Downloads Limit'),
                Tables\Columns\TextColumn::make('questions_limit')->label('Questions Limit'),
                Tables\Columns\TextColumn::make('videos_limit')->label('Videos Limit'),
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
                \Filament\Forms\Components\TextInput::make('package_name')->label('Package Name')->required(),
                \Filament\Forms\Components\TextInput::make('amount')->label('Amount')->numeric()->required(),
                \Filament\Forms\Components\Textarea::make('package_description')->label('Description')->required(),
                \Filament\Forms\Components\TextInput::make('status')->label('Status')->required(),
                \Filament\Forms\Components\TextInput::make('time_value')->label('Time Value')->required(),
                \Filament\Forms\Components\TextInput::make('duration')->label('Duration')->required(),
                \Filament\Forms\Components\TextInput::make('items_limit')->label('Items Limit')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('PDF_downloads_limit')->label('PDF Downloads Limit')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('pages_downloads_limit')->label('Pages Downloads Limit')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('questions_limit')->label('Questions Limit')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('videos_limit')->label('Videos Limit')->numeric()->required(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}
