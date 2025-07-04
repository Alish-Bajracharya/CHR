<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExclusiveOfferResource\Pages;
use App\Filament\Resources\ExclusiveOfferResource\RelationManagers;
use App\Models\ExclusiveOffer;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
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
use Filament\Forms\Components\RichEditor;


class ExclusiveOfferResource extends Resource
{
    protected static ?string $model = ExclusiveOffer::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('description')
                    ->required()
                    ->maxLength(1000),
                FileUpload::make('image')
                    ->image()
                    ->directory('exclusive_offers')
                    ->nullable(),
                DateTimePicker::make('expires_at')
                    ->label('Expiry Date')
                    ->nullable(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('description')->limit(50),
                ImageColumn::make('image')->circular(),
                TextColumn::make('expires_at')->label('Expires On')->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListExclusiveOffers::route('/'),
            'create' => Pages\CreateExclusiveOffer::route('/create'),
            'edit' => Pages\EditExclusiveOffer::route('/{record}/edit'),
        ];
    }
}
