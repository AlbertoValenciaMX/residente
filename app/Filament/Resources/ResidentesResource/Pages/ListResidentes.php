<?php

namespace App\Filament\Resources\ResidentesResource\Pages;

use App\Filament\Resources\ResidentesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResidentes extends ListRecords
{
    protected static string $resource = ResidentesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
