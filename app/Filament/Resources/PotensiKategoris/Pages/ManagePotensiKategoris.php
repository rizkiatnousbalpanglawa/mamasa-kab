<?php

namespace App\Filament\Resources\PotensiKategoris\Pages;

use App\Filament\Resources\PotensiKategoris\PotensiKategoriResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePotensiKategoris extends ManageRecords
{
    protected static string $resource = PotensiKategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
