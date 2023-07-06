<?php

namespace App\Filament\Resources\ItemsResource\Pages;

use App\Filament\Resources\ItemsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListItems extends ListRecords
{
    protected static string $resource = ItemsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
