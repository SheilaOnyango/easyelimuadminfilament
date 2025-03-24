<?php

namespace App\Filament\Resources\Uprik2itemResource\Pages;

use App\Filament\Resources\Uprik2itemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUprik2item extends EditRecord
{
    protected static string $resource = Uprik2itemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
