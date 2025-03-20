<?php

namespace App\Filament\Resources\TopicSubscriptionResource\Pages;

use App\Filament\Resources\TopicSubscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopicSubscription extends EditRecord
{
    protected static string $resource = TopicSubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
