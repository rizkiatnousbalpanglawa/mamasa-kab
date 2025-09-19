<?php

namespace App\Filament\Resources\VisiMisis\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;

class VisiMisiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label('Lampiran')
                    ->image()
                    ->directory('profil')
                    ->deleteUploadedFileUsing(function ($file) {
                        if ($file && Storage::disk('public')->exists($file)) {
                            Storage::disk('public')->delete($file);
                        }
                    })
                    ->maxSize(1024)
                    ->columnSpanFull()
            ]);
    }
}
