<?php
namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Widgets\AccountWidget;
use App\Filament\Widgets\GalleryImageCountWidget;
use App\Filament\Widgets\VideoCountWidget;

class CustomDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.custom-dashboard';
    protected static ?string $navigationLabel = 'Dashboard';
protected static ?int $sort = 2;


    public function getHeaderWidgets(): array
    {
        return [
            // GalleryImageCountWidget::class,
            VideoCountWidget::class,
            AccountWidget::class,
        ];
    }

    public function getColumns(): int
    {
        return 2; // Ensures widgets are structured in 2-column layout
    }
}
