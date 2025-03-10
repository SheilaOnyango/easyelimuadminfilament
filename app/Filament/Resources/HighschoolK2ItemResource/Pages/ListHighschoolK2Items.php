<?php

namespace App\Filament\Resources\HighschoolK2ItemResource\Pages;

use App\Filament\Resources\HighschoolK2ItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHighschoolK2Items extends ListRecords
{
    protected static string $resource = HighschoolK2ItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
