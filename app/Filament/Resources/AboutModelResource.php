<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutModelResource\Pages;
use App\Filament\Resources\AboutModelResource\RelationManagers;
use App\Models\AboutModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutModelResource extends Resource
{
    protected static ?string $model = AboutModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationGroup = 'Portfolio Content';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Section')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('skill_1')
                    ->maxLength(255),
                Forms\Components\TextInput::make('skill_1_p')
                    ->maxLength(255),
                Forms\Components\TextInput::make('skill_2')
                    ->maxLength(255),
                Forms\Components\TextInput::make('skill_2_p')
                    ->maxLength(255),
                Forms\Components\TextInput::make('skill_3')
                    ->maxLength(255),
                Forms\Components\TextInput::make('skill_3_p')
                    ->maxLength(255),
                Forms\Components\TextInput::make('skill_4')
                    ->maxLength(255),
                Forms\Components\TextInput::make('skill_4_p')
                    ->maxLength(255),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Section')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('skill_1')
                    ->hidden(),
                Tables\Columns\TextColumn::make('skill_1_p')
                    ->hidden(),
                Tables\Columns\TextColumn::make('skill_2')
                    ->hidden(),
                Tables\Columns\TextColumn::make('skill_2_p')
                    ->hidden(),
                Tables\Columns\TextColumn::make('skill_3')
                    ->hidden(),
                Tables\Columns\TextColumn::make('skill_3_p')
                    ->hidden(),
                Tables\Columns\TextColumn::make('skill_4')
                    ->hidden(),
                Tables\Columns\TextColumn::make('skill_4_p')
                    ->hidden(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean()
                    ->hidden(),
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
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAboutModels::route('/'),
        ];
    }
}
