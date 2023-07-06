<?php

namespace App\Filament\Resources\ItemsResource\Pages;

use App\Filament\Resources\ItemsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditItems extends EditRecord
{
    protected static string $resource = ItemsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
