<?php

namespace App\Filament\Resources\Lambangs\Pages;

use App\Filament\Resources\Lambangs\LambangResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLambangs extends ListRecords
{
    protected static string $resource = LambangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
