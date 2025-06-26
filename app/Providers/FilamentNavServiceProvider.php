<?php
namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentNavServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::registerRenderHook('topbar.start', function () {
            return view('filament.nav-logo');
        });
    }
}
