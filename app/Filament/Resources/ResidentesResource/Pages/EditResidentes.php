<?php

namespace App\Filament\Resources\ResidentesResource\Pages;

use App\Filament\Resources\ResidentesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResidentes extends EditRecord
{
    protected static string $resource = ResidentesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
