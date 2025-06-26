<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoGalleryResource\Pages;
use App\Filament\Resources\VideoGalleryResource\RelationManagers;
use App\Models\VideoGallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideoGalleryResource extends Resource
{
    protected static ?string $model = VideoGallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\Textarea::make('description')->nullable(),
            Forms\Components\TextInput::make('video_url')
                ->label('Video URL (Embed Link)')
                ->required()
                ->placeholder('e.g., https://www.youtube.com/embed/VIDEO_ID'),
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('description')->limit(50), // Limit description length
            Tables\Columns\TextColumn::make('video_url')->label('Video URL'),
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
            'index' => Pages\ListVideoGalleries::route('/'),
            'create' => Pages\CreateVideoGallery::route('/create'),
            'edit' => Pages\EditVideoGallery::route('/{record}/edit'),
        ];
    }
}
