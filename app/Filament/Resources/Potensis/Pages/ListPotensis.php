<?php

namespace App\Filament\Resources\Potensis\Pages;

use App\Filament\Resources\Potensis\PotensiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPotensis extends ListRecords
{
    protected static string $resource = PotensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
