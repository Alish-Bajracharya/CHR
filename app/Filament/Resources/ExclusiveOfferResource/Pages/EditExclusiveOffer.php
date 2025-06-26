<?php

namespace App\Filament\Resources\ExclusiveOfferResource\Pages;

use App\Filament\Resources\ExclusiveOfferResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExclusiveOffer extends EditRecord
{
    protected static string $resource = ExclusiveOfferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
