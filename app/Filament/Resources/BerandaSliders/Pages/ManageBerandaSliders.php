<?php

namespace App\Filament\Resources\BerandaSliders\Pages;

use App\Filament\Resources\BerandaSliders\BerandaSliderResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageBerandaSliders extends ManageRecords
{
    protected static string $resource = BerandaSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
