<x-filament::widget>
    <x-filament::card>
        <h2 class="text-lg font-bold">Notifications</h2>

        <ul>
            @forelse($this->getNotifications() as $notification)
                <li class="border-b py-2">
                    <strong>{{ $notification->data['title'] ?? 'New Notification' }}</strong>
                    <p>{{ $notification->data['message'] ?? 'No message available.' }}</p>
                    <small>{{ $notification->created_at->diffForHumans() }}</small>
                </li>
            @empty
                <p>No new notifications.</p>
            @endforelse
        </ul>
    </x-filament::card>
</x-filament::widget>
