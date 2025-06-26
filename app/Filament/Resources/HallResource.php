<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HallResource\Pages;
use App\Filament\Resources\HallResource\RelationManagers;
use App\Models\Hall;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HallResource extends Resource
{
    protected static ?string $model = Hall::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('location')->required(),
                TextInput::make('capacity')->numeric()->required(),

                // FEATURE IMAGE (SINGLE)
                FileUpload::make('feature_image')
                    ->label('Feature Image')
                    ->image()
                    ->directory('halls/feature')
                    ->required(),

                // MULTIPLE GALLERY IMAGES
                FileUpload::make('gallery_images')
                    ->label('Gallery Images')
                    ->multiple()
                    ->image()
                    ->directory('halls/gallery')
                    ->reorderable(),
            ]);
    }


    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('location')->sortable()->searchable(),
                TextColumn::make('capacity')->sortable(),

                // SHOW FEATURE IMAGE IN TABLE
                ImageColumn::make('feature_image')
                    ->label('Feature Image')
                    ->circular(),
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
            'index' => Pages\ListHalls::route('/'),
            'create' => Pages\CreateHall::route('/create'),
            'edit' => Pages\EditHall::route('/{record}/edit'),
        ];
    }
}
