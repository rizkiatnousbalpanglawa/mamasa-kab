<?php

namespace App\Filament\Resources\Sejarahs\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SejarahForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                TextInput::make('subjudul')
                    ->required(),
                RichEditor::make('konten')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
