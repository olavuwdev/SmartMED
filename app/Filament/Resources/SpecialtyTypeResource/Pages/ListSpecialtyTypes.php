<?php

namespace App\Filament\Resources\SpecialtyTypeResource\Pages;

use App\Filament\Resources\SpecialtyTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpecialtyTypes extends ListRecords
{
    protected static string $resource = SpecialtyTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
