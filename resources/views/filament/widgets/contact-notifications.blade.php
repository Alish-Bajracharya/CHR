<x-filament::widget>
    <x-filament::database-notifications
        :unread-count="auth()->user()->unreadNotifications->count()"
        mark-as-read-url="{{ route('filament.notifications.markAsRead') }}"
    />
</x-filament::widget>
