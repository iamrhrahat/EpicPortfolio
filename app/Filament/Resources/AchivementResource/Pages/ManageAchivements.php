<?php

namespace App\Filament\Resources\AchivementResource\Pages;

use App\Filament\Resources\AchivementResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAchivements extends ManageRecords
{
    protected static string $resource = AchivementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
