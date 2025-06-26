<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutUsResource\Pages;
use App\Filament\Resources\AboutUsResource\RelationManagers;
use App\Models\AboutUs;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutUsResource extends Resource
{

    protected static ?string $model = AboutUs::class;
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationLabel = 'About Us';
    
   public static function getNavigationUrl(): string
{
    // Check if there's only one AboutUs record
    if (AboutUs::count() === 1) {
        $aboutUs = AboutUs::first();
        \Log::info('AboutUs route: ' . route('filament.admin.resources.aboutuses.edit', $aboutUs)); // Debug line
        return route('filament.admin.resources.aboutuses.edit', $aboutUs);
    }

    return parent::getNavigationUrl();
}

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Textarea::make('short_description')
                ->required()
                ->maxLength(500)
                ->label('Short Description'),
            Textarea::make('long_description')
                ->required()
                ->maxLength(2000)
                ->label('Long Description'),
            FileUpload::make('feature_image')
                ->image()
                ->disk('public')
                ->directory('aboutus/feature_images')
                ->nullable()
                ->label('Feature Image')
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/jpg']), // Optional: define allowed file types


            FileUpload::make('main_image')
                ->image()
                ->disk('public')
                ->directory('aboutus/main_images')
                ->nullable()
                ->label('Main Image (Home Page)')
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/jpg']), // Optional: define allowed file types
            Repeater::make('carousel_images')
                ->label('Image Carousel')
                ->schema([
                    FileUpload::make('image')
                        ->image()
                        ->disk('public')
                        ->directory('aboutus/carousel_images')
                        ->nullable()
                        ->label('Image')
                        ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/jpg']), // Optional: define allowed file types
                ])
                ->columns(1)
                ->required()
                ->minItems(1)
                ->maxItems(10),
        ]);
    }
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('short_description')->limit(50),
            Tables\Columns\TextColumn::make('long_description')->limit(50),
            Tables\Columns\ImageColumn::make('feature_image')->disk('public')->label('Feature Image'),
            Tables\Columns\ImageColumn::make('main_image')->disk('public')->label('Main Image'),
            Tables\Columns\ImageColumn::make('carousel_images')
            ->disk('public')
            ->label('Carousel Images')
            ->getStateUsing(fn ($record) => is_array($record->carousel_images) ? $record->carousel_images[0] ?? null : $record->carousel_images),

                ]);
    }
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutUs::route('/'),
            'create' => Pages\CreateAboutUs::route('/create'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}
