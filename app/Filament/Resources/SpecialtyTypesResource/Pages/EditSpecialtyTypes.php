<?php

namespace App\Filament\Resources\SpecialtyTypesResource\Pages;

use App\Filament\Resources\SpecialtyTypesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpecialtyTypes extends EditRecord
{
    protected static string $resource = SpecialtyTypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
