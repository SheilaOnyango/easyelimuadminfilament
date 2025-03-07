<?php

namespace App\Filament\Resources\FollowUpSubscriptionResource\Pages;

use App\Filament\Resources\FollowUpSubscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFollowUpSubscriptions extends ListRecords
{
    protected static string $resource = FollowUpSubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
