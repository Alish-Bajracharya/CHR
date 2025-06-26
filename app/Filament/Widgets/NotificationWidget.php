<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class NotificationWidget extends Widget
{
    protected static string $view = 'filament.widgets.notification-widget';

    protected static ?int $sort = 1; // Controls widget order

    public function getNotifications()
    {
        return Auth::user()->unreadNotifications; // Fetch unread notifications for the logged-in user
    }

    public function getUnreadCount()
    {
        return Auth::user()->unreadNotifications->count(); // Count unread notifications
    }
}
