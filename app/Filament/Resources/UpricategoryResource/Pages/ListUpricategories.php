<?php

namespace App\Filament\Resources\UpricategoryResource\Pages;

use App\Filament\Resources\UpricategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUpricategories extends ListRecords
{
    protected static string $resource = UpricategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
