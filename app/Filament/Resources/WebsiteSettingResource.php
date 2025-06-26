<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebsiteSettingResource\Pages;
use App\Models\WebsiteSetting;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class WebsiteSettingResource extends Resource
{
    protected static ?string $model = WebsiteSetting::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Website Title')->required(),
                FileUpload::make('website_logo')->label('Website Logo')->image(),
                TextInput::make('email')->label('Contact Email')->email()->required(),
                TextInput::make('phone')->label('Phone Number')->required(),
                TextInput::make('reservation_email')->label('Reservation Email')->email(),
                Textarea::make('location')->label('Address')->required(),
                TextInput::make('resort_name')->label('Resort Name')->required(),
                FileUpload::make('resort_logo')->label('Resort Logo')->image(),
                TextInput::make('facebook')->label('Facebook Link')->url(),
                TextInput::make('instagram')->label('Instagram Link')->url(),
                TextInput::make('twitter')->label('Twitter Link')->url(),
                TextInput::make('tripadvisor')->label('TripAdvisor Link')->url(),
                TextInput::make('pinterest')->label('Pinterest Link')->url(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Website Title'),
                ImageColumn::make('website_logo')->label('Website Logo'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('phone')->label('Phone'),
                TextColumn::make('location')->label('Address'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]); // Disable bulk actions
    }

    public static function canCreate(): bool
    {
        return !WebsiteSetting::exists(); // Allow creation only if no record exists
    }

    public static function canDelete(Model $record): bool
    {
        return false; // Prevent deletion
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWebsiteSettings::route('/'),
            'create' => Pages\CreateWebsiteSetting::route('/create'),
            'edit'  => Pages\EditWebsiteSetting::route('/{record}/edit'),
        ];
    }
}
