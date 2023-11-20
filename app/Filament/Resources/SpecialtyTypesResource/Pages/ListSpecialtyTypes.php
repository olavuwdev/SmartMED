<?php

namespace App\Filament\Resources\SpecialtyTypesResource\Pages;

use App\Filament\Resources\SpecialtyTypesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpecialtyTypes extends ListRecords
{
    protected static string $resource = SpecialtyTypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
