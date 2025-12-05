<?php

namespace App\Filament\Resources\Pengumumen\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Normalizer;

class PengumumanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (string $state, callable $set) {
                        // Normalisasi karakter fancy → ASCII
                        $normalized = Normalizer::normalize($state, Normalizer::FORM_KD);
                        $plain = preg_replace('/[^\p{L}\p{N}\s]/u', '', $normalized);

                        // Generate slug
                        $set('slug', Str::slug($plain));
                    }),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true) // pastikan kolom slug di DB unik
                    ->maxLength(255)
                    ->hint('Slug digunakan untuk URL'),
                Radio::make('tipe')
                    ->label('Jenis Lampiran')
                    ->options([
                        'file' => 'Upload Dokumen',
                        'link' => 'Tambahkan Link',
                    ])
                    ->required()
                    ->live()
                    ->inline(),
                FileUpload::make('image')
                    ->directory('pengumuman')
                    ->deleteUploadedFileUsing(function ($file) {
                        if ($file && Storage::disk('public')->exists($file)) {
                            Storage::disk('public')->delete($file);
                        }
                    })
                    ->maxSize(5120)
                    ->columnSpanFull()
                    ->label('Lampiran Maksimal: 5 MB')
                    ->visible(fn(Get $get): bool => $get('tipe') === 'file'),
                DatePicker::make('tanggal')
                    ->required(),
            ]);
    }
}
