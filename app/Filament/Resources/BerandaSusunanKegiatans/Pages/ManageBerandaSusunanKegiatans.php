<?php

namespace App\Filament\Resources\BerandaSusunanKegiatans\Pages;

use App\Filament\Resources\BerandaSusunanKegiatans\BerandaSusunanKegiatanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageBerandaSusunanKegiatans extends ManageRecords
{
    protected static string $resource = BerandaSusunanKegiatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
