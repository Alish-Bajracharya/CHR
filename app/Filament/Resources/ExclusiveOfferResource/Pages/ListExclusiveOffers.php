<?php

namespace App\Filament\Resources\ExclusiveOfferResource\Pages;

use App\Filament\Resources\ExclusiveOfferResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExclusiveOffers extends ListRecords
{
    protected static string $resource = ExclusiveOfferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
