<?php

namespace App\Filament\Resources\UserinfoResource\Pages;

use App\Filament\Resources\UserinfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageUserinfos extends ManageRecords
{
    protected static string $resource = UserinfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
