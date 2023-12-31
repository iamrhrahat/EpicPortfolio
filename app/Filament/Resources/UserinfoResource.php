<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserinfoResource\Pages;
use App\Filament\Resources\UserinfoResource\RelationManagers;
use App\Models\Userinfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserinfoResource extends Resource
{
    protected static ?string $model = Userinfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('socialmedia_1_link')
                    ->maxLength(255),
                Forms\Components\TextInput::make('socialmedia_1_icon')
                    ->maxLength(255),
                Forms\Components\TextInput::make('socialmedia_2_link')
                    ->maxLength(255),
                Forms\Components\TextInput::make('socialmedia_2_icon')
                    ->maxLength(255),
                Forms\Components\TextInput::make('socialmedia_3_link')
                    ->maxLength(255),
                Forms\Components\TextInput::make('socialmedia_3_icon')
                    ->maxLength(255),
                Forms\Components\TextInput::make('socialmedia_4_link')
                    ->maxLength(255),
                Forms\Components\TextInput::make('socialmedia_4_icon')
                    ->maxLength(255),
                Forms\Components\TextInput::make('socialmedia_5_link')
                    ->maxLength(255),
                Forms\Components\TextInput::make('socialmedia_5_icon')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('socialmedia_1_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('socialmedia_1_icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('socialmedia_2_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('socialmedia_2_icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('socialmedia_3_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('socialmedia_3_icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('socialmedia_4_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('socialmedia_4_icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('socialmedia_5_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('socialmedia_5_icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageUserinfos::route('/'),
        ];
    }
}
