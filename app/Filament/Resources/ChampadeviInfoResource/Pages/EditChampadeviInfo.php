<?php

namespace App\Filament\Resources\ChampadeviInfoResource\Pages;

use App\Filament\Resources\ChampadeviInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChampadeviInfo extends EditRecord
{
    protected static string $resource = ChampadeviInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
