<?php

namespace App\Filament\Resources\Lambangs;

use App\Filament\Resources\Lambangs\Pages\CreateLambang;
use App\Filament\Resources\Lambangs\Pages\EditLambang;
use App\Filament\Resources\Lambangs\Pages\ListLambangs;
use App\Filament\Resources\Lambangs\Schemas\LambangForm;
use App\Filament\Resources\Lambangs\Tables\LambangsTable;
use App\Models\Lambang;
use App\NavigationGroups;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class LambangResource extends Resource
{
    protected static ?string $model = Lambang::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = NavigationGroups::PROFIL;

    protected static ?string $pluralModelLabel = 'Lambang';

    protected static ?string $label = 'Lambang';

    public static function form(Schema $schema): Schema
    {
        return LambangForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LambangsTable::configure($table);
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
            'index' => ListLambangs::route('/'),
            'create' => CreateLambang::route('/create'),
            'edit' => EditLambang::route('/{record}/edit'),
        ];
    }
}
