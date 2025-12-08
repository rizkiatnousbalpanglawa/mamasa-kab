<?php

namespace App\Filament\Resources\Pemerintahs\Pages;

use App\Filament\Resources\Pemerintahs\PemerintahResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPemerintahs extends ListRecords
{
    protected static string $resource = PemerintahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
