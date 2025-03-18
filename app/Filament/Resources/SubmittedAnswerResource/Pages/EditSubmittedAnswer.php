<?php

namespace App\Filament\Resources\SubmittedAnswerResource\Pages;

use App\Filament\Resources\SubmittedAnswerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubmittedAnswer extends EditRecord
{
    protected static string $resource = SubmittedAnswerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
