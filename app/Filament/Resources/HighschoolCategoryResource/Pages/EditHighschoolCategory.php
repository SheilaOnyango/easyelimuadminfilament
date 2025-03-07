<?php

namespace App\Filament\Resources\HighschoolCategoryResource\Pages;

use App\Filament\Resources\HighschoolCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHighschoolCategory extends EditRecord
{
    protected static string $resource = HighschoolCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
