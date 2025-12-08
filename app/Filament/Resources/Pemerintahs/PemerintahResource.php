<?php

namespace App\Filament\Resources\Pemerintahs;

use App\Filament\Resources\Pemerintahs\Pages\CreatePemerintah;
use App\Filament\Resources\Pemerintahs\Pages\EditPemerintah;
use App\Filament\Resources\Pemerintahs\Pages\ListPemerintahs;
use App\Filament\Resources\Pemerintahs\Schemas\PemerintahForm;
use App\Filament\Resources\Pemerintahs\Tables\PemerintahsTable;
use App\Models\Pemerintah;
use App\NavigationGroups;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PemerintahResource extends Resource
{
    protected static ?string $model = Pemerintah::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = NavigationGroups::PROFIL;

    protected static ?string $pluralModelLabel = 'Pemerintahan';

    protected static ?string $label = 'Pemerintahan';


    public static function form(Schema $schema): Schema
    {
        return PemerintahForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PemerintahsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPemerintahs::route('/'),
            'create' => CreatePemerintah::route('/create'),
            'edit' => EditPemerintah::route('/{record}/edit'),
        ];
    }
}
