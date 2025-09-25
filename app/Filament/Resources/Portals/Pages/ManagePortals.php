<?php

namespace App\Filament\Resources\Portals\Pages;

use App\Filament\Resources\Portals\PortalResource;
use App\Models\Portal;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePortals extends ManageRecords
{
    protected static string $resource = PortalResource::class;

    protected function getHeaderActions(): array
    {
        $exists = Portal::exists();
        return [
            CreateAction::make()->visible(!$exists),
        ];
    }
}
