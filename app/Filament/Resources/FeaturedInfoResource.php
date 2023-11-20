<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeaturedInfoResource\Pages;
use App\Filament\Resources\FeaturedInfoResource\RelationManagers;
use App\Models\FeaturedInfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeaturedInfoResource extends Resource
{
    protected static ?string $model = FeaturedInfo::class;

    protected static ?string $navigationLabel = 'Informações destaque';
    protected static ?string $modelLabel = 'Informações de destaque';
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link')
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
                Tables\Columns\TextColumn::make('link')
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
            'index' => Pages\ListFeaturedInfos::route('/'),
            'create' => Pages\CreateFeaturedInfo::route('/create'),
            'edit' => Pages\EditFeaturedInfo::route('/{record}/edit'),
        ];
    }
}
