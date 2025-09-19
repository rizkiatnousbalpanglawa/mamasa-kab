<?php

namespace App\Filament\Resources\Potensis;

use App\Filament\Resources\Potensis\Pages\CreatePotensi;
use App\Filament\Resources\Potensis\Pages\EditPotensi;
use App\Filament\Resources\Potensis\Pages\ListPotensis;
use App\Filament\Resources\Potensis\Schemas\PotensiForm;
use App\Filament\Resources\Potensis\Tables\PotensisTable;
use App\Models\Potensi;
use App\NavigationGroups;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PotensiResource extends Resource
{
    protected static ?string $model = Potensi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = NavigationGroups::POTENSI;

    protected static ?string $pluralModelLabel = 'Potensi';

    protected static ?string $label = 'Potensi';

    public static function form(Schema $schema): Schema
    {
        return PotensiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PotensisTable::configure($table);
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
            'index' => ListPotensis::route('/'),
            'create' => CreatePotensi::route('/create'),
            'edit' => EditPotensi::route('/{record}/edit'),
        ];
    }
}
