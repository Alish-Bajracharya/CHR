<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\Review;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    public static function form(Forms\Form $form): Forms\Form
{
    return $form
        ->schema([
            TextInput::make('reviewer_name')
                ->required()
                ->maxLength(255)
                ->label('Name'),
            TextInput::make('designation')
                ->nullable()
                ->maxLength(255)
                ->label('Designation'),
            Textarea::make('review')
                ->required()
                ->maxLength(1000)
                ->label('Review'),
                Select::make('rating')
                ->options([1, 2, 3, 4, 5])
                ->required()
                ->label('Rating'),
            FileUpload::make('reviewer_image')
                ->image() // Ensure it accepts images only
                ->required()
                ->label('Upload Reviewer Image')
                ->disk('public') // Save to storage
                ->directory('reviews/images'), // Store images in a dedicated folder
        ]);
}
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('reviewer_name')->sortable(),
                TextColumn::make('review')->limit(50),
                TextColumn::make('rating')->sortable(),
                IconColumn::make('rating')->boolean(),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
