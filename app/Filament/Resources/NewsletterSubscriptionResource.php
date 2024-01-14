<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsletterSubscriptionResource\Pages;
use App\Filament\Resources\NewsletterSubscriptionResource\RelationManagers;
use App\Models\NewsletterSubscription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class NewsletterSubscriptionResource extends Resource
{
    protected static ?string $model = NewsletterSubscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationGroup = 'Feedback';
    public static function getNavigationBadge(): ?string
    {
        return static :: getModel()::where('Status', '=', 0)->exists() ? 'New' : '';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->disabled(),

                    Forms\Components\Toggle::make('Status')
                    ->required(),
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                    Tables\Columns\IconColumn::make('Status')
                    ->boolean()
                    ->label('Contacted'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ,
            ])
            ->filters([
                //
            ])
            ->actions([

                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    ExportBulkAction::make(),
                    Tables\Actions\DeleteBulkAction::make(),
                ])
                ,
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
            'index' => Pages\ListNewsletterSubscriptions::route('/'),
        ];
    }
}
