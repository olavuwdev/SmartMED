<?php

namespace App\Filament\Resources\SpecialtyTypeResource\Pages;

use App\Filament\Resources\SpecialtyTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpecialtyType extends EditRecord
{
    protected static string $resource = SpecialtyTypeResource::class;

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
