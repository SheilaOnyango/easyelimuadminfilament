<?php

namespace App\Filament\Resources\QuizResponseResource\Pages;

use App\Filament\Resources\QuizResponseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuizResponse extends EditRecord
{
    protected static string $resource = QuizResponseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
