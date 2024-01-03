<?php

namespace App\Filament\Resources\AboutModelResource\Pages;

use App\Filament\Resources\AboutModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAboutModels extends ManageRecords
{
    protected static string $resource = AboutModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
