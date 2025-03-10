<?php

namespace App\Filament\Resources\JssCategoryResource\Pages;

use App\Filament\Resources\JssCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJssCategories extends ListRecords
{
    protected static string $resource = JssCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
