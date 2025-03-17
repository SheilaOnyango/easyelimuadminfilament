<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubjectExamResource\Pages;
use App\Models\SubjectExam;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class SubjectExamResource extends Resource
{
    protected static ?string $model = SubjectExam::class;

    protected static ?string $navigationGroup = 'Subject Exams';

    public static function query(): Builder
    {
        return SubjectExam::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('set_id')->label('Set ID'),
                Tables\Columns\TextColumn::make('time')->label('Time'),
                Tables\Columns\TextColumn::make('exam_instructions')->label('Exam Instructions')->limit(50),
                Tables\Columns\TextColumn::make('exam')->label('Exam')->limit(50),
                Tables\Columns\TextColumn::make('alias')->label('Alias'),
                Tables\Columns\TextColumn::make('description')->label('Description')->limit(50),
                Tables\Columns\TextColumn::make('metadescription')->label('Meta Description')->limit(50),
                Tables\Columns\TextColumn::make('status')->label('Status'),
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
                \Filament\Forms\Components\TextInput::make('set_id')->label('Set ID')->required(),
                \Filament\Forms\Components\TextInput::make('time')->label('Time')->required(),
                \Filament\Forms\Components\Textarea::make('exam_instructions')->label('Exam Instructions')->required(),
                \Filament\Forms\Components\Textarea::make('exam')->label('Exam')->required(),
                \Filament\Forms\Components\TextInput::make('alias')->label('Alias')->required(),
                \Filament\Forms\Components\Textarea::make('description')->label('Description')->required(),
                \Filament\Forms\Components\Textarea::make('metadescription')->label('Meta Description')->required(),
                \Filament\Forms\Components\TextInput::make('status')->label('Status')->required(),
                \Filament\Forms\Components\TextInput::make('created_by')->label('Created By')->required(),
                \Filament\Forms\Components\TextInput::make('modified_by')->label('Modified By')->required(),
                \Filament\Forms\Components\DateTimePicker::make('created_at')->label('Created At'),
                \Filament\Forms\Components\DateTimePicker::make('updated_at')->label('Updated At'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubjectExams::route('/'),
            'create' => Pages\CreateSubjectExam::route('/create'),
            'edit' => Pages\EditSubjectExam::route('/{record}/edit'),
        ];
    }
}
