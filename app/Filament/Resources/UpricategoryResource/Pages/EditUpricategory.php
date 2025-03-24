<?php

namespace App\Filament\Resources\UpricategoryResource\Pages;

use App\Filament\Resources\UpricategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUpricategory extends EditRecord
{
    protected static string $resource = UpricategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
