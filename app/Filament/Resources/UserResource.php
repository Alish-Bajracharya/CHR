<?php
namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput; // Correct import for TextInput
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus'; // Use a gear icon for settings

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                // Two-column grid for the first section
                Grid::make(2) // 2 columns
                    ->schema([
                        TextInput::make('name')->label('Full Name')->required(),
                        TextInput::make('email')->label('Email Address')->email()->required(),
                    ])
                    ->columnSpan(2), // This section will span across both columns

                // Another section with two columns
                Grid::make(2) // 2 columns
                    ->schema([
                        TextInput::make('password') // Using TextInput for Password field
                            ->label('Password')
                            ->password() // Specify that it's a password field
                            ->required(),

                        Select::make('role')->label('Role')->options([
                            'admin' => 'Administrator',
                            'editor' => 'Editor',
                            'user' => 'User',
                        ])->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('role')->label('Role'),
            ])
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
