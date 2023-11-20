<?php

namespace App\Filament\Resources\FeaturedInfoResource\Pages;

use App\Filament\Resources\FeaturedInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeaturedInfo extends EditRecord
{
    protected static string $resource = FeaturedInfoResource::class;

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
