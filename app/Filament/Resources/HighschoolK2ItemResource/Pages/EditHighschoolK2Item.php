<?php

namespace App\Filament\Resources\HighschoolK2ItemResource\Pages;

use App\Filament\Resources\HighschoolK2ItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHighschoolK2Item extends EditRecord
{
    protected static string $resource = HighschoolK2ItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
