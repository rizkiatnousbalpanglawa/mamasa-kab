<?php

namespace App\Filament\Resources\KegiatanKategoris\Pages;

use App\Filament\Resources\KegiatanKategoris\KegiatanKategoriResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageKegiatanKategoris extends ManageRecords
{
    protected static string $resource = KegiatanKategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
