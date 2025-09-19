<?php

namespace App\Filament\Resources\ProfilPimpinanDaerahs\Pages;

use App\Filament\Resources\ProfilPimpinanDaerahs\ProfilPimpinanDaerahResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageProfilPimpinanDaerahs extends ManageRecords
{
    protected static string $resource = ProfilPimpinanDaerahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
