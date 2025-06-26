<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Gallery;

class GalleryImageCountWidget extends BaseWidget
{
    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Gallery Images', Gallery::count())
                ->description('Number of images in the gallery')
                ->descriptionIcon('heroicon-o-photo')
                ->color('success'),
        ];
    }
    
    
    
    


}
