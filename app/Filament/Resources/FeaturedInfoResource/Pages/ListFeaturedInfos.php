<?php

namespace App\Filament\Resources\FeaturedInfoResource\Pages;

use App\Filament\Resources\FeaturedInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeaturedInfos extends ListRecords
{
    protected static string $resource = FeaturedInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
