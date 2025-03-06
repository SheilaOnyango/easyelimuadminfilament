<?php

namespace App\Filament\Resources\ExamSubscriptionResource\Pages;

use App\Filament\Resources\ExamSubscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamSubscription extends EditRecord
{
    protected static string $resource = ExamSubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
