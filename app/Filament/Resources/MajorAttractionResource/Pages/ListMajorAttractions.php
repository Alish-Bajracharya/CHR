<?php

namespace App\Filament\Resources\MajorAttractionResource\Pages;

use App\Filament\Resources\MajorAttractionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMajorAttractions extends ListRecords
{
    protected static string $resource = MajorAttractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
