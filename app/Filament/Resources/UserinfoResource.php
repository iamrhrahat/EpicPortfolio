<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserInfoResource\Pages;
use App\Filament\Resources\UserInfoResource\RelationManagers;
use App\Models\UserInfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserInfoResource extends Resource
{
    protected static ?string $model = UserInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    protected static ?string $navigationLabel = 'My Details';

    protected static ?string $navigationGroup = 'Portfolio Content';

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
                Forms\Components\Textarea::make('about_user')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('socialmedia_1_link')
                    ->hidden(),
                Tables\Columns\TextColumn::make('socialmedia_1_icon')
                    ->hidden(),
                Tables\Columns\TextColumn::make('socialmedia_2_link')
                    ->hidden(),
                Tables\Columns\TextColumn::make('socialmedia_2_icon')
                    ->hidden(),
                Tables\Columns\TextColumn::make('socialmedia_3_link')
                    ->hidden(),
                Tables\Columns\TextColumn::make('socialmedia_3_icon')
                    ->hidden(),
                Tables\Columns\TextColumn::make('socialmedia_4_link')
                    ->hidden(),
                Tables\Columns\TextColumn::make('socialmedia_4_icon')
                    ->hidden(),
                Tables\Columns\TextColumn::make('socialmedia_5_link')
                    ->hidden(),
                Tables\Columns\TextColumn::make('socialmedia_5_icon')
                    ->hidden(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageUserInfos::route('/'),
        ];
    }
}
