<?php

namespace App\Filament\Widgets;

use Filament\Widgets\AccountWidget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getHeaderWidgets(): array
{
    return [
        AccountWidget::class,
        StatsOverviewWidget::class, // Use the correct class
    ];
}
}
