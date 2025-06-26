<?php

namespace App\Filament\Resources\ChampadeviInfoResource\Pages;

use App\Filament\Resources\ChampadeviInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChampadeviInfos extends ListRecords
{
    protected static string $resource = ChampadeviInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
