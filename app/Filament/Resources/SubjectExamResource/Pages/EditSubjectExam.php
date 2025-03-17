<?php

namespace App\Filament\Resources\SubjectExamResource\Pages;

use App\Filament\Resources\SubjectExamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubjectExam extends EditRecord
{
    protected static string $resource = SubjectExamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
