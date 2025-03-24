<?php

namespace App\Filament\Resources\Uprik2itemResource\Pages;

use App\Filament\Resources\Uprik2itemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUprik2items extends ListRecords
{
    protected static string $resource = Uprik2itemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
