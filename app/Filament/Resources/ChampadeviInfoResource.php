<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChampadeviInfoResource\Pages;
use App\Filament\Resources\ChampadeviInfoResource\RelationManagers;
use App\Models\ChampadeviInfo;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChampadeviInfoResource extends Resource
{
    protected static ?string $model = ChampadeviInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

 public static function getNavigationUrl(): string
{
    // Check if there's only one AboutUs record
    if (ChampadeviInfo::count() === 1) {
        $champadeviinfo = ChampadeviInfo::first();
        \Log::info('AboutUs route: ' . route('filament.admin.resources.champadevi-infos.edit', $champadeviinfo)); // Debug line
        return route('filament.admin.resources.champadevi-infos.edit', $champadeviinfo);
    }

    return parent::getNavigationUrl();
}

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('title')
                ->required()
                ->maxLength(255)
                ->label('Title'),
            Textarea::make('description')
                ->required()
                ->maxLength(1000)
                ->label('Description'),
            FileUpload::make('feature_image')
                ->image()
                ->disk('public')
                ->directory('champadevi/feature_images')
                ->nullable()
                ->label('Feature Image'),
            Repeater::make('carousel_images')
                ->label('Image Carousel')
                ->schema([
                    FileUpload::make('image')
                        ->image()
                        ->disk('public')
                        ->directory('champadevi/carousel_images')
                        ->nullable()
                        ->label('Image'),
                ])
                ->columns(1)
                ->required()
                ->minItems(1)
                ->maxItems(5),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('description')->limit(50),
            Tables\Columns\ImageColumn::make('feature_image')->disk('public')->label('Feature Image'),
            Tables\Columns\ImageColumn::make('carousel_images')->disk('public')->label('Carousel Images'),
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
            'index' => Pages\ListChampadeviInfos::route('/'),
            'create' => Pages\CreateChampadeviInfo::route('/create'),
            'edit' => Pages\EditChampadeviInfo::route('/{record}/edit'),
        ];
    }
}
