<?php

namespace App\Filament\Resources\SpecialtyTypeResource\Pages;

use App\Filament\Resources\SpecialtyTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSpecialtyType extends CreateRecord
{
    protected static string $resource = SpecialtyTypeResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
