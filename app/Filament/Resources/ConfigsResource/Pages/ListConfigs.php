<?php

namespace App\Filament\Resources\ConfigsResource\Pages;

use App\Filament\Resources\ConfigsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConfigs extends ListRecords
{
    protected static string $resource = ConfigsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
