<?php

namespace App\Filament\Resources\FeaturedInfoResource\Pages;

use App\Filament\Resources\FeaturedInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFeaturedInfo extends CreateRecord
{
    protected static string $resource = FeaturedInfoResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
