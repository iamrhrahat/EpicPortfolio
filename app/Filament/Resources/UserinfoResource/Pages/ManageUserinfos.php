<?php

namespace App\Filament\Resources\UserInfoResource\Pages;

use App\Filament\Resources\UserInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageUserInfos extends ManageRecords
{
    protected static string $resource = UserInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
