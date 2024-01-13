<?php

namespace App\Filament\Resources;
use Illuminate\Support\Str;
use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationLabel = 'Sobre';

    protected static ?string $modelLabel = 'Sobre';
    protected static ?string $navigationIcon = 'heroicon-m-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('text_quem_somos')
                    ->required()
                    ->maxLength(65535)
                    //->columnSpanFull()
                    ,
                Forms\Components\RichEditor::make('text_missoes')
                    ->required()
                    ->maxLength(65535)
                    //->columnSpanFull()
                    ,
                Forms\Components\RichEditor::make('text_valores')
                    //->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('text_visao')
                //->required()
                ->maxLength(65535)
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('text_quem_somos')->limit(40)
                ->html(),
                Tables\Columns\TextColumn::make('text_missoes')->limit(40)
                ->html(),
                Tables\Columns\TextColumn::make('text_valores')->limit(40)
                ->html(),
                Tables\Columns\TextColumn::make('text_visao')->limit(40)
                ->html()
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
