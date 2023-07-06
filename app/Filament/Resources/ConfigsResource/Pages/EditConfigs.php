<?php

namespace App\Filament\Resources\ConfigsResource\Pages;

use App\Filament\Resources\ConfigsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConfigs extends EditRecord
{
    protected static string $resource = ConfigsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
