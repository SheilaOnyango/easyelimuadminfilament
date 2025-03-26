<?php

namespace App\Filament\Resources\WebAnalyticsResource\Pages;

use App\Filament\Resources\WebAnalyticsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWebAnalytics extends ListRecords
{
    protected static string $resource = WebAnalyticsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
