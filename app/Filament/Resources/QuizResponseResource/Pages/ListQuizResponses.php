<?php

namespace App\Filament\Resources\QuizResponseResource\Pages;

use App\Filament\Resources\QuizResponseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQuizResponses extends ListRecords
{
    protected static string $resource = QuizResponseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
