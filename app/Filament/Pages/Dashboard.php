<?php

namespace App\Filament\Pages;

use BackedEnum;

class Dashboard extends \Filament\Pages\Dashboard
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-home';

    public function getColumns(): int | array
    {
        return 2;
    }
}
