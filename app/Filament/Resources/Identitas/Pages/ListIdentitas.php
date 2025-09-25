<?php

namespace App\Filament\Resources\Identitas\Pages;

use App\Filament\Resources\Identitas\IdentitasResource;
use App\Models\Identitas;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListIdentitas extends ListRecords
{
    protected static string $resource = IdentitasResource::class;

    protected function getHeaderActions(): array
    {

        $exist = Identitas::exists();

        return [
            CreateAction::make()->visible(!$exist),
        ];
    }
}
