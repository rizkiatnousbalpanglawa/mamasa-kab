<?php

namespace App\Filament\Resources\PortalMenus\Pages;

use App\Filament\Resources\PortalMenus\PortalMenuResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePortalMenus extends ManageRecords
{
    protected static string $resource = PortalMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
