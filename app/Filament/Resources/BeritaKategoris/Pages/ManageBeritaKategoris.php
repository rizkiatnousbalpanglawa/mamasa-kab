<?php

namespace App\Filament\Resources\BeritaKategoris\Pages;

use App\Filament\Resources\BeritaKategoris\BeritaKategoriResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageBeritaKategoris extends ManageRecords
{
    protected static string $resource = BeritaKategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
