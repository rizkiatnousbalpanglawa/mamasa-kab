<?php

namespace App\Filament\Resources\Pemerintahs\Pages;

use App\Filament\Resources\Pemerintahs\PemerintahResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPemerintah extends EditRecord
{
    protected static string $resource = PemerintahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
