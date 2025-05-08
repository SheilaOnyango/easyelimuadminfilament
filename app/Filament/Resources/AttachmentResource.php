<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttachmentResource\Pages;
use App\Models\Attachment;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class AttachmentResource extends Resource
{
    protected static ?string $model = Attachment::class;

    protected static ?string $navigationGroup = 'Attachments';
    protected static ?string $navigationIcon = 'heroicon-o-paper-clip';




    public static function query(): Builder
    {
        return Attachment::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('original_name')->label('File Name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('mime')->label('MIME Type'),
                Tables\Columns\TextColumn::make('extension')->label('Extension'),
                Tables\Columns\TextColumn::make('size')->label('Size (KB)')->sortable(),
                Tables\Columns\TextColumn::make('sort')->label('Sort Order'),
                Tables\Columns\TextColumn::make('path')->label('File Path'),
                Tables\Columns\TextColumn::make('description')->label('Description'),
                Tables\Columns\TextColumn::make('alt')->label('Alt Text'),
                Tables\Columns\TextColumn::make('hash')->label('Hash'),
                Tables\Columns\TextColumn::make('disk')->label('Disk Storage'),
                Tables\Columns\TextColumn::make('user_id')->label('User ID'),
                Tables\Columns\TextColumn::make('group')->label('Group'),
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
                \Filament\Forms\Components\TextInput::make('original_name')->label('File Name')->required(),
                \Filament\Forms\Components\TextInput::make('mime')->label('MIME Type')->required(),
                \Filament\Forms\Components\TextInput::make('extension')->label('Extension'),
                \Filament\Forms\Components\TextInput::make('size')->label('Size (KB)')->numeric(),
                \Filament\Forms\Components\TextInput::make('sort')->label('Sort Order')->numeric(),
                \Filament\Forms\Components\TextInput::make('path')->label('File Path')->required(),
                \Filament\Forms\Components\TextInput::make('description')->label('Description'),
                \Filament\Forms\Components\TextInput::make('alt')->label('Alt Text'),
                \Filament\Forms\Components\TextInput::make('hash')->label('Hash'),
                \Filament\Forms\Components\TextInput::make('disk')->label('Disk Storage')->default('public'),
                \Filament\Forms\Components\TextInput::make('user_id')->label('User ID')->numeric(),
                \Filament\Forms\Components\TextInput::make('group')->label('Group'),
                \Filament\Forms\Components\DateTimePicker::make('created_at')->label('Created At'),
                \Filament\Forms\Components\DateTimePicker::make('updated_at')->label('Updated At'),
                

            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAttachments::route('/'),
            'create' => Pages\CreateAttachment::route('/create'),
            'edit' => Pages\EditAttachment::route('/{record}/edit'),
        ];
    }
}
