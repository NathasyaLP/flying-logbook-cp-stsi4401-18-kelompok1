<?php

namespace App\Filament\Resources\AircraftResource\Pages;

use App\Filament\Resources\AircraftResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAircraft extends ListRecords
{
    protected static string $resource = AircraftResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
