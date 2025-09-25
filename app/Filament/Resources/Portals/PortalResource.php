<?php

namespace App\Filament\Resources\Portals;

use App\Filament\Resources\Portals\Pages\ManagePortals;
use App\Models\Portal;
use App\NavigationGroups;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use UnitEnum;

class PortalResource extends Resource
{
    protected static ?string $model = Portal::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = NavigationGroups::PORTAL;

    protected static ?string $pluralModelLabel = 'Portal';

    protected static ?string $label = 'Portal';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul'),
                TextInput::make('subjudul'),
                FileUpload::make('logo')
                    ->image()
                    ->maxSize(2048)
                    ->directory('portal')
                    ->deleteUploadedFileUsing(function ($file) {
                        if ($file && Storage::disk('public')->exists($file)) {
                            Storage::disk('public')->delete($file);
                        }
                    }),
                FileUpload::make('background')
                    ->directory('portal')
                    ->maxSize(5120) // 100 MB (102400 KB)
                    ->acceptedFileTypes(['video/mp4', 'video/avi', 'video/mkv'])
                    ->deleteUploadedFileUsing(function ($file) {
                        if ($file && Storage::disk('public')->exists($file)) {
                            Storage::disk('public')->delete($file);
                        }
                    }),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('logo')
                    ->searchable(),
                TextColumn::make('judul')
                    ->searchable(),
                TextColumn::make('subjudul')
                    ->searchable(),
                TextColumn::make('background')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManagePortals::route('/'),
        ];
    }
}
