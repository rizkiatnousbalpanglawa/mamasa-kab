<?php

namespace App\Filament\Resources\Portals\Pages;

use App\Filament\Resources\Portals\PortalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePortals extends ManageRecords
{
    protected static string $resource = PortalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
