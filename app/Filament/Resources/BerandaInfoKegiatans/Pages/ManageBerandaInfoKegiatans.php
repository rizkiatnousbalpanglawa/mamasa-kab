<?php

namespace App\Filament\Resources\BerandaInfoKegiatans\Pages;

use App\Filament\Resources\BerandaInfoKegiatans\BerandaInfoKegiatanResource;
use App\Models\BerandaInfoKegiatan;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageBerandaInfoKegiatans extends ManageRecords
{
    protected static string $resource = BerandaInfoKegiatanResource::class;

    protected function getHeaderActions(): array
    {
        $exists = BerandaInfoKegiatan::exists();
        return [
            CreateAction::make()->visible(!$exists),
        ];
    }
}
