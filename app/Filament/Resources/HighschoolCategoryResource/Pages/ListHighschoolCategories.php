<?php

namespace App\Filament\Resources\HighschoolCategoryResource\Pages;

use App\Filament\Resources\HighschoolCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHighschoolCategories extends ListRecords
{
    protected static string $resource = HighschoolCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
