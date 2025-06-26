<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarouselResource\Pages;
use App\Filament\Resources\CarouselResource\RelationManagers;
use App\Models\Carousel;
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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarouselResource extends Resource
{
    protected static ?string $model = Carousel::class;
    protected static ?string $navigationLabel = 'Home Page'; // Change this as needed
    protected static ?string $navigationIcon = 'heroicon-o-photo'; // Change to any valid icon
     public static function getModelLabel(): string
    {
        return 'Slider'; // Change "Carousel" to "Slider" or any other name
    }
    
     public static function getNavigationUrl(): string
{
    // Check if there's only one AboutUs record
    if (Carousel::count() === 1) {
        $carousel = Carousel::first();
        \Log::info('AboutUs route: ' . route('filament.admin.resources.carousels.edit', $carousel)); // Debug line
        return route('filament.admin.resources.carousels.edit', $carousel);
    }

    return parent::getNavigationUrl();
}
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Title'),
                FileUpload::make('images')
                    ->label('Carousel Images')
                    ->image()
                    ->multiple() // Allow multiple uploads
                    ->required()
                    ->maxSize(10240),
                Textarea::make('description')->label('Description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Displaying multiple images from the JSON column
                
                TextColumn::make('title')->label('Title'),
                TextColumn::make('description')->label('Description')->limit(50),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
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
            'index' => Pages\ListCarousels::route('/'),
            'create' => Pages\CreateCarousel::route('/create'),
            'edit' => Pages\EditCarousel::route('/{record}/edit'),
        ];
    }
}
