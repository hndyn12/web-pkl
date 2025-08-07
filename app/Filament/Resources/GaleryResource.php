<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleryResource\Pages;
use App\Models\Galery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GaleryResource extends Resource
{
    protected static ?string $model = Galery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('galery_pemuda'),
                Forms\Components\FileUpload::make('galery_olahraga'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('galery_pemuda'),
                Tables\Columns\ImageColumn::make('galery_olahraga')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListGaleries::route('/'),
            'create' => Pages\CreateGalery::route('/create'),
            'edit' => Pages\EditGalery::route('/{record}/edit'),
        ];
    }
}
