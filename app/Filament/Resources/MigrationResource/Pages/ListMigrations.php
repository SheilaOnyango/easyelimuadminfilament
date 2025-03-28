<?php

namespace App\Filament\Resources\MigrationResource\Pages;

use App\Filament\Resources\MigrationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMigrations extends ListRecords
{
    protected static string $resource = MigrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
