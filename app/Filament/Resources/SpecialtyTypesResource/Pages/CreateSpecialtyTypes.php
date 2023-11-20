<?php

namespace App\Filament\Resources\SpecialtyTypesResource\Pages;

use App\Filament\Resources\SpecialtyTypesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSpecialtyTypes extends CreateRecord
{
    protected static string $resource = SpecialtyTypesResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

