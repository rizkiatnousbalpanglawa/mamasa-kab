<?php

namespace App\Filament\Resources\Potensis\Pages;

use App\Filament\Resources\Potensis\PotensiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPotensi extends EditRecord
{
    protected static string $resource = PotensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
