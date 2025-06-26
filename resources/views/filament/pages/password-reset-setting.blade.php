<x-filament::page>
    <form wire:submit.prevent="save">
        <x-filament::card>
            <div class="space-y-6">
                {{ $this->form }}
            </div>
        </x-filament::card>
<br>
        <x-filament::button type="submit" class="mt-4" wire:loading.attr="disabled">
            Save Changes
        </x-filament::button>
    </form>
</x-filament::page>
