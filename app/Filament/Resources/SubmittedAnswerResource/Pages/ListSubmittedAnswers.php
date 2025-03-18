<?php

namespace App\Filament\Resources\SubmittedAnswerResource\Pages;

use App\Filament\Resources\SubmittedAnswerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubmittedAnswers extends ListRecords
{
    protected static string $resource = SubmittedAnswerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
