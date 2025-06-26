<?php

namespace App\Filament\Resources\MajorAttractionResource\Pages;

use App\Filament\Resources\MajorAttractionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMajorAttraction extends EditRecord
{
    protected static string $resource = MajorAttractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
