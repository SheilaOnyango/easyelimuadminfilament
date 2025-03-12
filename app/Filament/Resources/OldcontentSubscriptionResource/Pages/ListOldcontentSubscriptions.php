<?php

namespace App\Filament\Resources\OldcontentSubscriptionResource\Pages;

use App\Filament\Resources\OldcontentSubscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOldcontentSubscriptions extends ListRecords
{
    protected static string $resource = OldcontentSubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
