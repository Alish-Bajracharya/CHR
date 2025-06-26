<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MajorAttractionResource\Pages;
use App\Models\MajorAttraction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MajorAttractionResource extends Resource
{
    protected static ?string $model = MajorAttraction::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required()->maxLength(255),

                Select::make('category')
                    ->options([
                        'local_interaction' => 'Local Interaction',
                        'major_attraction' => 'Major Attraction',
                        'nature_exploration' => 'Nature Exploration',
                    ])
                    ->required(),

                FileUpload::make('image')
                    ->image()
                    ->directory('major-attractions'),

                FileUpload::make('images')
                    ->image()
                    ->multiple()
                    ->directory('major-attractions/carousel')
                    ->columnSpanFull(),

                Textarea::make('short_description')->required(),
                RichEditor::make('long_description')->required(),
                TextInput::make('location')->required(),

                // New Repeater for Places
                Repeater::make('places')
                    ->schema([
                        TextInput::make('name')->label('Place Name')->required(),
                        Textarea::make('description')->label('Place Description'),
                        FileUpload::make('image')->image()->label('Place Image'),
                    ])
                    ->label('Places in Major Attraction')
                    ->minItems(1)
                    ->collapsed(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('category')->sortable(),
                ImageColumn::make('image')->circular(),
                TextColumn::make('short_description')->limit(50),
                TextColumn::make('location')->sortable(),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMajorAttractions::route('/'),
            'create' => Pages\CreateMajorAttraction::route('/create'),
            'edit' => Pages\EditMajorAttraction::route('/{record}/edit'),
        ];
    }
}
