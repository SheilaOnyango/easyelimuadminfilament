<?php

namespace App\Filament\Resources\OldcontentSubscriptionResource\Pages;

use App\Filament\Resources\OldcontentSubscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOldcontentSubscription extends EditRecord
{
    protected static string $resource = OldcontentSubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
