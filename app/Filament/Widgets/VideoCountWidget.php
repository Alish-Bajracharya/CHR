<?php

namespace App\Filament\Widgets;

use App\Models\VideoGallery;
use App\Models\Gallery;
use App\Models\Room; // Import Room model
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VideoCountWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Videos', VideoGallery::count())
                ->description('Number of videos uploaded')
                ->descriptionIcon('heroicon-o-video-camera')
                ->color('primary'),
                
            Stat::make('Total Gallery Images', Gallery::count())
                ->description('Number of images in the gallery')
                ->descriptionIcon('heroicon-o-photo')
                ->color('success'),

            Stat::make('Total Rooms', Room::count()) // New Stat for rooms
                ->description('Number of rooms available')
                ->descriptionIcon('heroicon-o-home')
                ->color('info'),
        ];
        
        
        
        
    }
    
    
    
}

