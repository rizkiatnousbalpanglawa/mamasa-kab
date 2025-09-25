<?php

namespace App\Filament\Resources\Identitas;

use App\Filament\Resources\Identitas\Pages\CreateIdentitas;
use App\Filament\Resources\Identitas\Pages\EditIdentitas;
use App\Filament\Resources\Identitas\Pages\ListIdentitas;
use App\Filament\Resources\Identitas\Schemas\IdentitasForm;
use App\Filament\Resources\Identitas\Tables\IdentitasTable;
use App\Models\Identitas;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class IdentitasResource extends Resource
{
    protected static ?string $model = Identitas::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return IdentitasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return IdentitasTable::configure($table);
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
            'index' => ListIdentitas::route('/'),
            'create' => CreateIdentitas::route('/create'),
            'edit' => EditIdentitas::route('/{record}/edit'),
        ];
    }
}
