<?php

namespace App\Filament\Resources\Informasis\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InformasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn($state, $set) => $set('slug', Str::slug($state)))
                    ->required(),
                TextInput::make('slug')
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->hint('Slug digunakan untuk URL')
                    ->required(),
                Select::make('kategori_id')
                    ->relationship('kategori', 'nama_kategori')
                    ->required(),
                DatePicker::make('waktu_informasi')
                    ->default(now())
                    ->required(),
                Radio::make('tipe')
                    ->label('Jenis Lampiran')
                    ->options([
                        'file' => 'Upload Dokumen',
                        'link' => 'Tambahkan Link',
                    ])
                    ->required()
                    ->live()
                    ->inline(),
                FileUpload::make('pdf')
                    ->directory('informasi')
                    ->deleteUploadedFileUsing(function ($file) {
                        if ($file && Storage::disk('public')->exists($file)) {
                            Storage::disk('public')->delete($file);
                        }
                    })
                    ->maxSize(5120)
                    ->columnSpanFull()
                    ->label('Lampiran Maksimal: 5 MB')
                    ->visible(fn(Get $get): bool => $get('tipe') === 'file'),
                TextInput::make('pdf')
                    ->label('Link')
                    ->url()
                    ->visible(fn($get) => $get('tipe') === 'link')
            ]);
    }
}
