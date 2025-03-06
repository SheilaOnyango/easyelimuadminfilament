<?php

namespace App\Filament\Resources\ExamSubscriptionResource\Pages;

use App\Filament\Resources\ExamSubscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamSubscriptions extends ListRecords
{
    protected static string $resource = ExamSubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
