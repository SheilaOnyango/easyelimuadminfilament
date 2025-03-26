<?php

namespace App\Filament\Resources\WebAnalyticsResource\Pages;

use App\Filament\Resources\WebAnalyticsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWebAnalytics extends EditRecord
{
    protected static string $resource = WebAnalyticsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
