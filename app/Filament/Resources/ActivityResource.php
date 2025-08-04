<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActivityResource\Pages;
use App\Filament\Resources\ActivityResource\RelationManagers;
use App\Models\Activity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use ResourceBundle;

class ActivityResource extends Resource
{
    protected static ?string $model = Activity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn(Set $set, ?string $state) =>
                        $set('slug', Str::slug($state))
                    ),
                Forms\Components\TextInput::make('slug')
                    ->readOnly(),
                Forms\Components\FileUpload::make('gambar')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Select::make('kategori_id')->relationship('kategori', 'jenis_kegiatan')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->circular(),
                Tables\Columns\TextColumn::make('judul'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('kategori.jenis_kegiatan'),

            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategori_id')
                    ->relationship('kategori', 'jenis_kegiatan')
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
            'index' => Pages\ListActivities::route('/'),
            'create' => Pages\CreateActivity::route('/create'),
            'edit' => Pages\EditActivity::route('/{record}/edit'),
        ];
    }
}
