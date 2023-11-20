<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpecialtyTypeResource\Pages;
use App\Filament\Resources\SpecialtyTypeResource\RelationManagers;
use App\Models\SpecialtyType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SpecialtyTypeResource extends Resource
{
    protected static ?string $model = SpecialtyType::class;

    protected static ?string $navigationLabel = 'Especialidade';
    protected static ?string $modelLabel = 'Especialidade';
    protected static ?string $navigationIcon = 'heroicon-m-user-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListSpecialtyTypes::route('/'),
            'create' => Pages\CreateSpecialtyType::route('/create'),
            'edit' => Pages\EditSpecialtyType::route('/{record}/edit'),
        ];
    }
}
