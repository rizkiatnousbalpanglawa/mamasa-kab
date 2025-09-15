<?php

namespace App\Filament\Resources\BerandaInfoKegiatans\Pages;

use App\Filament\Resources\BerandaInfoKegiatans\BerandaInfoKegiatanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageBerandaInfoKegiatans extends ManageRecords
{
    protected static string $resource = BerandaInfoKegiatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
