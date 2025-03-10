<?php

namespace App\Filament\Resources\JssCategoryResource\Pages;

use App\Filament\Resources\JssCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJssCategory extends EditRecord
{
    protected static string $resource = JssCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
