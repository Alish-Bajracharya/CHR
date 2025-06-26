<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Filament\Resources\RoomResource\RelationManagers;
use App\Models\Room;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoomResource extends Resource
{
    protected static ?string $model = Room::class;

    protected static ?string $navigationIcon = 'heroicon-o-plus-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\Textarea::make('description')->required(),
                Forms\Components\TextInput::make('price')->numeric()->required(),
                Forms\Components\TextInput::make('capacity')->required(),
                Forms\Components\TextInput::make('size') // Add this
                    ->label('Room Size (m²)')
                    ->required(),
                Forms\Components\TagsInput::make('amenities')
                    ->placeholder('Add an amenity')
                    ->suggestions([
                        'Free Wi-Fi',
                        'Air Conditioning',
                        'TV',
                        'Mini Bar',
                        'Room Service',
                    ]),
                Forms\Components\FileUpload::make('images')
                    ->directory('rooms')
                    ->multiple()
                    ->image(),
                Forms\Components\FileUpload::make('featured_image')
                    ->directory('rooms/featured')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('price')->sortable(),
                Tables\Columns\TextColumn::make('capacity')->sortable(),
                Tables\Columns\TextColumn::make('size')->label('Size (m²)'),
                Tables\Columns\ImageColumn::make('featured_image')->circular(),
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
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }
}
