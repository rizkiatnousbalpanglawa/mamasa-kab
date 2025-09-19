<?php

use App\Http\Controllers\ViewInformasiController;
use App\Http\Middleware\HitCounterMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(HitCounterMiddleware::class)->group(function () {
    Route::get('/beranda', App\Livewire\Home::class);

    Route::get('/berita', App\Livewire\Berita\Index::class);
    Route::get('/berita/{slug}', App\Livewire\Berita\Show::class)->name('berita.detail');

    Route::get('/kegiatan', App\Livewire\Kegiatan\Index::class);
    Route::get('/kegiatan/{slug}', App\Livewire\Kegiatan\Show::class)->name('kegiatan.detail');

    Route::get('/visi-misi', App\Livewire\Visimisi::class);
    Route::get('/sejarah', App\Livewire\Sejarah::class);
    Route::get('/lambang', App\Livewire\Lambang::class);
    Route::get('/info', App\Livewire\Info::class);
    Route::get('/info/view/{id}', [ViewInformasiController::class, 'view'])->name('informasi.view');
});

Route::get('/', App\Livewire\Portal::class);
