<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PasswordResetSetting extends Page
{
    protected static string $view = 'filament.pages.password-reset-setting';

    public $current_password;
    public $new_password;
    public $confirm_new_password;
    public $change_password = false; // Control the visibility of the password change form
    protected static ?int $navigationSort = 3;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-lock-closed';
    }

    public function mount()
    {
        // You can initialize any data you need here, like the current user.
    }

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Select::make('change_password')
                    ->label('Change Password')
                    ->options([
                        'no' => 'No',
                        'yes' => 'Yes',
                    ])
                    ->reactive()
                    ->default('no')
                    ->afterStateUpdated(function ($state) {
                        $this->change_password = $state === 'yes';
                    }),

                // If 'Yes' is selected, show the password change form
                Forms\Components\Group::make([
                    TextInput::make('current_password')
                        ->label('Current Password')
                        ->password()
                        ->required()
                        ->visible(fn ($get) => $this->change_password),

                    TextInput::make('new_password')
                        ->label('New Password')
                        ->password()
                        ->required()
                        ->minLength(8)
                        ->visible(fn ($get) => $this->change_password),

                    TextInput::make('confirm_new_password')
                        ->label('Confirm New Password')
                        ->password()
                        ->required()
                        ->same('new_password')
                        ->visible(fn ($get) => $this->change_password),
                ])
                ->columns(1)
                ->visible(fn ($get) => $this->change_password),
            ]);
    }

    public function save()
    {
        // Handle the password change logic
        if ($this->change_password) {
            $this->validate([
                'current_password' => ['required', 'string'],
                'new_password' => ['required', 'string', 'min:8'],
                'confirm_new_password' => ['required', 'string', 'same:new_password'],
            ]);

            // Check if the current password matches the logged-in user
            if (!Hash::check($this->current_password, Auth::user()->password)) {
                $this->addError('current_password', 'The current password is incorrect.');
                return;
            }

            // Update the password
            Auth::user()->update([
                'password' => Hash::make($this->new_password),
            ]);

            session()->flash('success', 'Password has been updated successfully!');
        }
    }
}
