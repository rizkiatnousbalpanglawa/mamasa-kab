<?php

namespace App\Filament\Resources\Lambangs\Pages;

use App\Filament\Resources\Lambangs\LambangResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLambang extends EditRecord
{
    protected static string $resource = LambangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
