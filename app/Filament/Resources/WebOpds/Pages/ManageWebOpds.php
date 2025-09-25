<?php

namespace App\Filament\Resources\WebOpds\Pages;

use App\Filament\Resources\WebOpds\WebOpdResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageWebOpds extends ManageRecords
{
    protected static string $resource = WebOpdResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
